<div wire:poll.30s>
    <flux:dropdown position="bottom" align="end">
        <flux:button
            variant="ghost"
            class="relative cursor-pointer rounded-lg p-2 text-slate-300 hover:bg-amber-400/10 hover:text-amber-400"
        >
            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
            </svg>

            @if($unreadCount > 0)
                <span class="absolute right-1.5 top-1.5 h-2 w-2 rounded-full bg-amber-400 ring-2 ring-slate-950"></span>
            @endif
        </flux:button>

        <flux:menu class="w-80 overflow-hidden rounded-lg border border-slate-700 bg-slate-900 p-0 shadow-xl">
            <div class="flex items-center justify-between border-b border-slate-700 px-4 py-3">
                <h3 class="text-sm font-semibold text-slate-100">Notifications</h3>

                @if($unreadCount > 0)
                    <button
                        type="button"
                        wire:click="markAllAsRead"
                        class="cursor-pointer text-xs text-amber-400 hover:text-amber-300"
                    >
                        Mark all read
                    </button>
                @endif

                @if($notifications->count() > 0)
                    <button
                        type="button"
                        wire:click="clearAllNotifications"
                        wire:confirm="Clear all notifications?"
                        class="cursor-pointer text-xs text-red-400 hover:text-red-300"
                    >
                        Clear all
                    </button>
                @endif
            </div>

            <div class="max-h-80 overflow-y-auto">
                @forelse($notifications as $notification)
                    <flux:menu.item
                        as="button"
                        type="button"
                        wire:click="openNotification('{{ $notification->id }}')"
                        class="w-full cursor-pointer border-b border-slate-700/50 px-4 py-3 text-left hover:bg-slate-800/60"
                    >
                        <div class="flex items-start gap-3">
                            <span class="mt-2 h-2 w-2 flex-shrink-0 rounded-full {{ is_null($notification->read_at) ? 'bg-amber-400' : 'bg-slate-500' }}"></span>

                            <div>
                                <p class="text-sm font-medium text-slate-100">
                                    {{ $notification->data['title'] ?? 'Notification' }}
                                </p>

                                <p class="text-xs text-slate-400">
                                    {{ Str::limit($notification->data['message'] ?? '', 80) }}
                                </p>

                                <p class="mt-1 text-xs text-slate-500">
                                    {{ $notification->created_at->diffForHumans() }}
                                </p>

                                <button
                                    type="button"
                                    wire:click="clearNotification('{{ $notification->id }}')"
                                    wire:confirm="Clear this notification?"
                                    class="mt-2 cursor-pointer text-xs text-red-400 hover:text-red-300"
                                >
                                    Clear
                                </button>
                            </div>
                        </div>
                    </flux:menu.item>
                @empty
                    <div class="px-4 py-6 text-center text-sm text-slate-400">
                        No notifications
                    </div>
                @endforelse
            </div>
        </flux:menu>
    </flux:dropdown>

    <flux:modal name="notification-details" class="md:w-[32rem]">
        <div class="space-y-4">
            <div>
                <h2 class="text-lg font-semibold text-slate-100">
                    {{ $selectedNotification['title'] ?? 'Notification' }}
                </h2>

                <p class="mt-1 text-sm text-slate-400">
                    {{ $selectedNotification['created_at'] ?? '' }}
                </p>
            </div>

            <div class="rounded-lg border border-slate-700 bg-slate-950/70 p-4">
                <p class="whitespace-pre-line text-sm text-slate-300">
                    {{ $selectedNotification['commit_message'] ?? $selectedNotification['message'] ?? '' }}
                </p>
            </div>

            @if(! empty($selectedNotification['branch']))
                <p class="text-sm text-slate-400">
                    Branch:
                    <span class="text-slate-200">{{ $selectedNotification['branch'] }}</span>
                </p>
            @endif

            @if(! empty($selectedNotification['author']))
                <p class="text-sm text-slate-400">
                    Author:
                    <span class="text-slate-200">{{ $selectedNotification['author'] }}</span>
                </p>
            @endif

            @if(! empty($selectedNotification['commit_url']))
                <a
                    href="{{ $selectedNotification['commit_url'] }}"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="inline-flex text-sm font-medium text-amber-400 hover:text-amber-300"
                >
                    View commit on GitHub
                </a>
            @endif
        </div>
    </flux:modal>
</div>