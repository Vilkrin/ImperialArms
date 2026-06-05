<div>
    <form wire:submit.prevent="updatePost">

        <!-- Page Actions -->
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mb-6">
            <a href="{{ route('admin.posts.index') }}" class="inline-flex items-center gap-2 text-slate-300 hover:text-amber-400 transition-colors">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
                Back to Posts
            </a>

            <div class="flex items-center gap-3">
                <flux:button
                    href="{{ route('blog.show', $post->slug) }}"
                    target="_blank"
                    variant="ghost"
                    class="cursor-pointer"
                >
                    Preview
                </flux:button>

                <flux:button
                    type="submit"
                    variant="primary"
                    color="amber"
                    class="cursor-pointer"
                >
                    Update Post
                </flux:button>
            </div>
        </div>

        <div class="grid grid-cols-1 xl:grid-cols-[1fr_20rem] gap-6">

            <!-- Main Content -->
            <div class="space-y-6">
                <div class="bg-slate-900/50 border border-amber-400/20 backdrop-blur-sm rounded-lg shadow-sm">
                    <div class="p-6 border-b border-slate-700">
                        <h2 class="text-lg font-semibold text-slate-100">Post Content</h2>
                    </div>

                    <div class="p-6 space-y-4">

                        <div class="space-y-2">
                            <label class="text-sm font-medium text-slate-200">Title</label>
                            <input
                                type="text"
                                wire:model.live="title"
                                class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm text-slate-100 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400"
                            >
                            @error('title') <p class="text-sm text-red-400">{{ $message }}</p> @enderror
                        </div>

                        <div class="space-y-2">
                            <label class="text-sm font-medium text-slate-200">URL Slug</label>

                            <input
                                type="text"
                                wire:model.live="slug"
                                class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm text-slate-100 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400"
                            >

                            <p class="text-xs text-slate-400">
                                Preview:
                                <span class="text-slate-300">/blog/{{ $slug ?: 'post-url-slug' }}</span>
                            </p>

                            @error('slug') <p class="text-sm text-red-400">{{ $message }}</p> @enderror
                        </div>

                    <div class="space-y-2">
                        <label class="text-sm font-medium text-slate-200">Content</label>

                        <div wire:ignore>
                            <x-admin.forms.summernote-editor
                                id="post-content-editor"
                                wireModel="body"
                            >
                                {!! $body !!}
                            </x-admin.forms.summernote-editor>
                        </div>

                        @error('body')
                            <p class="text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="space-y-4">

                <!-- Publish Settings -->
                <div class="bg-slate-900/50 border border-amber-400/20 backdrop-blur-sm rounded-lg shadow-sm">
                    <div class="p-4 border-b border-slate-700">
                        <span class="font-semibold text-slate-100">Publish Settings</span>
                    </div>

                    <div class="p-4 space-y-4">
                        <div class="space-y-2">
                            <label class="text-sm font-medium text-slate-200">Status</label>
                            <select
                                wire:model="status"
                                class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm text-slate-100 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400"
                            >
                                <option value="draft">Draft</option>
                                <option value="published">Published</option>
                                <option value="archived">Archived</option>
                            </select>
                            @error('status') <p class="text-sm text-red-400">{{ $message }}</p> @enderror
                        </div>

                        <div class="space-y-2">
                            <label class="text-sm font-medium text-slate-200">Publish Date</label>
                            <input
                                type="date"
                                wire:model="published_at"
                                class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm text-slate-100 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400"
                            >
                            @error('published_at') <p class="text-sm text-red-400">{{ $message }}</p> @enderror
                        </div>

                        <label class="flex items-center justify-between gap-3">
                            <span class="text-sm font-medium text-slate-200">Featured Post</span>
                            <input
                                type="checkbox"
                                wire:model="is_featured"
                                class="h-4 w-4 accent-amber-400"
                            >
                        </label>
                    </div>
                </div>

                <!-- Post Details -->
                <div class="bg-slate-900/50 border border-amber-400/20 backdrop-blur-sm rounded-lg shadow-sm">
                    <div class="p-4 border-b border-slate-700">
                        <span class="font-semibold text-slate-100">Post Details</span>
                    </div>

                    <div class="p-4 space-y-4">
                        <div class="space-y-2">
                            <label class="text-sm font-medium text-slate-200">Author</label>
                            <input
                                type="text"
                                value="{{ $post->user->name ?? 'Imperial Arms' }}"
                                disabled
                                class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-950/70 px-3 py-2 text-sm text-slate-400"
                            >
                        </div>

                        <div class="space-y-2">
                            <label class="text-sm font-medium text-slate-200">Categories</label>

                            <flux:pillbox
                                wire:model="category_ids"
                                variant="combobox"
                                multiple
                            >
                                <x-slot name="input">
                                    <flux:pillbox.input
                                        wire:model.live="categorySearch"
                                        placeholder="Choose categories..."
                                    />
                                </x-slot>

                                @foreach($this->categoryOptions as $category)
                                    <flux:pillbox.option :value="$category->id">
                                        {{ $category->name }}
                                    </flux:pillbox.option>
                                @endforeach

                                <flux:pillbox.option.create
                                    wire:click="createCategory"
                                    min-length="2"
                                >
                                    Create "<span wire:text="categorySearch"></span>"
                                </flux:pillbox.option.create>

                                <x-slot name="empty">
                                    <flux:pillbox.option.empty when-loading="Loading categories...">
                                        No categories found.
                                    </flux:pillbox.option.empty>
                                </x-slot>
                            </flux:pillbox>

                            @error('category_ids')
                                <p class="text-sm text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="space-y-2">
                            <label class="text-sm font-medium text-slate-200">Tags</label>

                            <flux:pillbox
                                wire:model="tag_ids"
                                variant="combobox"
                                multiple
                            >
                                <x-slot name="input">
                                    <flux:pillbox.input
                                        wire:model.live="tagSearch"
                                        placeholder="Choose tags..."
                                    />
                                </x-slot>

                                @foreach($this->tagOptions as $tag)
                                    <flux:pillbox.option :value="$tag->id">
                                        {{ $tag->name }}
                                    </flux:pillbox.option>
                                @endforeach

                                <flux:pillbox.option.create
                                    wire:click="createTag"
                                    min-length="2"
                                >
                                    Create "<span wire:text="tagSearch"></span>"
                                </flux:pillbox.option.create>

                                <x-slot name="empty">
                                    <flux:pillbox.option.empty when-loading="Loading tags...">
                                        No tags found.
                                    </flux:pillbox.option.empty>
                                </x-slot>
                            </flux:pillbox>

                            @error('tag_ids')
                                <p class="text-sm text-red-400">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- SEO Settings -->
                <div class="bg-slate-900/50 border border-amber-400/20 backdrop-blur-sm rounded-lg shadow-sm">
                    <div class="p-4 border-b border-slate-700">
                        <span class="font-semibold text-slate-100">SEO Settings</span>
                    </div>

                    <div class="p-4 space-y-4">
                        <div class="space-y-2">
                            <label class="text-sm font-medium text-slate-200">Meta Title</label>
                            <input
                                type="text"
                                wire:model="seo_title"
                                class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm text-slate-100 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400"
                            >
                            @error('seo_title') <p class="text-sm text-red-400">{{ $message }}</p> @enderror
                        </div>

                        <div class="space-y-2">
                            <label class="text-sm font-medium text-slate-200">Meta Description</label>
                            <textarea
                                rows="3"
                                wire:model="seo_description"
                                class="flex w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm text-slate-100 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400"
                            ></textarea>
                            @error('seo_description') <p class="text-sm text-red-400">{{ $message }}</p> @enderror
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </form>
</div>