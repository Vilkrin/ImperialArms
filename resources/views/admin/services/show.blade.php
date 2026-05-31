<x-layouts.admin :title="__('Services Management')">

                <div class="max-w-4xl">
                    <a href="{{ route('admin.services.index') }}" class="inline-flex items-center gap-2 px-3 py-2 text-sm text-slate-300 hover:text-amber-400 hover:bg-slate-800/50 rounded-lg transition-colors mb-4">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                        Back to Services
                    </a>

                    <div class="bg-slate-900/50 border border-slate-700 rounded-lg backdrop-blur-sm shadow-sm">
                        <div class="p-6 border-b border-slate-700">
                            <div class="flex items-start justify-between">
                                <div class="space-y-2">
                                    <div class="flex items-center gap-2">
                                        <h2 class="text-xl font-semibold text-slate-100">Service Inquiry #1</h2>
                                        <span class="inline-flex items-center rounded-md border px-2 py-0.5 text-xs font-semibold bg-amber-400 text-slate-900 border-amber-400">New</span>
                                    </div>
                                    <span class="inline-flex items-center rounded-md border px-2 py-0.5 text-xs font-semibold border-slate-700 bg-slate-800 text-slate-300 w-fit">Freight Transport</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <button class="inline-flex items-center justify-center gap-2 px-3 py-1.5 border border-slate-700 bg-slate-900/50 text-slate-300 rounded-md text-xs font-medium hover:bg-slate-800 transition-colors">
                                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                        </svg>
                                        Reply
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

                        <div class="p-6 space-y-6">
                            <div>
                                <h3 class="text-sm font-medium text-slate-400 mb-2">From</h3>
                                <div class="space-y-1">
                                    <p class="font-medium text-slate-100">John Smith</p>
                                    <p class="text-sm text-slate-400">john.smith@example.com</p>
                                </div>
                            </div>

                            <div class="h-px bg-slate-700"></div>

                            <div>
                                <h3 class="text-sm font-medium text-slate-400 mb-2">Date</h3>
                                <p class="text-sm text-slate-100">March 15, 2024 at 2:30 PM</p>
                            </div>

                            <div class="h-px bg-slate-700"></div>

                            <div>
                                <h3 class="text-sm font-medium text-slate-400 mb-2">Message</h3>
                                <p class="text-sm leading-relaxed text-slate-300">I need help transporting cargo from Port Olisar to ArcCorp. I have approximately 500 SCU of medical supplies that need to be delivered within the next 48 hours. This is time-sensitive cargo and I'm willing to pay premium rates for reliable transport. Please let me know your availability and pricing.</p>
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