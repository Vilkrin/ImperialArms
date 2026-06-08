<x-layouts.main :title="__('Blog')">

    <div class="relative z-10 min-h-screen bg-slate-950 text-slate-100">

        <!-- Hero Section -->
        <section class="bg-slate-900 pt-24 pb-16 border-b border-slate-800">
            <div class="container mx-auto px-4 text-center">
                <h1 class="text-4xl md:text-5xl font-orbitron font-bold mb-4 bg-gradient-to-br from-amber-400 to-amber-500 bg-clip-text text-transparent">
                    Imperial Arms Blog
                </h1>

                <p class="text-lg md:text-xl text-slate-300 max-w-2xl mx-auto font-exo">
                    Strategic insights, fleet operations, and stories from across the 'verse.
                </p>
            </div>
        </section>

        <main class="container mx-auto px-4 py-12">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

                    <!-- Main Content -->
                    <div class="{{ $posts->isEmpty() ? 'lg:col-span-3 max-w-2xl mx-auto' : 'lg:col-span-2' }}">

                        @if ($posts->isEmpty())

                            <div class="bg-slate-900/50 border border-slate-700 rounded-lg p-8 text-center">
                                <h2 class="text-2xl font-semibold text-slate-100 mb-2">
                                    No Blogs to Display
                                </h2>

                                <p class="text-slate-400">
                                    There are currently no blog posts available.
                                </p>

                                @if ($search || $selectedCategory || $selectedTag)
                                    <a
                                        href="{{ route('blog.index') }}"
                                        class="inline-flex items-center mt-4 text-amber-400 hover:text-amber-300 text-sm font-medium"
                                    >
                                        Clear filters
                                    </a>
                                @endif
                            </div>

                        @else

                            <!-- Posts Grid -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

                                @foreach ($posts as $post)

                                    <article class="bg-slate-900 border border-slate-800 rounded-lg overflow-hidden flex flex-col shadow-lg">

                                        <div class="aspect-video relative overflow-hidden bg-slate-950">

                                            @if ($post->getFirstMediaUrl('featured_images'))
                                                <img
                                                    src="{{ $post->getFirstMediaUrl('featured_images', 'preview') }}"
                                                    alt="{{ $post->title }}"
                                                    class="w-full h-full object-cover"
                                                >
                                            @endif

                                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/20 to-transparent"></div>

                                        </div>

                                        <div class="p-5 flex-1">

                                            <div class="text-sm text-slate-400 mb-2">
                                                {{ $post->published_at?->format('F j, Y') }}
                                            </div>

                                            <h3 class="text-xl font-semibold mb-2 text-slate-100">
                                                {{ $post->title }}
                                            </h3>

                                            <p class="text-slate-300 text-sm line-clamp-3">
                                                {{ Str::limit(strip_tags($post->body), 120) }}
                                            </p>

                                        </div>

                                        <div class="px-5 pb-5">

                                            <a
                                                href="{{ route('blog.show', $post->slug) }}"
                                                class="inline-flex items-center justify-center w-full rounded-md border border-slate-700 bg-slate-950 px-4 py-2 text-sm font-medium text-slate-100 hover:bg-slate-800 hover:border-amber-400/60 hover:text-amber-300 transition"
                                            >
                                                Read more
                                            </a>

                                        </div>

                                    </article>

                                @endforeach

                            </div>

                            <!-- Pagination -->
                            <div class="mt-8">
                                {{ $posts->links() }}
                            </div>

                        @endif

                    </div>

                    @if ($posts->isNotEmpty() || $search || $selectedCategory || $selectedTag)

                        <!-- Sidebar -->
                        <aside class="lg:col-span-1">
                            <div class="space-y-6 lg:sticky lg:top-24">

                                <!-- Search Widget -->
                                <section class="bg-slate-900 border border-slate-800 rounded-lg shadow-sm">
                                    <div class="p-5 border-b border-slate-800">
                                        <h2 class="font-orbitron text-lg font-semibold text-slate-100">Search</h2>
                                    </div>

                                    <div class="p-5">
                                        <form method="GET" action="{{ route('blog.index') }}">
                                            @if ($selectedCategory)
                                                <input type="hidden" name="category" value="{{ $selectedCategory }}">
                                            @endif

                                            @if ($selectedTag)
                                                <input type="hidden" name="tag" value="{{ $selectedTag }}">
                                            @endif

                                            <div class="flex gap-2">
                                                <input
                                                    type="text"
                                                    name="search"
                                                    value="{{ $search }}"
                                                    placeholder="Enter search term..."
                                                    class="flex-1 h-10 rounded-md border border-slate-700 bg-slate-950 px-3 py-2 text-sm text-slate-100 placeholder:text-slate-500 focus:outline-none focus:ring-2 focus:ring-amber-400 focus:ring-offset-2 focus:ring-offset-slate-950"
                                                />

                                                <button
                                                    type="submit"
                                                    class="inline-flex items-center rounded-md bg-amber-400 text-slate-900 px-3 text-sm font-medium hover:bg-amber-300 transition"
                                                >
                                                    Go
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </section>

                                <!-- Categories Widget -->
                                <section class="bg-slate-900 border border-slate-800 rounded-lg shadow-sm">
                                    <div class="p-5 border-b border-slate-800">
                                        <h2 class="font-orbitron text-lg font-semibold text-slate-100">Categories</h2>
                                    </div>

                                    <div class="p-5">
                                        <div class="grid grid-cols-2 gap-2 text-sm">
                                            @forelse ($categories as $category)
                                                <a
                                                    href="{{ route('blog.index', array_filter([
                                                        'search' => $search,
                                                        'category' => $category->slug,
                                                        'tag' => $selectedTag,
                                                    ])) }}"
                                                    class="text-left text-amber-400 hover:text-amber-300 rounded-md px-2 py-1 transition {{ $selectedCategory === $category->slug ? 'font-semibold' : '' }}"
                                                >
                                                    {{ $category->name }}
                                                </a>
                                            @empty
                                                <span class="text-slate-500 col-span-2">No categories yet.</span>
                                            @endforelse
                                        </div>
                                    </div>
                                </section>

                                <!-- Tags Widget -->
                                <section class="bg-slate-900 border border-slate-800 rounded-lg shadow-sm">
                                    <div class="p-5 border-b border-slate-800">
                                        <h2 class="font-orbitron text-lg font-semibold text-slate-100">Tags</h2>
                                    </div>

                                    <div class="p-5">
                                        <div class="flex flex-wrap gap-2 text-sm">
                                            @forelse ($tags as $tag)
                                                <a
                                                    href="{{ route('blog.index', array_filter([
                                                        'search' => $search,
                                                        'category' => $selectedCategory,
                                                        'tag' => $tag->slug,
                                                    ])) }}"
                                                    class="inline-flex items-center rounded-md px-2 py-1 transition text-amber-400 hover:text-amber-300 hover:bg-slate-800 {{ $selectedTag === $tag->slug ? 'bg-slate-800 font-semibold' : '' }}"
                                                >
                                                    #{{ $tag->name }}
                                                </a>
                                            @empty
                                                <span class="text-slate-500">No tags yet.</span>
                                            @endforelse
                                        </div>
                                    </div>
                                </section>

                                @if ($search || $selectedCategory || $selectedTag)
                                    <section class="bg-slate-900 border border-slate-800 rounded-lg shadow-sm">
                                        <div class="p-5">
                                            <a
                                                href="{{ route('blog.index') }}"
                                                class="inline-flex items-center text-amber-400 hover:text-amber-300 text-sm font-medium"
                                            >
                                                Clear filters
                                            </a>
                                        </div>
                                    </section>
                                @endif

                                <!-- Side Widget -->
                                <section class="bg-slate-900 border border-slate-800 rounded-lg shadow-sm">
                                    <div class="p-5 border-b border-slate-800">
                                        <h2 class="font-orbitron text-lg font-semibold text-slate-100">Side Widget</h2>
                                    </div>

                                    <div class="p-5">
                                        <p class="text-sm text-slate-400">
                                            You can put anything you want inside of these side widgets. They are easy to use and styled to match the Imperial Arms design system.
                                        </p>
                                    </div>
                                </section>

                            </div>
                        </aside>

                    @endif

                </div>
            </div>
        </main>

    </div>

</x-layouts.main>