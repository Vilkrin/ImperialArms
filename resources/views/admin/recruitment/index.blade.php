<x-layouts.admin :title="__('Recruitment Management')">

                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <h3 class="text-lg font-semibold text-slate-100">Applications</h3>
                            <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold border-slate-700 bg-slate-800 text-slate-300">3</span>
                        </div>
                        <div class="relative">
                            <svg class="h-4 w-4 absolute left-3 top-3 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                            <input placeholder="Search applications..." class="flex h-10 w-64 rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm pl-9 placeholder:text-slate-400 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400" />
                        </div>
                    </div>

                    <div class="bg-slate-900/50 border border-amber-400/20 backdrop-blur-sm rounded-lg shadow-sm">
                        <div class="p-0">
                            <div class="divide-y divide-slate-700">
                                <!-- New Application -->
                                <div class="p-4 hover:bg-slate-800/50 transition-colors bg-amber-400/5 border-l-2 border-l-amber-400">
                                    <div class="flex items-center justify-between mb-2">
                                        <div class="flex items-center space-x-2">
                                            <span class="font-bold text-slate-100">Alex Martinez</span>
                                            <span class="inline-flex items-center rounded-md border px-2 py-0.5 text-xs font-semibold bg-amber-400 text-slate-900 border-amber-400">New</span>
                                        </div>
                                        <span class="text-xs text-slate-400">1 hour ago</span>
                                    </div>
                                    <div class="flex items-center gap-2 mb-2">
                                        <span class="text-sm text-slate-400">alex.martinez@example.com</span>
                                        <span class="text-sm text-slate-500">•</span>
                                        <span class="inline-flex items-center rounded-md border px-2 py-0.5 text-xs font-semibold border-slate-700 bg-slate-800 text-slate-300">Pilot</span>
                                    </div>
                                    <p class="text-sm font-medium text-slate-100 mb-1">3 years flying experience</p>
                                    <p class="text-sm text-slate-400 mb-3">I'm an experienced pilot looking to join Imperial Arms. I specialize in cargo transport and have my own Constellation...</p>
                                    <div class="flex items-center gap-2">
                                        <a href="{{ route('admin.recruitment.show') }}" class="inline-flex items-center justify-center gap-2 px-3 py-1.5 border border-slate-700 bg-slate-900/50 text-slate-300 rounded-md text-xs font-medium hover:bg-slate-800 transition-colors">
                                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                            </svg>
                                            View Details
                                        </a>
                                        <button class="inline-flex items-center justify-center gap-2 px-3 py-1.5 border border-slate-700 bg-slate-900/50 text-slate-300 rounded-md text-xs font-medium hover:bg-green-400/10 hover:text-green-400 hover:border-green-400/50 transition-colors">
                                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                            Approve
                                        </button>
                                        <button class="inline-flex items-center justify-center gap-2 px-3 py-1.5 border border-slate-700 bg-slate-900/50 text-slate-300 rounded-md text-xs font-medium hover:bg-orange-400/10 hover:text-orange-400 hover:border-orange-400/50 transition-colors">
                                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                            Reject
                                        </button>
                                        <button class="inline-flex items-center justify-center gap-2 px-3 py-1.5 border border-slate-700 bg-slate-900/50 text-slate-300 rounded-md text-xs font-medium hover:bg-red-400/10 hover:text-red-400 hover:border-red-400/50 transition-colors">
                                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                            </svg>
                                            Delete
                                        </button>
                                    </div>
                                </div>

                                <!-- Reviewing Application -->
                                <div class="p-4 hover:bg-slate-800/50 transition-colors">
                                    <div class="flex items-center justify-between mb-2">
                                        <div class="flex items-center space-x-2">
                                            <span class="font-medium text-slate-100">Emma Wilson</span>
                                            <span class="inline-flex items-center rounded-md border px-2 py-0.5 text-xs font-semibold border-slate-700 bg-slate-800 text-slate-300">Reviewing</span>
                                        </div>
                                        <span class="text-xs text-slate-400">5 hours ago</span>
                                    </div>
                                    <div class="flex items-center gap-2 mb-2">
                                        <span class="text-sm text-slate-400">emma.w@example.com</span>
                                        <span class="text-sm text-slate-500">•</span>
                                        <span class="inline-flex items-center rounded-md border px-2 py-0.5 text-xs font-semibold border-slate-700 bg-slate-800 text-slate-300">Engineer</span>
                                    </div>
                                    <p class="text-sm font-medium text-slate-100 mb-1">Expert in ship maintenance</p>
                                    <p class="text-sm text-slate-400 mb-3">Skilled engineer with experience maintaining large fleet operations...</p>
                                    <div class="flex items-center gap-2">
                                        <a href="view-recruitment-application.html" class="inline-flex items-center justify-center gap-2 px-3 py-1.5 border border-slate-700 bg-slate-900/50 text-slate-300 rounded-md text-xs font-medium hover:bg-slate-800 transition-colors">
                                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                            </svg>
                                            View Details
                                        </a>
                                        <button class="inline-flex items-center justify-center gap-2 px-3 py-1.5 border border-slate-700 bg-slate-900/50 text-slate-300 rounded-md text-xs font-medium hover:bg-green-400/10 hover:text-green-400 hover:border-green-400/50 transition-colors">
                                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                            Approve
                                        </button>
                                        <button class="inline-flex items-center justify-center gap-2 px-3 py-1.5 border border-slate-700 bg-slate-900/50 text-slate-300 rounded-md text-xs font-medium hover:bg-orange-400/10 hover:text-orange-400 hover:border-orange-400/50 transition-colors">
                                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                            Reject
                                        </button>
                                        <button class="inline-flex items-center justify-center gap-2 px-3 py-1.5 border border-slate-700 bg-slate-900/50 text-slate-300 rounded-md text-xs font-medium hover:bg-red-400/10 hover:text-red-400 hover:border-red-400/50 transition-colors">
                                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                            </svg>
                                            Delete
                                        </button>
                                    </div>
                                </div>

                                <!-- Approved Application -->
                                <div class="p-4 hover:bg-slate-800/50 transition-colors">
                                    <div class="flex items-center justify-between mb-2">
                                        <div class="flex items-center space-x-2">
                                            <span class="font-medium text-slate-100">David Chen</span>
                                            <span class="inline-flex items-center rounded-md border px-2 py-0.5 text-xs font-semibold bg-green-600 text-white border-green-600">Approved</span>
                                        </div>
                                        <span class="text-xs text-slate-400">1 day ago</span>
                                    </div>
                                    <div class="flex items-center gap-2 mb-2">
                                        <span class="text-sm text-slate-400">david.chen@example.com</span>
                                        <span class="text-sm text-slate-500">•</span>
                                        <span class="inline-flex items-center rounded-md border px-2 py-0.5 text-xs font-semibold border-slate-700 bg-slate-800 text-slate-300">Combat Specialist</span>
                                    </div>
                                    <p class="text-sm font-medium text-slate-100 mb-1">Military background</p>
                                    <p class="text-sm text-slate-400 mb-3">Former UEE Navy with extensive combat experience...</p>
                                    <div class="flex items-center gap-2">
                                        <a href="view-recruitment-application.html" class="inline-flex items-center justify-center gap-2 px-3 py-1.5 border border-slate-700 bg-slate-900/50 text-slate-300 rounded-md text-xs font-medium hover:bg-slate-800 transition-colors">
                                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                            </svg>
                                            View Details
                                        </a>
                                        <button class="inline-flex items-center justify-center gap-2 px-3 py-1.5 border border-slate-700 bg-slate-900/50 text-slate-300 rounded-md text-xs font-medium hover:bg-green-400/10 hover:text-green-400 hover:border-green-400/50 transition-colors">
                                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                            Approve
                                        </button>
                                        <button class="inline-flex items-center justify-center gap-2 px-3 py-1.5 border border-slate-700 bg-slate-900/50 text-slate-300 rounded-md text-xs font-medium hover:bg-orange-400/10 hover:text-orange-400 hover:border-orange-400/50 transition-colors">
                                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                            Reject
                                        </button>
                                        <button class="inline-flex items-center justify-center gap-2 px-3 py-1.5 border border-slate-700 bg-slate-900/50 text-slate-300 rounded-md text-xs font-medium hover:bg-red-400/10 hover:text-red-400 hover:border-red-400/50 transition-colors">
                                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                            </svg>
                                            Delete
                                        </button>
                                    </div>
                                </div>
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
    </script>

</x-layouts.admin>