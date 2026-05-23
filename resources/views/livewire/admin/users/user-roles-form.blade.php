<div>
                        <div class="bg-slate-900/50 border border-amber-400/20 backdrop-blur-sm rounded-lg shadow-sm">
                            <div class="p-6 border-b border-slate-700">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-2xl font-semibold leading-none tracking-tight flex items-center gap-2 text-slate-100">
                                        <svg class="h-5 w-5 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                        </svg>
                                        Roles
                                    </h3>

                                    <span class="inline-flex items-center gap-1 rounded-full border px-2.5 py-0.5 text-xs font-semibold border-slate-700 bg-slate-800 text-slate-300">
                                        <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/>
                                        </svg>
                                        <span>{{ count(array_filter($roleStates ?? [])) }}</span> assigned
                                    </span>
                                </div>
                            </div>

                            <div class="p-6">
                                <div class="space-y-3">
                                    @foreach ($roles->where('name', '!=', 'Super Admin') as $role)
                                    <div class="flex items-center justify-between p-3 border border-slate-700 rounded-lg hover:bg-slate-800/50 transition-colors">
                                        
                                        <div class="flex-1">
                                            <div class="flex items-center gap-2 mb-1">
                                                <span class="font-medium text-slate-100">
                                                    {{ Str::of($role->name)->replace('-', ' ')->title() }}
                                                </span>
                                                <span class="inline-flex items-center rounded-full border px-2 py-0.5 text-xs font-mono border-slate-700 bg-slate-800 text-slate-300">
                                                    {{ Str::slug($role->name) }}
                                                </span>
                                            </div>

                                            <p class="text-sm text-slate-400">
                                                {{ $role->description ?? 'Role access permissions' }}
                                            </p>
                                        </div>

                                        <flux:switch wire:model.live="roleStates.{{ $role->id }}" />

                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
</div>
