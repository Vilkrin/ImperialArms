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
        $search = request('search');
        $category = request('category');
        $tag = request('tag');

        $posts = Post::query()
            ->with(['user', 'categories', 'tags', 'media'])
            ->where('status', 'published')
            ->where('is_published', true)
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->when($search, function ($query) use ($search) {
                $query->where(function ($query) use ($search) {
                    $query->where('title', 'like', '%' . $search . '%')
                        ->orWhere('body', 'like', '%' . $search . '%');
                });
            })
            ->when($category, function ($query) use ($category) {
                $query->whereHas('categories', function ($query) use ($category) {
                    $query->where('slug', $category);
                });
            })
            ->when($tag, function ($query) use ($tag) {
                $query->whereHas('tags', function ($query) use ($tag) {
                    $query->where('slug', $tag);
                });
            })
            ->orderByDesc('published_at')
            ->paginate(6)
            ->withQueryString();

        return view('blog.index', [
            'posts' => $posts,
            'categories' => \App\Models\BlogCategory::orderBy('name')->get(),
            'tags' => \App\Models\Tag::orderBy('name')->get(),
            'search' => $search,
            'selectedCategory' => $category,
            'selectedTag' => $tag,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $post = Post::query()
            ->with(['user', 'categories', 'tags', 'media'])
            ->where('slug', $slug)
            ->where('status', 'published')
            ->where('is_published', true)
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->firstOrFail();

        $seoTitle = $post->seo_title ?: $post->title;

        $seoDescription = $post->seo_description
            ?: Str::limit(strip_tags($post->body), 160);

        $socialImage = $post->getFirstMediaUrl('featured_images')
            ?: null;

        return view('blog.show', compact(
            'post',
            'seoTitle',
            'seoDescription',
            'socialImage'
        ));
    }
}
