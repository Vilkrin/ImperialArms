            <!-- Header -->
            <header class="h-16 border-b border-slate-700 bg-slate-900/50 backdrop-blur-sm flex items-center justify-between px-6 relative z-50">
                <div class="flex items-center gap-4">
                    <button id="sidebar-toggle" class="p-2 hover:bg-amber-400/10 rounded-lg transition-colors">
                        <svg class="h-5 w-5 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                    <div>
                        <h1 class="font-semibold text-lg text-slate-100">Dashboard</h1>
                        <p class="text-sm text-slate-400">Welcome back to the admin panel</p>
                    </div>
                </div>
                
                <div class="flex items-center gap-4">
                    <!-- Notifications Dropdown -->
                    <div class="relative notification-dropdown">
                        <button id="notification-btn" class="p-2 hover:bg-amber-400/10 rounded-lg relative transition-colors">
                            <svg class="h-5 w-5 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                            </svg>
                            <span class="absolute -top-1 -right-1 h-3 w-3 bg-amber-400 rounded-full"></span>
                        </button>
                        <!-- Notification Dropdown Menu -->
                        <div id="notification-menu" class="hidden absolute right-0 mt-2 w-80 bg-slate-900 border border-slate-700 rounded-lg shadow-xl z-[100]">
                            <div class="p-3 border-b border-slate-700">
                                <h3 class="font-semibold text-slate-100">Notifications</h3>
                            </div>
                            <div class="max-h-96 overflow-y-auto">
                                <div class="p-3 hover:bg-slate-800/50 transition-colors cursor-pointer border-b border-slate-700/50">
                                    <div class="flex items-start gap-3">
                                        <div class="h-2 w-2 bg-amber-400 rounded-full mt-2 flex-shrink-0"></div>
                                        <div>
                                            <p class="text-sm font-medium text-slate-100">New fleet member joined</p>
                                            <p class="text-xs text-slate-400">John Smith joined Imperial Arms</p>
                                            <p class="text-xs text-slate-500 mt-1">2 minutes ago</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-3 hover:bg-slate-800/50 transition-colors cursor-pointer border-b border-slate-700/50">
                                    <div class="flex items-start gap-3">
                                        <div class="h-2 w-2 bg-slate-500 rounded-full mt-2 flex-shrink-0"></div>
                                        <div>
                                            <p class="text-sm font-medium text-slate-100">Mission report submitted</p>
                                            <p class="text-xs text-slate-400">Stanton patrol mission completed</p>
                                            <p class="text-xs text-slate-500 mt-1">1 hour ago</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-3 hover:bg-slate-800/50 transition-colors cursor-pointer">
                                    <div class="flex items-start gap-3">
                                        <div class="h-2 w-2 bg-slate-500 rounded-full mt-2 flex-shrink-0"></div>
                                        <div>
                                            <p class="text-sm font-medium text-slate-100">Content published</p>
                                            <p class="text-xs text-slate-400">Fleet expansion update is now live</p>
                                            <p class="text-xs text-slate-500 mt-1">3 hours ago</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-2 border-t border-slate-700">
                                <button class="w-full text-center text-sm text-amber-400 hover:text-amber-300 py-2">View all notifications</button>
                            </div>
                        </div>
                    </div>

                    <!-- User Menu Dropdown -->
                    <div class="relative user-dropdown">
                        <button id="user-menu-btn" class="flex items-center gap-2 hover:bg-amber-400/10 rounded-lg p-2 transition-colors">
                            <div class="h-8 w-8 bg-amber-400/20 rounded-full flex items-center justify-center">
                                <svg class="h-4 w-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                            <div class="text-sm text-left">
                                <p class="font-medium text-slate-100">Admin</p>
                                <p class="text-slate-400 text-xs">System</p>
                            </div>
                        </button>
                        <!-- User Dropdown Menu -->
                        <div id="user-menu" class="hidden absolute right-0 mt-2 w-56 bg-slate-900 border border-slate-700 rounded-lg shadow-xl z-[100]">
                            <div class="p-2 border-b border-slate-700">
                                <p class="px-3 py-2 text-sm font-semibold text-slate-100">Admin Account</p>
                            </div>
                            <div class="p-2">
                                <a href="pages/view-user.html" class="flex items-center gap-2 px-3 py-2 text-sm text-slate-300 hover:bg-amber-400/10 hover:text-amber-400 rounded transition-colors">
                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                    </svg>
                                    Profile
                                </a>
                            </div>
                            <div class="p-2 border-t border-slate-700">
                                <button class="flex items-center gap-2 w-full px-3 py-2 text-sm text-red-400 hover:bg-red-400/10 rounded transition-colors">
                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                                    </svg>
                                    Sign Out
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </header>