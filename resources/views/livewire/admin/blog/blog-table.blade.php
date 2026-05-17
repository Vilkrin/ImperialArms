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
                        <a href="add-post.html" class="inline-flex items-center justify-center gap-2 px-4 py-2 bg-amber-400 text-slate-900 rounded-md text-sm font-medium hover:bg-amber-300 transition-colors">
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
                                            <th class="h-12 px-4 text-left align-middle font-medium text-slate-400">Title</th>
                                            <th class="h-12 px-4 text-left align-middle font-medium text-slate-400 hidden md:table-cell">Author</th>
                                            <th class="h-12 px-4 text-left align-middle font-medium text-slate-400 hidden sm:table-cell">Category</th>
                                            <th class="h-12 px-4 text-left align-middle font-medium text-slate-400">Status</th>
                                            <th class="h-12 px-4 text-left align-middle font-medium text-slate-400 hidden md:table-cell">Date</th>
                                            <th class="h-12 px-4 text-left align-middle font-medium text-slate-400 w-12"></th>
                                        </tr>
                                    </thead>
                                    <tbody id="postsTbody" class="[&_tr:last-child]:border-0">
                                        <!-- Rows injected by JS -->
                                    </tbody>
                                </table>
                            </div>
                            <div id="postsEmpty" class="hidden text-center py-10 text-slate-400">
                                No posts found matching your criteria.
                            </div>
                        </div>
                    </div>
                </div>

                    <script>
        // Dropdown functionality
        const notificationBtn = document.getElementById('notificationBtn');
        const notificationMenu = document.getElementById('notificationMenu');
        const userMenuBtn = document.getElementById('userMenuBtn');
        const userMenu = document.getElementById('userMenu');

        notificationBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            notificationMenu.classList.toggle('hidden');
            userMenu.classList.add('hidden');
        });

        userMenuBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            userMenu.classList.toggle('hidden');
            notificationMenu.classList.add('hidden');
        });

        document.addEventListener('click', () => {
            notificationMenu.classList.add('hidden');
            userMenu.classList.add('hidden');
        });

        // Sidebar toggle functionality
        const sidebarToggle = document.getElementById('sidebar-toggle');
        const sidebar = document.querySelector('aside');
        
        if (sidebarToggle && sidebar) {
            sidebarToggle.addEventListener('click', () => {
                if (sidebar.classList.contains('w-64')) {
                    sidebar.classList.remove('w-64');
                    sidebar.classList.add('w-14');
                    sidebar.querySelectorAll('h2, h3, p, span').forEach(el => {
                        if (!el.closest('svg')) {
                            el.style.display = 'none';
                        }
                    });
                } else {
                    sidebar.classList.remove('w-14');
                    sidebar.classList.add('w-64');
                    sidebar.querySelectorAll('h2, h3, p, span').forEach(el => {
                        el.style.display = '';
                    });
                }
            });
        }

        // Posts table (static demo data, matches src/pages/Posts.tsx)
        const postsData = [
            { id: 1, title: "The Future of Deep Space Exploration", author: "Captain Sarah Chen", category: "Technology", status: "published", date: "2024-03-15", featured: true },
            { id: 2, title: "Fleet Tactics: Coordinated Strike Operations", author: "Commander Jake Morrison", category: "Strategy", status: "published", date: "2024-03-12", featured: false },
            { id: 3, title: "Behind the Scenes: Ship Maintenance", author: "Chief Engineer Marcus Liu", category: "Operations", status: "published", date: "2024-03-10", featured: false },
            { id: 4, title: "Recruitment: Finding the Right Crew", author: "Lt. Commander Emma Watson", category: "Recruitment", status: "draft", date: "2024-03-08", featured: false },
            { id: 5, title: "Trade Routes and Economic Strategy", author: "Director James Park", category: "Economics", status: "published", date: "2024-03-05", featured: false },
            { id: 6, title: "Combat Training: Preparing for the Unknown", author: "Master Sergeant Ana Rodriguez", category: "Training", status: "draft", date: "2024-03-01", featured: false },
        ];

        const postsSearch = document.getElementById('postsSearch');
        const statusFilter = document.getElementById('statusFilter');
        const categoryFilter = document.getElementById('categoryFilter');
        const postsTbody = document.getElementById('postsTbody');
        const postsEmpty = document.getElementById('postsEmpty');

        const statTotal = document.getElementById('statTotal');
        const statPublished = document.getElementById('statPublished');
        const statDrafts = document.getElementById('statDrafts');
        const statFeatured = document.getElementById('statFeatured');

        const escapeHtml = (s) => (s || "").replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;").replace(/"/g, "&quot;").replace(/'/g, "&#039;");

        const statusBadge = (status) => {
            if (status === 'published') return '<span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold bg-emerald-500/15 text-emerald-500 border-emerald-500/20">Published</span>';
            if (status === 'draft') return '<span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold bg-slate-800 text-slate-200 border-slate-700">Draft</span>';
            if (status === 'archived') return '<span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold bg-slate-900 text-slate-300 border-slate-700">Archived</span>';
            return `<span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold bg-slate-900 text-slate-300 border-slate-700">${escapeHtml(status)}</span>`;
        };

        const render = () => {
            const q = (postsSearch?.value || "").toLowerCase().trim();
            const st = statusFilter?.value || "all";
            const cat = categoryFilter?.value || "All";

            const filtered = postsData.filter((p) => {
                const matchesSearch = !q || p.title.toLowerCase().includes(q) || p.author.toLowerCase().includes(q);
                const matchesStatus = st === "all" || p.status === st;
                const matchesCategory = cat === "All" || p.category === cat;
                return matchesSearch && matchesStatus && matchesCategory;
            });

            // Stats (overall, like React)
            if (statTotal) statTotal.textContent = String(postsData.length);
            if (statPublished) statPublished.textContent = String(postsData.filter(p => p.status === "published").length);
            if (statDrafts) statDrafts.textContent = String(postsData.filter(p => p.status === "draft").length);
            if (statFeatured) statFeatured.textContent = String(postsData.filter(p => p.featured).length);

            if (!postsTbody) return;
            postsTbody.innerHTML = '';

            if (filtered.length === 0) {
                postsEmpty?.classList.remove('hidden');
                return;
            }
            postsEmpty?.classList.add('hidden');

            filtered.forEach((post) => {
                const featured = post.featured
                    ? '<div class="mt-1"><span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold border-amber-400/30 text-amber-400 bg-amber-400/10">Featured</span></div>'
                    : '';

                const row = document.createElement('tr');
                row.className = 'border-b border-slate-700 transition-colors hover:bg-slate-800/50';
                row.innerHTML = `
                    <td class="p-4 align-middle">
                        <div>
                            <p class="font-medium text-slate-100">${escapeHtml(post.title)}</p>
                            ${featured}
                        </div>
                    </td>
                    <td class="p-4 align-middle hidden md:table-cell text-slate-400">${escapeHtml(post.author)}</td>
                    <td class="p-4 align-middle hidden sm:table-cell">
                        <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold bg-slate-900 text-slate-200 border-slate-700">${escapeHtml(post.category)}</span>
                    </td>
                    <td class="p-4 align-middle">${statusBadge(post.status)}</td>
                    <td class="p-4 align-middle hidden md:table-cell text-slate-400">${escapeHtml(new Date(post.date).toLocaleDateString('en-US', { month: 'short', day: 'numeric', year: 'numeric' }))}</td>
                    <td class="p-4 align-middle">
                        <div class="relative">
                            <button class="postActionsBtn inline-flex items-center justify-center h-8 w-8 rounded-md hover:bg-slate-800/60 transition-colors" aria-label="Open actions" data-post-id="${post.id}">
                                <svg class="h-4 w-4 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v.01M12 12v.01M12 18v.01"/>
                                </svg>
                            </button>
                            <div class="postActionsMenu hidden absolute right-0 mt-2 w-44 bg-slate-900 border border-slate-700 rounded-lg shadow-xl z-[100]">
                                <a href="../../blog-post.html" class="flex items-center gap-2 px-3 py-2 text-sm text-slate-300 hover:bg-amber-400/10 hover:text-amber-400 transition-colors">
                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                    View
                                </a>
                                <a href="edit-post.html" class="flex items-center gap-2 px-3 py-2 text-sm text-slate-300 hover:bg-amber-400/10 hover:text-amber-400 transition-colors">
                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                                    Edit
                                </a>
                                <button class="w-full flex items-center gap-2 px-3 py-2 text-sm text-red-400 hover:bg-red-400/10 transition-colors">
                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6M9 7h6m2 0H7m2 0V5a2 2 0 012-2h2a2 2 0 012 2v2"/></svg>
                                    Delete
                                </button>
                            </div>
                        </div>
                    </td>
                `;
                postsTbody.appendChild(row);
            });

            // Hook action menus
            document.querySelectorAll('.postActionsBtn').forEach((btn) => {
                btn.addEventListener('click', (e) => {
                    e.stopPropagation();
                    const menu = btn.parentElement?.querySelector('.postActionsMenu');
                    document.querySelectorAll('.postActionsMenu').forEach(m => { if (m !== menu) m.classList.add('hidden'); });
                    menu?.classList.toggle('hidden');
                });
            });
        };

        const closePostMenus = () => document.querySelectorAll('.postActionsMenu').forEach(m => m.classList.add('hidden'));
        document.addEventListener('click', closePostMenus);
        postsSearch?.addEventListener('input', render);
        statusFilter?.addEventListener('change', render);
        categoryFilter?.addEventListener('change', render);
        render();
    </script>