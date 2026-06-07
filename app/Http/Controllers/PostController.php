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
            ->where('is_published', true)
            ->whereNotNull('published_at')
            ->orderByDesc('published_at');

        if ($page == 1) {
            $featuredPost = (clone $query)->first();

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
        $post = Post::where('slug', $slug)->firstOrFail();

        abort_unless($post->status === 'published', 404);

        $seoTitle = $post->seo_title;

        $seoDescription = $post->seo_description
            ?: Str::limit(strip_tags($post->body), 160);

        return view('blog.show', compact(
            'post',
            'seoTitle',
            'seoDescription'
        ));
    }
}
