<?php

namespace App\Livewire\Admin\Blog;

use Livewire\Component;
use App\Models\Post;
use Livewire\Attributes\Computed;
use Livewire\WithPagination;
use Flux\Flux;

class BlogTable extends Component
{
    use WithPagination;

    public string $search = '';
    public string $status = 'all';
    public string $category = 'all';

    public function search()
    {
        $this->resetPage();
    }


    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    public function updatingStatus(): void
    {
        $this->resetPage();
    }

    public function updatingCategory(): void
    {
        $this->resetPage();
    }

    public function deletePost(Post $post): void
    {
        $post->delete();

        Flux::toast(
            heading: 'Post deleted',
            text: 'The blog post has been deleted successfully.',
            variant: 'success',
        );
    }

    #[Computed]
    public function posts()
    {
        return Post::query()
            ->with(['user', 'categories', 'tags', 'media'])
            ->when($this->search, function ($query) {
                $query->where(function ($query) {
                    $query->where('title', 'like', '%' . $this->search . '%')
                        ->orWhereHas('user', function ($query) {
                            $query->where('name', 'like', '%' . $this->search . '%');
                        });
                });
            })
            ->when($this->status !== 'all', function ($query) {
                $query->where('status', $this->status);
            })
            ->when($this->category !== 'all', function ($query) {
                $query->whereHas('categories', function ($query) {
                    $query->where('id', $this->category);
                });
            })
            ->latest()
            ->paginate(10);
    }

    public function render()
    {
        return view('livewire.admin.blog.blog-table', [
            'totalPosts' => $this->posts->total(),
            'publishedPosts' => Post::where('status', 'published')->count(),
            'draftPosts' => Post::where('status', 'draft')->count(),
            'featuredPosts' => 0,
        ]);
    }
}
