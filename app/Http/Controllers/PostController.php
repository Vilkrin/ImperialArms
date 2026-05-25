<?php

namespace App\Http\Controllers;

use App\Models\Post;

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

        return view('blog.show', compact('post'));
    }
}
