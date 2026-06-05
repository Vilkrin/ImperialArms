<div>
                <!-- Page actions -->
                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mb-6">
                    <a href="{{ route('admin.posts.index') }}" class="inline-flex items-center gap-2 text-slate-300 hover:text-amber-400 transition-colors">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                        Back to Posts
                    </a>
                    <div class="flex items-center gap-3">
                        <flux:button
                            type="button"
                            wire:click="saveDraft"
                            class="cursor-pointer"
                            variant="ghost"
                        >
                            Save Draft
                        </flux:button>
                        <flux:button
                            type="button"
                            wire:click="publish"
                            variant="primary"
                            class="cursor-pointer"
                            color="amber"
                        >
                            Publish
                        </flux:button>
                    </div>
                </div>

                
                <!-- Editor -->
                <form class="grid grid-cols-1 xl:grid-cols-[1fr_20rem] gap-6">
                    <div class="space-y-6">
                        <div class="bg-slate-900/50 border border-amber-400/20 backdrop-blur-sm rounded-lg shadow-sm">
                            <div class="p-6 border-b border-slate-700">
                                <h2 class="text-lg font-semibold text-slate-100">Post Content</h2>
                            </div>
                            <div class="p-6 space-y-4">
                                <div class="space-y-2">
                                    <label class="text-sm font-medium text-slate-200">Title</label>
                                    <input id="title" wire:model.live="title" placeholder="Enter post title..." class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm placeholder:text-slate-400 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400" />
                                </div>
                                <div class="space-y-2">
                                    <label class="text-sm font-medium text-slate-200">URL Slug</label>
                                    <input id="slug" wire:model.live="slug" placeholder="post-url-slug" class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm placeholder:text-slate-400 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400" />
                                    <p class="text-xs text-slate-400">Preview: <span class="text-slate-300">/blog/</span><span id="slugPreview" class="text-slate-300">post-url-slug</span></p>
                                </div>
                                <div class="space-y-2">
                                    <label class="text-sm font-medium text-slate-200">Featured Image</label>

                                    <input
                                        type="file"
                                        wire:model="featured_image"
                                        accept="image/*"
                                        class="cursor-pointer block w-full text-sm text-slate-300 file:mr-4 file:rounded-md file:border-0 file:bg-amber-400 file:px-4 file:py-2 file:text-sm file:font-medium file:text-slate-900 hover:file:bg-amber-300"
                                    />

                                    @if ($featured_image)
                                        <div class="mt-3 overflow-hidden rounded-lg border border-slate-700 bg-slate-950">
                                            <img
                                                src="{{ $featured_image->temporaryUrl() }}"
                                                alt="Featured image preview"
                                                class="h-48 w-full object-cover"
                                            >
                                        </div>
                                    @endif

                                    @error('featured_image')
                                        <p class="text-sm text-red-400">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="space-y-2">
                                    <label class="text-sm font-medium text-slate-200">Content</label>

                                    <div wire:ignore>
                                        <x-admin.forms.summernote-editor
                                            id="post-content-editor"
                                            wireModel="body"
                                            placeholder="Write your post content here..."
                                        />
                                    </div>

                                    @error('body')
                                        <p class="text-sm text-red-400">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Settings -->
                    <div class="space-y-4">
                        <div class="bg-slate-900/50 border border-amber-400/20 backdrop-blur-sm rounded-lg shadow-sm">
                            <button type="button" class="w-full flex items-center justify-between p-4 border-b border-slate-700 hover:bg-slate-800/40 transition-colors" data-collapsible="publish">
                                <span class="font-semibold text-slate-100">Publish Settings</span>
                                <svg class="h-4 w-4 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                            </button>
                            <div id="collapsible-publish" class="p-4 space-y-4">
                                <div class="space-y-2">
                                    <label class="text-sm font-medium text-slate-200">Status</label>
                                    <select wire:model="status" class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400">
                                        <option value="draft">Draft</option>
                                        <option value="published">Published</option>
                                        <option value="archived">Archived</option>
                                    </select>
                                </div>
                                <div class="space-y-2">
                                    <label class="text-sm font-medium text-slate-200">Publish Date</label>
                                    <input type="date" wire:model="published_at" class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400" />
                                </div>
                                <label class="flex items-center justify-between gap-3">
                                    <span class="text-sm font-medium text-slate-200">Featured Post</span>
                                    <input type="checkbox" class="h-4 w-4 accent-amber-400" />
                                </label>
                            </div>
                        </div>

                        <div class="bg-slate-900/50 border border-amber-400/20 backdrop-blur-sm rounded-lg shadow-sm">
                            <button type="button" class="w-full flex items-center justify-between p-4 border-b border-slate-700 hover:bg-slate-800/40 transition-colors" data-collapsible="details">
                                <span class="font-semibold text-slate-100">Post Details</span>
                                <svg class="h-4 w-4 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                            </button>
                            <div id="collapsible-details" class="p-4 space-y-4">
                                <div class="space-y-2">
                                    <label class="text-sm font-medium text-slate-200">Author</label>
                                    <input id="author" placeholder="Author name" class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm placeholder:text-slate-400 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400" />
                                </div>
                                <div class="space-y-2">
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
                                </div>
                                <div class="space-y-2">
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
                                </div>
                            </div>
                        </div>

                        <div class="bg-slate-900/50 border border-amber-400/20 backdrop-blur-sm rounded-lg shadow-sm">
                            <button type="button" class="w-full flex items-center justify-between p-4 border-b border-slate-700 hover:bg-slate-800/40 transition-colors" data-collapsible="seo">
                                <span class="font-semibold text-slate-100">SEO Settings</span>
                                <svg class="h-4 w-4 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                            </button>
                            <div class="p-4 space-y-4">
                                <div class="space-y-2">
                                    <label class="text-sm font-medium text-slate-200">Meta Title</label>
                                    <input id="metaTitle" wire:model="seo_title" placeholder="SEO title" class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm placeholder:text-slate-400 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400" />
                                </div>
                                <div class="space-y-2">
                                    <label class="text-sm font-medium text-slate-200">Meta Description</label>
                                    <textarea id="metaDescription" wire:model="seo_description" rows="3" placeholder="SEO description" class="flex w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm placeholder:text-slate-400 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400"></textarea>
                                </div>
                            </div>
                        </div>
                    
                </form>

    @persist('toast')
        <flux:toast />
    @endpersist
                
</div>

