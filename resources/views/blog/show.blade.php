<x-layouts.main :title="$post->title">

    <div class="relative z-10 min-h-screen bg-slate-950 text-slate-100 pb-16">

        <!-- Hero Section -->
        <section class="bg-slate-900 pt-24 pb-10 border-b border-slate-800">
            <div class="container mx-auto px-4">
                <div class="max-w-3xl mx-auto">

                    <a href="{{ route('blog.index') }}" class="inline-flex items-center text-sm text-slate-400 hover:text-amber-400 transition-colors">
                        <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                        Back to Blog
                    </a>

                    <div class="mt-6">
                    @if ($post->categories->isNotEmpty())
                        <div class="flex flex-wrap gap-2">
                            @foreach ($post->categories as $category)
                                <span class="inline-flex items-center rounded-full bg-amber-400/10 text-amber-300 px-3 py-1 text-xs font-semibold uppercase tracking-wide">
                                    {{ $category->name }}
                                </span>
                            @endforeach
                        </div>
                    @endif

                        <h1 class="text-3xl md:text-4xl lg:text-5xl font-orbitron font-bold mt-4 mb-4">
                            {{ $post->title }}
                        </h1>

                        <div class="flex flex-wrap items-center gap-4 text-slate-400 text-sm">
                            @if ($post->user)
                                <a
                                    href="{{ route('profile.show', ['slug' => Str::slug($post->user->name)]) }}"
                                    class="hover:text-amber-400 transition-colors"
                                >
                                    {{ $post->user->name }}
                                </a>
                            @else
                                <span>Imperial Arms</span>
                            @endif
                            <span>{{ $post->published_at?->format('F j, Y') }}</span>
                            <span>{{ ceil(str_word_count(strip_tags($post->body)) / 200) }} min read</span>
                        </div>
                    </div>

                    <!-- Social Share -->
                    <div class="mt-6 flex flex-wrap items-center gap-3">
                        <span class="text-xs uppercase tracking-wide text-slate-500 font-semibold">
                            Share:
                        </span>

                        <div class="flex flex-wrap items-center gap-2">
                            <!-- X -->
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($post->title) }}" target="_blank" rel="noopener noreferrer" aria-label="Share on X" class="inline-flex items-center justify-center rounded-md border border-slate-700 bg-slate-900 p-2 text-slate-100 hover:bg-slate-800 hover:border-amber-400/60 hover:text-amber-300 transition">
                                <svg class="h-4 w-4 fill-current" viewBox="0 0 24 24"><path d="M18.901 1.153h3.68l-8.04 9.19L24 22.847h-7.406l-5.8-7.584-6.64 7.584H.474l8.6-9.83L0 1.153h7.594l5.243 6.932L18.901 1.153Zm-1.29 19.494h2.039L6.486 3.24H4.298L17.611 20.647Z"/></svg>
                            </a>

                            <!-- Facebook -->
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}" target="_blank" rel="noopener noreferrer" aria-label="Share on Facebook" class="inline-flex items-center justify-center rounded-md border border-slate-700 bg-slate-900 p-2 text-slate-100 hover:bg-slate-800 hover:border-amber-400/60 hover:text-amber-300 transition">
                                <svg class="h-4 w-4 fill-current" viewBox="0 0 24 24"><path d="M22 12a10 10 0 10-11.5 9.87v-7h-2.1V12h2.1v-2.3c0-2.07 1.23-3.22 3.12-3.22.9 0 1.84.16 1.84.16v2.02h-1.04c-1.03 0-1.35.64-1.35 1.3V12h2.3l-.37 2.87h-1.93v7A10 10 0 0022 12z"/></svg>
                            </a>

                            <!-- Reddit -->
                            <a href="https://reddit.com/submit?url={{ urlencode(request()->url()) }}&title={{ urlencode($post->title) }}" target="_blank" rel="noopener noreferrer" aria-label="Share on Reddit" class="inline-flex items-center justify-center rounded-md border border-slate-700 bg-slate-900 p-2 text-slate-100 hover:bg-slate-800 hover:border-amber-400/60 hover:text-amber-300 transition">
                                <svg class="h-4 w-4 fill-current" viewBox="0 0 24 24"><path d="M14.464 19.36c-.98.49-2.204.734-3.464.734-1.26 0-2.485-.245-3.464-.734a.75.75 0 1 1 .67-1.342c.756.378 1.767.576 2.794.576 1.028 0 2.038-.198 2.795-.576a.75.75 0 1 1 .669 1.342Zm5.032-7.36a1.75 1.75 0 0 0-2.975-1.238c-1.47-.982-3.44-1.607-5.521-1.67l1.01-3.193 2.725.638a1.5 1.5 0 1 0 .346-1.431l-3.234-.757a.75.75 0 0 0-.892.503l-1.21 3.825c-2.1.05-4.09.675-5.575 1.665A1.75 1.75 0 1 0 4.5 13.75c0 .164.023.324.067.476-.005.092-.007.184-.007.277 0 3.2 2.95 5.8 6.59 5.8 3.64 0 6.59-2.6 6.59-5.8 0-.093-.002-.185-.007-.277a1.74 1.74 0 0 0 .763-1.426Zm-11.246 1.25a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm5.5 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z"/></svg>
                            </a>

                            <!-- LinkedIn -->
                            <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(request()->url()) }}" target="_blank" rel="noopener noreferrer" aria-label="Share on LinkedIn" class="inline-flex items-center justify-center rounded-md border border-slate-700 bg-slate-900 p-2 text-slate-100 hover:bg-slate-800 hover:border-amber-400/60 hover:text-amber-300 transition">
                                <svg class="h-4 w-4 fill-current" viewBox="0 0 24 24"><path d="M4.98 3.5C4.98 4.604 4.104 5.5 3 5.5S1.02 4.604 1.02 3.5 1.896 1.5 3 1.5s1.98.896 1.98 2ZM1.5 8h3V22h-3V8Zm7 0h2.88v1.91h.04c.4-.76 1.38-1.56 2.84-1.56 3.04 0 3.6 2 3.6 4.59V22h-3v-6.24c0-1.49-.03-3.4-2.07-3.4-2.07 0-2.39 1.62-2.39 3.3V22h-3V8Z"/></svg>
                            </a>

                            <!-- Copy Link -->
                            <button type="button" onclick="navigator.clipboard.writeText('{{ request()->url() }}')" aria-label="Copy link" class="inline-flex items-center justify-center rounded-md border border-slate-700 bg-slate-900 p-2 text-slate-100 hover:bg-slate-800 hover:border-amber-400/60 hover:text-amber-300 transition">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16h8m-8-4h8m-8-4h8M7 4h10a2 2 0 012 2v12a2 2 0 01-2 2H7a2 2 0 01-2-2V6a2 2 0 012-2z"/></svg>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Featured Image -->
        <section class="container mx-auto px-4 py-8">
            <div class="max-w-4xl mx-auto">
                <div class="aspect-[21/9] rounded-lg overflow-hidden bg-slate-900 border border-slate-800">
                    @if ($post->getFirstMediaUrl('featured_images'))
                        <img
                            src="{{ $post->getFirstMediaUrl('featured_images') }}"
                            alt="{{ $post->title }}"
                            class="w-full h-full object-cover"
                        >
                    @else
                        <div class="w-full h-full bg-gradient-to-r from-amber-400/20 via-amber-500/10 to-slate-900/60"></div>
                    @endif
                </div>
            </div>
        </section>

        <main class="container mx-auto px-4 py-12">
            <div class="max-w-3xl mx-auto">

                <!-- Article Content -->
                <article class="prose prose-invert prose-slate max-w-none">
                    {!! $post->body !!}
                </article>

                <!-- Comments Section Placeholder -->
                <section class="mt-12">
                    <h2 class="text-2xl font-orbitron font-semibold mb-6 flex items-center gap-2 text-slate-100">
                        <svg class="h-6 w-6 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v7a2 2 0 01-2 2h-2M7 8H5a2 2 0 00-2 2v7a2 2 0 002 2h2m2-5h6M9 5h6a2 2 0 012 2v8a2 2 0 01-2 2H9a2 2 0 01-2-2V7a2 2 0 012-2z"/>
                        </svg>
                        Comments
                    </h2>

                    <!-- Comment Form -->
                    <div class="bg-slate-900 border border-slate-800 rounded-lg mb-8">
                        <div class="p-6 border-b border-slate-800">
                            <h3 class="text-lg font-orbitron font-semibold text-slate-100">Leave a Comment</h3>
                            <p class="mt-1 text-sm text-slate-400">
                                Share your thoughts about this article.
                            </p>
                        </div>

                        <div class="p-6">
                            <form class="space-y-4">
                                <div class="space-y-2">
                                    <label for="comment-name" class="block text-sm font-medium text-slate-200">Name</label>
                                    <input
                                        id="comment-name"
                                        type="text"
                                        placeholder="Your name"
                                        class="h-10 w-full rounded-md border border-slate-700 bg-slate-950 px-3 text-sm text-slate-100 placeholder:text-slate-500 focus:outline-none focus:ring-2 focus:ring-amber-400 focus:ring-offset-2 focus:ring-offset-slate-950"
                                    />
                                </div>

                                <div class="space-y-2">
                                    <label for="comment-content" class="block text-sm font-medium text-slate-200">Comment</label>
                                    <textarea
                                        id="comment-content"
                                        rows="4"
                                        placeholder="Share your thoughts..."
                                        class="w-full rounded-md border border-slate-700 bg-slate-950 px-3 py-2 text-sm text-slate-100 placeholder:text-slate-500 focus:outline-none focus:ring-2 focus:ring-amber-400 focus:ring-offset-2 focus:ring-offset-slate-950"
                                    ></textarea>
                                </div>

                                <button type="button" class="inline-flex items-center rounded-md bg-amber-400 text-slate-900 px-4 py-2 text-sm font-medium hover:bg-amber-300 transition">
                                    Post Comment
                                </button>
                            </form>
                        </div>
                    </div>

                    <!-- Placeholder Comments -->
                    <div class="space-y-6">

                        <div class="bg-slate-900 border border-slate-800 rounded-lg">
                            <div class="p-6">
                                <div class="flex gap-4">
                                    <div class="w-10 h-10 rounded-full bg-amber-400/15 flex items-center justify-center flex-shrink-0">
                                        <svg class="h-5 w-5 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.655 6.879 1.804M15 11a3 3 0 10-6 0 3 3 0 006 0z"/>
                                        </svg>
                                    </div>

                                    <div class="flex-1 min-w-0">
                                        <div class="flex items-center gap-2 mb-1">
                                            <span class="font-semibold text-slate-100">Alex Thompson</span>
                                            <span class="text-xs text-slate-500">March 16, 2024</span>
                                        </div>

                                        <p class="text-sm text-slate-300 mb-3">
                                            Great article! This section really helped me understand the current state of space travel technology.
                                        </p>

                                        <div class="flex items-center gap-4 text-xs">
                                            <button class="inline-flex items-center h-8 px-2 rounded-md text-slate-400 hover:text-amber-300 hover:bg-slate-800 transition">
                                                12
                                            </button>

                                            <button class="inline-flex items-center h-8 px-2 rounded-md text-slate-400 hover:text-amber-300 hover:bg-slate-800 transition">
                                                Reply
                                            </button>
                                        </div>

                                        <!-- Reply thread -->
                                        <div class="mt-4 pl-4 border-l-2 border-slate-800 space-y-4">
                                            <div class="flex gap-3">
                                                <div class="w-8 h-8 rounded-full bg-amber-400/15 flex items-center justify-center flex-shrink-0">
                                                    <svg class="h-4 w-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.655 6.879 1.804M15 11a3 3 0 10-6 0 3 3 0 006 0z"/>
                                                    </svg>
                                                </div>

                                                <div class="flex-1 min-w-0">
                                                    <div class="flex items-center gap-2 mb-1">
                                                        <span class="font-semibold text-sm text-slate-100">Imperial Arms</span>
                                                        <span class="text-xs text-slate-500">March 16, 2024</span>
                                                    </div>

                                                    <p class="text-sm text-slate-300 mb-2">
                                                        Thanks! We’ll be expanding this section further as the blog grows.
                                                    </p>

                                                    <button class="inline-flex items-center h-6 px-2 rounded-md text-xs text-slate-400 hover:text-amber-300 hover:bg-slate-800 transition">
                                                        5
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-slate-900 border border-slate-800 rounded-lg">
                            <div class="p-6">
                                <div class="flex gap-4">
                                    <div class="w-10 h-10 rounded-full bg-amber-400/15 flex items-center justify-center flex-shrink-0">
                                        <svg class="h-5 w-5 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.655 6.879 1.804M15 11a3 3 0 10-6 0 3 3 0 006 0z"/>
                                        </svg>
                                    </div>

                                    <div class="flex-1 min-w-0">
                                        <div class="flex items-center gap-2 mb-1">
                                            <span class="font-semibold text-slate-100">Maria Santos</span>
                                            <span class="text-xs text-slate-500">March 17, 2024</span>
                                        </div>

                                        <p class="text-sm text-slate-300 mb-3">
                                            I’d love to see a follow-up article on this topic. Are there any more posts planned?
                                        </p>

                                        <div class="flex items-center gap-4 text-xs">
                                            <button class="inline-flex items-center h-8 px-2 rounded-md text-slate-400 hover:text-amber-300 hover:bg-slate-800 transition">
                                                8
                                            </button>

                                            <button class="inline-flex items-center h-8 px-2 rounded-md text-slate-400 hover:text-amber-300 hover:bg-slate-800 transition">
                                                Reply
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>

                <!-- Author Card Placeholder -->
                <section class="mt-12 bg-slate-900 border border-slate-800 rounded-lg">
                    <div class="p-6 flex items-center gap-4">
                        <div class="w-16 h-16 rounded-full bg-amber-400/20 flex items-center justify-center">
                            <svg class="h-8 w-8 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.655 6.879 1.804M15 11a3 3 0 10-6 0 3 3 0 006 0z"/>
                            </svg>
                        </div>

                        <div>
                            <h3 class="font-semibold text-lg text-slate-100">
                                {{ $post->user->name ?? 'Imperial Arms' }}
                            </h3>

                            <p class="text-sm text-slate-400">
                                Contributing writer at Imperial Arms.
                            </p>
                        </div>
                    </div>
                </section>

                <!-- Related Posts Placeholder -->
                <section class="mt-12">
                    <h2 class="text-2xl font-orbitron font-semibold mb-6 text-slate-100">Related Posts</h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        <article class="bg-slate-900 border border-slate-800 rounded-lg overflow-hidden">
                            <div class="aspect-video bg-slate-900">
                                <div class="w-full h-full bg-gradient-to-br from-amber-400/15 to-transparent"></div>
                            </div>

                            <div class="p-5">
                                <div class="text-sm text-slate-400 mb-2">
                                    Placeholder Date
                                </div>

                                <h3 class="text-lg font-semibold mb-1 text-slate-100">
                                    Related Blog Placeholder
                                </h3>

                                <a href="#" class="inline-flex items-center text-sm text-amber-400 hover:text-amber-300 transition">
                                    Read article
                                    <svg class="h-4 w-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </a>
                            </div>
                        </article>

                        <article class="bg-slate-900 border border-slate-800 rounded-lg overflow-hidden">
                            <div class="aspect-video bg-slate-900">
                                <div class="w-full h-full bg-gradient-to-br from-amber-400/15 to-transparent"></div>
                            </div>

                            <div class="p-5">
                                <div class="text-sm text-slate-400 mb-2">
                                    Placeholder Date
                                </div>

                                <h3 class="text-lg font-semibold mb-1 text-slate-100">
                                    Related Blog Placeholder
                                </h3>

                                <a href="#" class="inline-flex items-center text-sm text-amber-400 hover:text-amber-300 transition">
                                    Read article
                                    <svg class="h-4 w-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </a>
                            </div>
                        </article>

                    </div>
                </section>

                <!-- Back to Blog -->
                <div class="mt-12 text-center">
                    <a href="{{ route('blog.index') }}" class="inline-flex items-center justify-center rounded-md border border-slate-700 bg-slate-900 px-4 py-2 text-sm font-medium text-slate-100 hover:bg-slate-800 hover:border-amber-400/60 hover:text-amber-300 transition">
                        <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                        Back to All Posts
                    </a>
                </div>

            </div>
        </main>

    </div>

</x-layouts.main>