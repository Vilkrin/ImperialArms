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
                                    @foreach ($activities as $activity)
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
                                                <span class="rounded-full border border-blue-400/30 bg-blue-400/10 px-2 py-1 text-xs font-medium text-blue-300">
                                                    {{ ucfirst($activity->event ?? 'updated') }}
                                                </span>
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
                                        </tr>
                                    @endforeach

                                        <tr class="hover:bg-slate-800/40">
                                            <td class="px-5 py-4 text-slate-400">10 May 2026, 13:58</td>
                                            <td class="px-5 py-4">
                                                <div class="font-medium text-slate-100">Sarah</div>
                                                <div class="text-xs text-slate-500">Editor</div>
                                            </td>
                                            <td class="px-5 py-4">
                                                <span class="rounded-full border border-green-400/30 bg-green-400/10 px-2 py-1 text-xs font-medium text-green-300">
                                                    Created
                                                </span>
                                            </td>
                                            <td class="px-5 py-4">Blog</td>
                                            <td class="px-5 py-4">Created post: Welcome Update</td>
                                            <td class="px-5 py-4 text-slate-400">192.168.1.44</td>
                                            <td class="px-5 py-4 text-right">
                                                <button class="text-sm font-medium text-amber-400 hover:text-amber-300">
                                                    Details
                                                </button>
                                            </td>
                                        </tr>

                                        <tr class="hover:bg-slate-800/40">
                                            <td class="px-5 py-4 text-slate-400">10 May 2026, 12:21</td>
                                            <td class="px-5 py-4">
                                                <div class="font-medium text-slate-100">James</div>
                                                <div class="text-xs text-slate-500">Admin</div>
                                            </td>
                                            <td class="px-5 py-4">
                                                <span class="rounded-full border border-red-400/30 bg-red-400/10 px-2 py-1 text-xs font-medium text-red-300">
                                                    Deleted
                                                </span>
                                            </td>
                                            <td class="px-5 py-4">Gallery</td>
                                            <td class="px-5 py-4">Removed image from homepage album</td>
                                            <td class="px-5 py-4 text-slate-400">192.168.1.62</td>
                                            <td class="px-5 py-4 text-right">
                                                <button class="text-sm font-medium text-amber-400 hover:text-amber-300">
                                                    Details
                                                </button>
                                            </td>
                                        </tr>

                                        <tr class="hover:bg-slate-800/40">
                                            <td class="px-5 py-4 text-slate-400">10 May 2026, 11:45</td>
                                            <td class="px-5 py-4">
                                                <div class="font-medium text-slate-100">System</div>
                                                <div class="text-xs text-slate-500">Automated</div>
                                            </td>
                                            <td class="px-5 py-4">
                                                <span class="rounded-full border border-purple-400/30 bg-purple-400/10 px-2 py-1 text-xs font-medium text-purple-300">
                                                    Login
                                                </span>
                                            </td>
                                            <td class="px-5 py-4">Authentication</td>
                                            <td class="px-5 py-4">Admin user logged in</td>
                                            <td class="px-5 py-4 text-slate-400">192.168.1.25</td>
                                            <td class="px-5 py-4 text-right">
                                                <button class="text-sm font-medium text-amber-400 hover:text-amber-300">
                                                    Details
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Footer / Pagination Mockup -->
                            <div class="border-t border-slate-700 px-5 py-4">
                                {{ $activities->links() }}
                            </div>
                        </div>
                    </div>