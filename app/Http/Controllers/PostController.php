<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $page = request()->get('page', 1);

        $featuredPost = null;

        $query = Post::query()
            ->where('status', 'published')
            ->where('is_published', true)
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->orderByDesc('published_at');

        if ($page == 1) {
            $featuredPost = (clone $query)
                ->where('is_featured', true)
                ->first();

            $posts = $query
                ->when($featuredPost, fn($query) => $query->where('id', '!=', $featuredPost->id))
                ->paginate(4);
        } else {
            $posts = $query->paginate(5);
        }

        return view('blog.index', [
            'featuredPost' => $featuredPost,
            'posts' => $posts,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $post = Post::query()
            ->where('slug', $slug)
            ->where('status', 'published')
            ->where('is_published', true)
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->firstOrFail();

        $seoTitle = $post->seo_title;

        $seoDescription = $post->seo_description
            ?: Str::limit(strip_tags($post->body), 160);

        $socialImage = $post->getFirstMediaUrl('blog_images')
            ?: null;

        return view('blog.show', compact(
            'post',
            'seoTitle',
            'seoDescription',
            'socialImage'
        ));
    }
}
