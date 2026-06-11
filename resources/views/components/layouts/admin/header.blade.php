            <!-- Header -->
            <header class="h-16 border-b border-slate-700 bg-slate-900/50 backdrop-blur-sm flex items-center justify-between px-6 relative z-50">
                <div class="flex items-center gap-4">
                    <div>
                        <h1 class="font-semibold text-lg text-slate-100">Dashboard</h1>
                        <p class="text-sm text-slate-400">Welcome back to the admin panel</p>
                    </div>
                </div>
                
                <div class="flex items-center gap-4">
                    <!-- Notifications Dropdown -->
                    <flux:dropdown position="bottom" align="end">
                        <flux:button
                            variant="ghost"
                            class="relative cursor-pointer rounded-lg p-2 text-slate-300 hover:bg-amber-400/10 hover:text-amber-400"
                        >
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                            </svg>

                            <span class="absolute right-1.5 top-1.5 h-2 w-2 rounded-full bg-amber-400 ring-2 ring-slate-950"></span>
                        </flux:button>

                        <flux:menu class="w-80 overflow-hidden rounded-lg border border-slate-700 bg-slate-900 p-0 shadow-xl">
                            <div class="border-b border-slate-700 px-4 py-3">
                                <h3 class="text-sm font-semibold text-slate-100">Notifications</h3>
                            </div>

                            <flux:separator />

                            <div class="max-h-80 overflow-y-auto">
                                <button type="button" class="w-full cursor-pointer border-b border-slate-700/50 px-4 py-3 text-left transition-colors hover:bg-slate-800/60">
                                    <div class="flex items-start gap-3">
                                        <span class="mt-2 h-2 w-2 flex-shrink-0 rounded-full bg-amber-400"></span>

                                        <span>
                                            <span class="block text-sm font-medium text-slate-100">New fleet member joined</span>
                                            <span class="block text-xs text-slate-400">John Smith joined Imperial Arms</span>
                                            <span class="mt-1 block text-xs text-slate-500">2 minutes ago</span>
                                        </span>
                                    </div>
                                </button>

                                <button type="button" class="w-full cursor-pointer border-b border-slate-700/50 px-4 py-3 text-left transition-colors hover:bg-slate-800/60">
                                    <div class="flex items-start gap-3">
                                        <span class="mt-2 h-2 w-2 flex-shrink-0 rounded-full bg-slate-500"></span>

                                        <span>
                                            <span class="block text-sm font-medium text-slate-100">Mission report submitted</span>
                                            <span class="block text-xs text-slate-400">Stanton patrol mission completed</span>
                                            <span class="mt-1 block text-xs text-slate-500">1 hour ago</span>
                                        </span>
                                    </div>
                                </button>

                                <button type="button" class="w-full cursor-pointer px-4 py-3 text-left transition-colors hover:bg-slate-800/60">
                                    <div class="flex items-start gap-3">
                                        <span class="mt-2 h-2 w-2 flex-shrink-0 rounded-full bg-slate-500"></span>

                                        <span>
                                            <span class="block text-sm font-medium text-slate-100">Content published</span>
                                            <span class="block text-xs text-slate-400">Fleet expansion update is now live</span>
                                            <span class="mt-1 block text-xs text-slate-500">3 hours ago</span>
                                        </span>
                                    </div>
                                </button>
                            </div>

                            <flux:separator />

                            <div class="border-t border-slate-700 p-2">
                                <button
                                    type="button"
                                    class="w-full cursor-pointer rounded-md py-2 text-center text-sm font-medium text-amber-400 transition-colors hover:bg-amber-400/10 hover:text-amber-300"
                                >
                                    View all notifications
                                </button>
                            </div>
                        </flux:menu>
                    </flux:dropdown>

                    <!-- User Menu Dropdown -->
                    <div>
                        <flux:dropdown position="bottom" align="end">
                            <flux:button variant="ghost" class="flex items-center gap-2 rounded-lg p-2 hover:bg-amber-400/10 cursor-pointer">
                                <div class="h-8 w-8 rounded-full overflow-hidden bg-amber-400/20 border border-amber-400/30 flex items-center justify-center">
                                    @if(auth()->user()?->getFirstMediaUrl('avatars'))
                                        <img
                                            src="{{ auth()->user()->getFirstMediaUrl('avatars') }}"
                                            alt="{{ auth()->user()->name }}"
                                            class="h-full w-full object-cover"
                                        >
                                    @else
                                        <span class="text-xs font-semibold text-amber-400">
                                            {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                                        </span>
                                    @endif
                                </div>

                                <div class="text-sm text-left cursor-pointer">
                                    <p class="font-medium text-slate-100">{{ auth()->user()->name ?? 'Admin' }}</p>
                                    <p class="text-slate-400 text-xs">System</p>
                                </div>
                            </flux:button>

                            <flux:menu class="w-56 bg-slate-900 border border-slate-700">
                                <div class="px-3 py-2 border-b border-slate-700">
                                    <p class="text-sm font-semibold text-slate-100">Admin Account</p>
                                </div>

                                <flux:menu.item
                                    :href="route('profile.index')"
                                    icon="user"
                                    class="text-slate-300 hover:bg-amber-400/10 hover:text-amber-400"
                                >
                                    Profile
                                </flux:menu.item>

                                <div class="border-t border-slate-700 my-1"></div>

                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <flux:menu.item
                                        as="button"
                                        type="submit"
                                        icon="arrow-right-start-on-rectangle"
                                        class="w-full text-red-400 hover:bg-red-400/10 cursor-pointer"
                                    >
                                        Sign Out
                                    </flux:menu.item>
                                </form>
                            </flux:menu>
                        </flux:dropdown>
                    </div>
                </div>
            </header>