<?php

namespace App\Livewire\Admin\Blog;

use Livewire\Component;
use App\Models\BlogCategory;
use App\Models\Post;
use App\Models\Tag;
use Carbon\Carbon;
use Flux\Flux;
use Illuminate\Support\Str;

class EditPost extends Component
{
    public Post $post;

    public string $title = '';
    public string $slug = '';
    public string $body = '';

    public string $status = 'draft';
    public ?string $published_at = null;
    public ?string $published_time = null;
    public bool $is_featured = false;

    public bool $is_published = false;

    public string $categorySearch = '';
    public string $tagSearch = '';

    public array $category_ids = [];
    public array $tag_ids = [];

    public ?string $seo_title = null;
    public ?string $seo_description = null;

    public function mount(Post $post): void
    {
        $this->post = $post->load(['categories', 'tags', 'user']);

        $this->title = $post->title;
        $this->slug = $post->slug;
        $this->body = $post->body;
        $this->status = $post->status;
        $this->published_at = $post->published_at?->format('Y-m-d');
        $this->published_time = $post->published_at?->format('H:i');
        $this->is_featured = (bool) $post->is_featured;
        $this->is_published = (bool) $post->is_published;

        $this->category_ids = $post->categories->pluck('id')->toArray();
        $this->tag_ids = $post->tags->pluck('id')->toArray();

        $this->seo_title = $post->seo_title;
        $this->seo_description = $post->seo_description;
    }

    public function updatedTitle($value): void
    {
        $this->slug = Str::slug($value);
    }

    public function updatedSlug($value): void
    {
        $this->slug = Str::slug($value);
    }

    public function createCategory(): void
    {
        $this->validate([
            'categorySearch' => 'required|string|min:2|max:255|unique:blog_categories,name',
        ]);

        $category = BlogCategory::create([
            'name' => $this->categorySearch,
            'slug' => Str::slug($this->categorySearch),
        ]);

        $this->category_ids[] = $category->id;
        $this->categorySearch = '';
    }

    public function getCategoryOptionsProperty()
    {
        return BlogCategory::query()
            ->when(
                $this->categorySearch,
                fn($query) => $query->where('name', 'like', '%' . $this->categorySearch . '%')
            )
            ->orderBy('name')
            ->get();
    }

    public function getTagOptionsProperty()
    {
        return Tag::query()
            ->when(
                $this->tagSearch,
                fn($query) => $query->where('name', 'like', '%' . $this->tagSearch . '%')
            )
            ->orderBy('name')
            ->get();
    }

    public function createTag(): void
    {
        $this->validate([
            'tagSearch' => 'required|string|min:2|max:255|unique:tags,name',
        ]);

        $tag = Tag::create([
            'name' => $this->tagSearch,
            'slug' => Str::slug($this->tagSearch),
        ]);

        $this->tag_ids[] = $tag->id;
        $this->tagSearch = '';
    }

    public function updatePost()
    {
        $data = $this->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:posts,slug,' . $this->post->id,
            'body' => 'required|string',
            'status' => 'required|string|in:draft,scheduled,published,archived',
            'published_at' => 'nullable|date',
            'published_time' => 'nullable|date_format:H:i',
            'is_featured' => 'boolean',

            'category_ids' => 'nullable|array',
            'category_ids.*' => 'exists:blog_categories,id',

            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'exists:tags,id',

            'seo_title' => 'nullable|string|max:255',
            'seo_description' => 'nullable|string',
        ]);

        $publishedAt = $this->published_at
            ? Carbon::parse($this->published_at . ' ' . ($this->published_time ?: '00:00'))
            : null;

        $status = $this->status;

        if ($status === 'published' && $publishedAt && $publishedAt->isFuture()) {
            $status = 'scheduled';
        }

        if ($status === 'published' && ! $publishedAt) {
            $publishedAt = now();
        }

        $this->post->update([
            'title' => $this->title,
            'slug' => $this->slug,
            'body' => $this->body,
            'status' => $status,
            'is_published' => $status === 'published',
            'published_at' => $publishedAt,
            'is_featured' => $this->is_featured,
            'seo_title' => $this->seo_title,
            'seo_description' => $this->seo_description,
        ]);

        $this->post->categories()->sync($this->category_ids);
        $this->post->tags()->sync($this->tag_ids);

        Flux::toast(
            heading: 'Post updated',
            text: 'The blog post has been updated successfully.',
            variant: 'success',
        );

        return redirect()->route('admin.posts.index');
    }

    public function render()
    {
        return view('livewire.admin.blog.edit-post');
    }
}
