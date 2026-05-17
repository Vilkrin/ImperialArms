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
                    <div class="lg:col-span-2">

                        <!-- Featured Post -->
                        <article class="bg-slate-900 border border-slate-800 rounded-lg overflow-hidden shadow-lg mb-8">
                            <div class="aspect-[17/8] relative overflow-hidden bg-slate-950">
                                <div class="absolute inset-0 bg-gradient-to-r from-amber-400/10 via-amber-500/5 to-slate-900/40"></div>
                            </div>

                            <div class="p-6 border-t border-slate-800">
                                <div class="text-sm text-slate-400 mb-2">
                                    March 15, 2024
                                </div>

                                <h2 class="text-2xl md:text-3xl font-semibold mb-3 text-slate-100">
                                    The Future of Deep Space Exploration
                                </h2>

                                <p class="text-slate-300 mb-4">
                                    Discover how advanced propulsion systems are revolutionizing long-distance space travel and opening new frontiers for exploration.
                                </p>

                                <a href="blog-post.html" class="inline-flex items-center text-amber-400 hover:text-amber-300 text-sm font-medium">
                                    Read more
                                    <svg class="h-4 w-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </a>
                            </div>
                        </article>

                        <!-- Posts Grid -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

                            @foreach ([
                                ['date' => 'March 12, 2024', 'title' => 'Fleet Tactics: Coordinated Strike Operations', 'text' => 'Learn about the strategic importance of fleet coordination and how our teams execute complex multi-ship operations.'],
                                ['date' => 'March 10, 2024', 'title' => 'Behind the Scenes: Ship Maintenance', 'text' => 'An inside look at the daily operations that keep our fleet in peak condition and ready for any mission.'],
                                ['date' => 'March 8, 2024', 'title' => 'Recruitment: Finding the Right Crew', 'text' => 'What we look for in new members and how to prepare for joining one of the galaxy\'s premier organizations.'],
                                ['date' => 'March 5, 2024', 'title' => 'Trade Routes and Economic Strategy', 'text' => 'Understanding the economics of space commerce and how strategic trading builds organizational strength.'],
                            ] as $post)

                                <article class="bg-slate-900 border border-slate-800 rounded-lg overflow-hidden flex flex-col shadow-lg">
                                    <div class="aspect-video relative overflow-hidden bg-slate-950">
                                        <div class="absolute inset-0 bg-gradient-to-br from-amber-400/10 to-transparent"></div>
                                    </div>

                                    <div class="p-5 flex-1">
                                        <div class="text-sm text-slate-400 mb-2">
                                            {{ $post['date'] }}
                                        </div>

                                        <h3 class="text-xl font-semibold mb-2 text-slate-100">
                                            {{ $post['title'] }}
                                        </h3>

                                        <p class="text-slate-300 text-sm">
                                            {{ $post['text'] }}
                                        </p>
                                    </div>

                                    <div class="px-5 pb-5">
                                        <a href="blog-post.html" class="inline-flex items-center justify-center w-full rounded-md border border-slate-700 bg-slate-950 px-4 py-2 text-sm font-medium text-slate-100 hover:bg-slate-800 hover:border-amber-400/60 hover:text-amber-300 transition">
                                            Read more
                                        </a>
                                    </div>
                                </article>

                            @endforeach

                        </div>

                        <!-- Simple Pagination -->
                        <div class="flex items-center justify-center gap-2 mt-8">
                            <button class="inline-flex items-center px-3 py-1.5 rounded-md border border-slate-700 bg-slate-900 text-xs font-medium text-slate-300 hover:bg-slate-800 hover:border-amber-400/60 hover:text-amber-300 transition">
                                Previous
                            </button>

                            <button class="inline-flex items-center px-3 py-1.5 rounded-md border border-amber-400 bg-amber-400 text-xs font-semibold text-slate-900">
                                1
                            </button>

                            <button class="inline-flex items-center px-3 py-1.5 rounded-md border border-slate-700 bg-slate-900 text-xs font-medium text-slate-300 hover:bg-slate-800 hover:border-amber-400/60 hover:text-amber-300 transition">
                                2
                            </button>

                            <span class="text-slate-500 text-xs px-1">...</span>

                            <button class="inline-flex items-center px-3 py-1.5 rounded-md border border-slate-700 bg-slate-900 text-xs font-medium text-slate-300 hover:bg-slate-800 hover:border-amber-400/60 hover:text-amber-300 transition">
                                Next
                            </button>
                        </div>
                    </div>

                    <!-- Sidebar -->
                    <aside class="lg:col-span-1">
                        <div class="space-y-6 lg:sticky lg:top-24">

                            <!-- Search Widget -->
                            <section class="bg-slate-900 border border-slate-800 rounded-lg shadow-sm">
                                <div class="p-5 border-b border-slate-800">
                                    <h2 class="font-orbitron text-lg font-semibold text-slate-100">Search</h2>
                                </div>

                                <div class="p-5">
                                    <div class="flex gap-2">
                                        <input type="text" placeholder="Enter search term..." class="flex-1 h-10 rounded-md border border-slate-700 bg-slate-950 px-3 py-2 text-sm text-slate-100 placeholder:text-slate-500 focus:outline-none focus:ring-2 focus:ring-amber-400 focus:ring-offset-2 focus:ring-offset-slate-950" />

                                        <button class="inline-flex items-center rounded-md bg-amber-400 text-slate-900 px-3 text-sm font-medium hover:bg-amber-300 transition">
                                            Go
                                        </button>
                                    </div>
                                </div>
                            </section>

                            <!-- Categories Widget -->
                            <section class="bg-slate-900 border border-slate-800 rounded-lg shadow-sm">
                                <div class="p-5 border-b border-slate-800">
                                    <h2 class="font-orbitron text-lg font-semibold text-slate-100">Categories</h2>
                                </div>

                                <div class="p-5">
                                    <div class="grid grid-cols-2 gap-2 text-sm">
                                        @foreach (['Technology', 'Strategy', 'Operations', 'Recruitment', 'Economics', 'Training'] as $category)
                                            <button class="text-left text-slate-200 hover:text-amber-400 hover:bg-slate-800 rounded-md px-2 py-1 transition">
                                                {{ $category }}
                                            </button>
                                        @endforeach
                                    </div>
                                </div>
                            </section>

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

                </div>
            </div>
        </main>

    </div>

</x-layouts.main>