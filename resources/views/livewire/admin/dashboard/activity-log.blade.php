                    <!-- Admin Monitoring / Activity Log Dashboard -->
                    <div class="space-y-6">

                        <!-- Header -->
                        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
                            <div>
                                <h1 class="text-2xl font-bold text-slate-100">Activity Monitoring</h1>
                                <p class="mt-1 text-sm text-slate-400">
                                    Track admin actions across the dashboard, including who changed what and when.
                                </p>
                            </div>

                            <button
                                type="button"
                                class="inline-flex items-center justify-center rounded-lg border border-slate-700 bg-slate-900 px-4 py-2 text-sm font-medium text-slate-200 hover:bg-slate-800 cursor-pointer"
                            >
                                Export Logs
                            </button>
                        </div>

                        <!-- Stats -->
                        <div class="grid gap-4 md:grid-cols-2 xl:grid-cols-4">
                            <div class="rounded-xl border border-slate-700 bg-slate-900/60 p-5">
                                <p class="text-sm text-slate-400">Actions Today</p>
                                <p class="mt-2 text-3xl font-bold text-slate-100">128</p>
                            </div>

                            <div class="rounded-xl border border-slate-700 bg-slate-900/60 p-5">
                                <p class="text-sm text-slate-400">Admin Users Active</p>
                                <p class="mt-2 text-3xl font-bold text-slate-100">6</p>
                            </div>

                            <div class="rounded-xl border border-slate-700 bg-slate-900/60 p-5">
                                <p class="text-sm text-slate-400">Settings Changes</p>
                                <p class="mt-2 text-3xl font-bold text-slate-100">14</p>
                            </div>

                            <div class="rounded-xl border border-slate-700 bg-slate-900/60 p-5">
                                <p class="text-sm text-slate-400">Security Events</p>
                                <p class="mt-2 text-3xl font-bold text-red-400">3</p>
                            </div>
                        </div>

                        <!-- Filters -->
                        <div class="rounded-xl border border-slate-700 bg-slate-900/60 p-5">
                            <div class="grid gap-4 md:grid-cols-4">
                                <div>
                                    <label class="mb-1 block text-sm font-medium text-slate-300">Search</label>
                                    <input
                                        type="text"
                                        placeholder="Search activity..."
                                        class="w-full rounded-lg border border-slate-700 bg-slate-950 px-3 py-2 text-sm text-slate-100 placeholder:text-slate-500 focus:border-amber-400 focus:outline-none"
                                    >
                                </div>

                                <div>
                                    <label class="mb-1 block text-sm font-medium text-slate-300">Action</label>
                                    <select class="w-full rounded-lg border border-slate-700 bg-slate-950 px-3 py-2 text-sm text-slate-100 focus:border-amber-400 focus:outline-none">
                                        <option>All actions</option>
                                        <option>Created</option>
                                        <option>Updated</option>
                                        <option>Deleted</option>
                                        <option>Login</option>
                                        <option>Permission Change</option>
                                    </select>
                                </div>

                                <div>
                                    <label class="mb-1 block text-sm font-medium text-slate-300">Area</label>
                                    <select class="w-full rounded-lg border border-slate-700 bg-slate-950 px-3 py-2 text-sm text-slate-100 focus:border-amber-400 focus:outline-none">
                                        <option>All areas</option>
                                        <option>Users</option>
                                        <option>Roles</option>
                                        <option>Settings</option>
                                        <option>Pages</option>
                                        <option>Blog</option>
                                        <option>Gallery</option>
                                    </select>
                                </div>

                                <div>
                                    <label class="mb-1 block text-sm font-medium text-slate-300">Date</label>
                                    <input
                                        type="date"
                                        class="w-full rounded-lg border border-slate-700 bg-slate-950 px-3 py-2 text-sm text-slate-100 focus:border-amber-400 focus:outline-none"
                                    >
                                </div>
                            </div>
                        </div>

                        <!-- Activity Table -->
                        <div class="overflow-hidden rounded-xl border border-slate-700 bg-slate-900/60">
                            <div class="border-b border-slate-700 px-5 py-4">
                                <h2 class="text-lg font-semibold text-slate-100">Recent Admin Activity</h2>
                                <p class="text-sm text-slate-400">Latest changes made inside the admin panel.</p>
                            </div>

                            <div class="overflow-x-auto">
                                <table class="w-full text-left text-sm">
                                    <thead class="border-b border-slate-700 bg-slate-950/60 text-xs uppercase text-slate-400">
                                        <tr>
                                            <th class="px-5 py-3">Date / Time</th>
                                            <th class="px-5 py-3">Admin User</th>
                                            <th class="px-5 py-3">Action</th>
                                            <th class="px-5 py-3">Area</th>
                                            <th class="px-5 py-3">Changed Item</th>
                                            <th class="px-5 py-3">IP Address</th>
                                            <th class="px-5 py-3 text-right">View</th>
                                        </tr>
                                    </thead>

                                    <tbody class="divide-y divide-slate-800 text-slate-300">
                                    @forelse ($activities as $activity)
                                        <tr class="hover:bg-slate-800/40">
                                            <td class="px-5 py-4 text-slate-400">
                                                {{ $activity->created_at->format('d M Y, H:i') }}
                                            </td>

                                            <td class="px-5 py-4">
                                                <div class="font-medium text-slate-100">
                                                    {{ $activity->causer?->name ?? 'System' }}
                                                </div>
                                                <div class="text-xs text-slate-500">
                                                    {{ $activity->causer?->roles->pluck('name')->join(', ') ?? 'Automated' }}
                                                </div>
                                            </td>

                                            <td class="px-5 py-4">
                                                <x-admin.activity-badge :action="$activity->event ?? 'updated'" />
                                            </td>

                                            <td class="px-5 py-4">
                                                {{ $activity->properties['area'] ?? 'Users' }}
                                            </td>

                                            <td class="px-5 py-4">
                                                {{ $activity->description }}
                                                @if ($activity->subject)
                                                    : {{ $activity->subject->name ?? 'User #' . $activity->subject_id }}
                                                @endif
                                            </td>

                                            <td class="px-5 py-4 text-slate-400">
                                                {{ $activity->properties['ip'] ?? '—' }}
                                            </td>

                                            <td class="px-5 py-4 text-right">
                                                <flux:modal.trigger name="activity-details-{{ $activity->id }}">
                                                    <flux:button variant="ghost" size="sm">
                                                        Details
                                                    </flux:button>
                                                </flux:modal.trigger>

                                                <flux:modal name="activity-details-{{ $activity->id }}" class="md:w-2xl">
                                                    <div class="space-y-6">
                                                        <div>
                                                            <flux:heading size="lg">
                                                                Activity Details
                                                            </flux:heading>

                                                            <flux:text class="mt-2">
                                                                Full information for this logged activity.
                                                            </flux:text>
                                                        </div>

                                                        <div class="grid grid-cols-2 gap-4">
                                                            <div>
                                                                <p class="text-sm font-medium text-slate-400">Admin User</p>
                                                                <p class="text-slate-100">
                                                                    {{ $activity->causer?->name ?? 'System' }}
                                                                </p>
                                                            </div>

                                                            <div>
                                                                <p class="text-sm font-medium text-slate-400">Action</p>
                                                                <div class="mt-1">
                                                                    <x-admin.activity-badge :action="$activity->event ?? 'updated'" />
                                                                </div>
                                                            </div>

                                                            <div>
                                                                <p class="text-sm font-medium text-slate-400">Area</p>
                                                                <p class="text-slate-100">
                                                                    {{ $activity->properties['area'] ?? 'Unknown' }}
                                                                </p>
                                                            </div>

                                                            <div>
                                                                <p class="text-sm font-medium text-slate-400">IP Address</p>
                                                                <p class="text-slate-100">
                                                                    {{ $activity->properties['ip'] ?? 'Unknown' }}
                                                                </p>
                                                            </div>
                                                        </div>

                                                        @if ($activity->properties->has('old') || $activity->properties->has('new'))
                                                            <div class="space-y-4">
                                                                <div>
                                                                    <h4 class="text-sm font-semibold text-slate-300 mb-2">
                                                                        Previous Values
                                                                    </h4>

                                                                    <pre class="rounded-lg bg-slate-950 border border-slate-800 p-4 text-xs text-slate-300 overflow-auto">{{ json_encode($activity->properties['old'] ?? [], JSON_PRETTY_PRINT) }}</pre>
                                                                </div>

                                                                <div>
                                                                    <h4 class="text-sm font-semibold text-slate-300 mb-2">
                                                                        New Values
                                                                    </h4>

                                                                    <pre class="rounded-lg bg-slate-950 border border-slate-800 p-4 text-xs text-slate-300 overflow-auto">{{ json_encode($activity->properties['new'] ?? [], JSON_PRETTY_PRINT) }}</pre>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </flux:modal>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="7" class="px-5 py-10 text-center">
                                                <div class="flex flex-col items-center justify-center space-y-2">
                                                    <div class="text-lg font-medium text-slate-300">
                                                        No activity found
                                                    </div>

                                                    <p class="text-sm text-slate-500">
                                                        Admin activity logs will appear here once actions are performed.
                                                    </p>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforelse

                                    </tbody>
                                </table>
                            </div>

                            <!-- Footer / Pagination Mockup -->
                            <div class="border-t border-slate-700 px-5 py-4">
                                {{ $activities->links() }}
                            </div>
                        </div>
                    </div>