                <div class="space-y-6">
                    <!-- Toolbar -->
                    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                        <div class="flex flex-col sm:flex-row items-start sm:items-center gap-3 w-full sm:w-auto">
                            <div class="relative w-full sm:w-80">
                                <svg class="absolute left-3 top-1/2 -translate-y-1/2 h-4 w-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                </svg>
                                <input id="postsSearch" placeholder="Search posts..." class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm pl-10 placeholder:text-slate-400 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400" />
                            </div>
                            <select id="statusFilter" class="flex h-10 w-full sm:w-40 rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400">
                                <option value="all">All Status</option>
                                <option value="published">Published</option>
                                <option value="draft">Draft</option>
                                <option value="archived">Archived</option>
                            </select>
                            <select id="categoryFilter" class="flex h-10 w-full sm:w-44 rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400">
                                <option value="All">All</option>
                                <option value="Technology">Technology</option>
                                <option value="Strategy">Strategy</option>
                                <option value="Operations">Operations</option>
                                <option value="Recruitment">Recruitment</option>
                                <option value="Economics">Economics</option>
                                <option value="Training">Training</option>
                            </select>
                        </div>
                        <a href="{{ route('admin.posts.create') }}" class="inline-flex items-center justify-center gap-2 px-4 py-2 bg-amber-400 text-slate-900 rounded-md text-sm font-medium hover:bg-amber-300 transition-colors">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                            </svg>
                            New Post
                        </a>
                    </div>

                    <!-- Stats -->
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <div class="bg-slate-900/50 border border-amber-400/20 backdrop-blur-sm rounded-lg shadow-sm">
                            <div class="p-6 pb-2">
                                <h3 class="text-sm font-medium text-slate-400">Total Posts</h3>
                            </div>
                            <div class="p-6 pt-0">
                                <div id="statTotal" class="text-2xl font-bold text-slate-100">6</div>
                                <p class="text-xs text-slate-400">All statuses</p>
                            </div>
                        </div>
                        <div class="bg-slate-900/50 border border-amber-400/20 backdrop-blur-sm rounded-lg shadow-sm">
                            <div class="p-6 pb-2">
                                <h3 class="text-sm font-medium text-slate-400">Published</h3>
                            </div>
                            <div class="p-6 pt-0">
                                <div id="statPublished" class="text-2xl font-bold text-slate-100">4</div>
                                <p class="text-xs text-emerald-500">Live</p>
                            </div>
                        </div>
                        <div class="bg-slate-900/50 border border-amber-400/20 backdrop-blur-sm rounded-lg shadow-sm">
                            <div class="p-6 pb-2">
                                <h3 class="text-sm font-medium text-slate-400">Drafts</h3>
                            </div>
                            <div class="p-6 pt-0">
                                <div id="statDrafts" class="text-2xl font-bold text-slate-100">2</div>
                                <p class="text-xs text-slate-400">In progress</p>
                            </div>
                        </div>
                        <div class="bg-slate-900/50 border border-amber-400/20 backdrop-blur-sm rounded-lg shadow-sm">
                            <div class="p-6 pb-2">
                                <h3 class="text-sm font-medium text-slate-400">Featured</h3>
                            </div>
                            <div class="p-6 pt-0">
                                <div id="statFeatured" class="text-2xl font-bold text-slate-100">1</div>
                                <p class="text-xs text-amber-400">Highlighted</p>
                            </div>
                        </div>
                    </div>

                    <!-- Posts Table -->
                    <div class="bg-slate-900/50 border border-amber-400/20 backdrop-blur-sm rounded-lg shadow-sm">
                        <div class="p-6">

                            <div class="relative w-full overflow-auto">

                                <table class="w-full caption-bottom text-sm">

                                    <thead class="[&_tr]:border-b">
                                        <tr class="border-b border-slate-700 transition-colors hover:bg-slate-800/50">
                                            <th class="h-12 px-4 text-left align-middle font-medium text-slate-400">
                                                Title
                                            </th>

                                            <th class="h-12 px-4 text-left align-middle font-medium text-slate-400 hidden md:table-cell">
                                                Author
                                            </th>

                                            <th class="h-12 px-4 text-left align-middle font-medium text-slate-400 hidden sm:table-cell">
                                                Categories
                                            </th>

                                            <th class="h-12 px-4 text-left align-middle font-medium text-slate-400">
                                                Status
                                            </th>

                                            <th class="h-12 px-4 text-left align-middle font-medium text-slate-400 hidden md:table-cell">
                                                Published
                                            </th>

                                            <th class="h-12 px-4 text-left align-middle font-medium text-slate-400 w-12">
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody class="[&_tr:last-child]:border-0">

                                        @forelse ($posts as $post)

                                            <tr class="border-b border-slate-700 transition-colors hover:bg-slate-800/50">

                                                <td class="p-4 align-middle">

                                                    <div class="flex items-start gap-3">

                                                        <div class="h-14 w-20 rounded-md overflow-hidden bg-slate-800 shrink-0">

                                                            @if ($post->getFirstMediaUrl('featured_images', 'preview'))

                                                                <img
                                                                    src="{{ $post->getFirstMediaUrl('featured_images', 'preview') }}"
                                                                    alt="{{ $post->title }}"
                                                                    class="w-full h-full object-cover"
                                                                >

                                                            @endif

                                                        </div>

                                                        <div>

                                                            <p class="font-medium text-slate-100">
                                                                {{ $post->title }}
                                                            </p>

                                                            @if ($post->featured ?? false)
                                                                <div class="mt-1">
                                                                    <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold border-amber-400/30 text-amber-400 bg-amber-400/10">
                                                                        Featured
                                                                    </span>
                                                                </div>
                                                            @endif

                                                        </div>

                                                    </div>

                                                </td>

                                                <td class="p-4 align-middle hidden md:table-cell text-slate-400">
                                                    {{ $post->user?->name }}
                                                </td>

                                                <td class="p-4 align-middle hidden sm:table-cell">

                                                    <div class="flex flex-wrap gap-1">

                                                        @foreach ($post->categories as $category)

                                                            <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold bg-slate-900 text-slate-200 border-slate-700">
                                                                {{ $category->name }}
                                                            </span>

                                                        @endforeach

                                                    </div>

                                                </td>

                                                <td class="p-4 align-middle">

                                                    @if ($post->status === 'published')

                                                        <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold bg-emerald-500/15 text-emerald-500 border-emerald-500/20">
                                                            Published
                                                        </span>

                                                    @elseif ($post->status === 'draft')

                                                        <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold bg-slate-800 text-slate-200 border-slate-700">
                                                            Draft
                                                        </span>

                                                    @elseif ($post->status === 'archived')

                                                        <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold bg-slate-900 text-slate-300 border-slate-700">
                                                            Archived
                                                        </span>

                                                    @endif

                                                </td>

                                                <td class="p-4 align-middle hidden md:table-cell text-slate-400">

                                                    @if ($post->published_at)
                                                        {{ $post->published_at->format('M j, Y') }}
                                                    @else
                                                        —
                                                    @endif

                                                </td>

                                                <td class="p-4 align-middle">

                                                    <div class="flex items-center justify-end gap-2">

                                                        <a
                                                            href="{{ route('blog.show', $post->slug) }}"
                                                            class="inline-flex items-center justify-center h-8 w-8 rounded-md hover:bg-slate-800/60 transition-colors"
                                                        >
                                                            <svg class="h-4 w-4 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                                            </svg>
                                                        </a>

                                                        <a
                                                            href="{{ route('admin.posts.edit', $post) }}"
                                                            class="inline-flex items-center justify-center h-8 w-8 rounded-md hover:bg-slate-800/60 transition-colors"
                                                        >
                                                            <svg class="h-4 w-4 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                                            </svg>
                                                        </a>

                                                    </div>

                                                </td>

                                            </tr>

                                        @empty

                                            <tr>

                                                <td colspan="6" class="py-12 text-center">

                                                    <div class="flex flex-col items-center justify-center">

                                                        <div class="mb-4 rounded-full bg-slate-800 p-4">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                                                            </svg>
                                                        </div>

                                                        <h3 class="text-lg font-semibold text-slate-100 mb-1">
                                                            No Posts Found
                                                        </h3>

                                                        <p class="text-sm text-slate-400">
                                                            There are currently no blog posts created.
                                                        </p>

                                                    </div>

                                                </td>

                                            </tr>

                                        @endforelse

                                    </tbody>

                                </table>

                            </div>

                        </div>
                    </div>
                </div>

