                <div wire:poll.30s>
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
                                @forelse($notifications as $notification)
                                    <flux:modal.trigger name="notification-{{ $notification->id }}">
                                        <flux:menu.item class="cursor-pointer">
                                            <div class="flex items-start gap-3">
                                                <span class="mt-2 h-2 w-2 flex-shrink-0 rounded-full bg-amber-400"></span>

                                                <div>
                                                    <p class="text-sm font-medium text-slate-100">
                                                        {{ $notification->data['title'] ?? 'Notification' }}
                                                    </p>

                                                    <p class="text-xs text-slate-400">
                                                        {{ $notification->data['message'] ?? '' }}
                                                    </p>

                                                    <p class="mt-1 text-xs text-slate-500">
                                                        {{ $notification->created_at->diffForHumans() }}
                                                    </p>
                                                </div>
                                            </div>
                                        </flux:menu.item>
                                    </flux:modal.trigger>

                                    <flux:modal name="notification-{{ $notification->id }}" class="md:w-[32rem]">
                                        <div class="space-y-4">
                                            <div>
                                                <h2 class="text-lg font-semibold text-slate-100">
                                                    {{ $notification->data['title'] ?? 'Notification' }}
                                                </h2>

                                                <p class="mt-1 text-sm text-slate-400">
                                                    {{ $notification->created_at->diffForHumans() }}
                                                </p>
                                            </div>

                                            <div class="rounded-lg border border-slate-700 bg-slate-950/70 p-4">
                                                <p class="text-sm text-slate-300 whitespace-pre-line">
                                                    {{ $notification->data['commit_message'] ?? $notification->data['message'] ?? '' }}
                                                </p>
                                            </div>

                                            @if(! empty($notification->data['branch']))
                                                <p class="text-sm text-slate-400">
                                                    Branch:
                                                    <span class="text-slate-200">{{ $notification->data['branch'] }}</span>
                                                </p>
                                            @endif

                                            @if(! empty($notification->data['author']))
                                                <p class="text-sm text-slate-400">
                                                    Author:
                                                    <span class="text-slate-200">{{ $notification->data['author'] }}</span>
                                                </p>
                                            @endif

                                            @if(! empty($notification->data['commit_url']))
                                                <a
                                                    href="{{ $notification->data['commit_url'] }}"
                                                    target="_blank"
                                                    rel="noopener noreferrer"
                                                    class="inline-flex text-sm font-medium text-amber-400 hover:text-amber-300"
                                                >
                                                    View commit on GitHub
                                                </a>
                                            @endif
                                        </div>
                                    </flux:modal>
                                @empty
                                    <div class="px-4 py-6 text-center text-sm text-slate-400">
                                        No notifications
                                    </div>
                                @endforelse
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
                </div>

