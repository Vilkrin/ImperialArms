<x-layouts.admin :title="__('Dashboard')">

                <!-- Main Content -->
            <main class="flex-1 p-6 overflow-auto relative z-0">
                <div class="space-y-8">
                    <!-- Analytics & Stats Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div class="bg-slate-900/50 border border-slate-700 rounded-lg backdrop-blur-sm shadow-sm">
                            <div class="flex flex-col space-y-1.5 p-6 pb-2">
                                <div class="flex flex-row items-center justify-between space-y-0">
                                    <h3 class="text-sm font-medium text-slate-400">Total Visitors</h3>
                                    <svg class="h-4 w-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="p-6 pt-0">
                                <div class="text-2xl font-bold text-slate-100">12,345</div>
                                <div class="flex items-center text-xs">
                                    <svg class="h-3 w-3 text-green-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17l10-10M17 7v10"/>
                                    </svg>
                                    <span class="text-green-500">+12.5%</span>
                                    <span class="text-slate-400 ml-1">from last month</span>
                                </div>
                            </div>
                        </div>

                        <div class="bg-slate-900/50 border border-slate-700 rounded-lg backdrop-blur-sm shadow-sm">
                            <div class="flex flex-col space-y-1.5 p-6 pb-2">
                                <div class="flex flex-row items-center justify-between space-y-0">
                                    <h3 class="text-sm font-medium text-slate-400">Page Views</h3>
                                    <svg class="h-4 w-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="p-6 pt-0">
                                <div class="text-2xl font-bold text-slate-100">45,678</div>
                                <div class="flex items-center text-xs">
                                    <svg class="h-3 w-3 text-green-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17l10-10M17 7v10"/>
                                    </svg>
                                    <span class="text-green-500">+8.2%</span>
                                    <span class="text-slate-400 ml-1">from last month</span>
                                </div>
                            </div>
                        </div>

                        <div class="bg-slate-900/50 border border-slate-700 rounded-lg backdrop-blur-sm shadow-sm">
                            <div class="flex flex-col space-y-1.5 p-6 pb-2">
                                <div class="flex flex-row items-center justify-between space-y-0">
                                    <h3 class="text-sm font-medium text-slate-400">Avg. Session</h3>
                                    <svg class="h-4 w-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="p-6 pt-0">
                                <div class="text-2xl font-bold text-slate-100">3m 42s</div>
                                <div class="flex items-center text-xs">
                                    <svg class="h-3 w-3 text-red-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17l-10-10M7 7v10"/>
                                    </svg>
                                    <span class="text-red-500">-2.1%</span>
                                    <span class="text-slate-400 ml-1">from last month</span>
                                </div>
                            </div>
                        </div>

                        <div class="bg-slate-900/50 border border-slate-700 rounded-lg backdrop-blur-sm shadow-sm">
                            <div class="flex flex-col space-y-1.5 p-6 pb-2">
                                <div class="flex flex-row items-center justify-between space-y-0">
                                    <h3 class="text-sm font-medium text-slate-400">Bounce Rate</h3>
                                    <svg class="h-4 w-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="p-6 pt-0">
                                <div class="text-2xl font-bold text-slate-100">24.8%</div>
                                <div class="flex items-center text-xs">
                                    <svg class="h-3 w-3 text-green-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17l10-10M17 7v10"/>
                                    </svg>
                                    <span class="text-green-500">-5.3%</span>
                                    <span class="text-slate-400 ml-1">from last month</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Overview & Recent Activity -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-6">
                        <!-- Content Status Card -->
                        <div class="bg-slate-900/50 border border-slate-700 rounded-lg backdrop-blur-sm shadow-sm">
                            <div class="flex flex-col space-y-1.5 p-6 pb-3">
                                <h3 class="text-sm font-medium flex items-center gap-2 text-slate-100">
                                    <svg class="h-4 w-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                    </svg>
                                    Content Status
                                </h3>
                            </div>
                            <div class="p-6 pt-0 space-y-3">
                                <div class="flex justify-between">
                                    <span class="text-sm text-slate-400">Published</span>
                                    <span class="text-sm font-medium text-slate-100">89</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-sm text-slate-400">Drafts</span>
                                    <span class="text-sm font-medium text-slate-100">23</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-sm text-slate-400">Scheduled</span>
                                    <span class="text-sm font-medium text-slate-100">15</span>
                                </div>
                            </div>
                        </div>

                        <!-- User Activity Card -->
                        <div class="bg-slate-900/50 border border-slate-700 rounded-lg backdrop-blur-sm shadow-sm">
                            <div class="flex flex-col space-y-1.5 p-6 pb-3">
                                <h3 class="text-sm font-medium flex items-center gap-2 text-slate-100">
                                    <svg class="h-4 w-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/>
                                    </svg>
                                    User Activity
                                </h3>
                            </div>
                            <div class="p-6 pt-0 space-y-3">
                                <div class="flex justify-between">
                                    <span class="text-sm text-slate-400">Online Now</span>
                                    <span class="text-sm font-medium text-slate-100">34</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-sm text-slate-400">Today</span>
                                    <span class="text-sm font-medium text-slate-100">156</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-sm text-slate-400">This Week</span>
                                    <span class="text-sm font-medium text-slate-100">892</span>
                                </div>
                            </div>
                        </div>

                        <!-- Upcoming Events Card -->
                        <div class="bg-slate-900/50 border border-slate-700 rounded-lg backdrop-blur-sm shadow-sm">
                            <div class="flex flex-col space-y-1.5 p-6 pb-3">
                                <h3 class="text-sm font-medium text-slate-100">Upcoming Events</h3>
                            </div>
                            <div class="p-6 pt-0 space-y-3">
                                <div class="flex justify-between">
                                    <span class="text-sm text-slate-400">Fleet Operations</span>
                                    <span class="text-sm font-medium text-slate-100">Today 20:00</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-sm text-slate-400">Training Session</span>
                                    <span class="text-sm font-medium text-slate-100">Tomorrow</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-sm text-slate-400">Weekly Brief</span>
                                    <span class="text-sm font-medium text-slate-100">Friday</span>
                                </div>
                            </div>
                        </div>

                        <!-- Recent Activity Card -->
                        <div class="bg-slate-900/50 border border-slate-700 rounded-lg backdrop-blur-sm shadow-sm">
                            <div class="flex flex-col space-y-1.5 p-6">
                                <h3 class="text-2xl font-semibold leading-none tracking-tight text-slate-100">Recent Activity</h3>
                            </div>
                            <div class="p-6 pt-0">
                                <div class="space-y-4">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center space-x-3">
                                            <span class="inline-flex items-center rounded-full border border-slate-700 bg-slate-800/50 px-2.5 py-0.5 text-xs font-semibold text-slate-300 transition-colors hover:bg-slate-800">/fleet</span>
                                            <span class="text-sm text-slate-400">1234 views</span>
                                        </div>
                                        <span class="text-xs text-slate-500">2 hours ago</span>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center space-x-3">
                                            <span class="inline-flex items-center rounded-full border border-slate-700 bg-slate-800/50 px-2.5 py-0.5 text-xs font-semibold text-slate-300 transition-colors hover:bg-slate-800">/recruitment</span>
                                            <span class="text-sm text-slate-400">987 views</span>
                                        </div>
                                        <span class="text-xs text-slate-500">4 hours ago</span>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center space-x-3">
                                            <span class="inline-flex items-center rounded-full border border-slate-700 bg-slate-800/50 px-2.5 py-0.5 text-xs font-semibold text-slate-300 transition-colors hover:bg-slate-800">/about</span>
                                            <span class="text-sm text-slate-400">654 views</span>
                                        </div>
                                        <span class="text-xs text-slate-500">6 hours ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

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
                                        <tr class="hover:bg-slate-800/40">
                                            <td class="px-5 py-4 text-slate-400">10 May 2026, 14:32</td>
                                            <td class="px-5 py-4">
                                                <div class="font-medium text-slate-100">Andrew</div>
                                                <div class="text-xs text-slate-500">Super Admin</div>
                                            </td>
                                            <td class="px-5 py-4">
                                                <span class="rounded-full border border-blue-400/30 bg-blue-400/10 px-2 py-1 text-xs font-medium text-blue-300">
                                                    Updated
                                                </span>
                                            </td>
                                            <td class="px-5 py-4">Settings</td>
                                            <td class="px-5 py-4">Site title changed</td>
                                            <td class="px-5 py-4 text-slate-400">192.168.1.25</td>
                                            <td class="px-5 py-4 text-right">
                                                <button class="text-sm font-medium text-amber-400 hover:text-amber-300">
                                                    Details
                                                </button>
                                            </td>
                                        </tr>

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
                            <div class="flex items-center justify-between border-t border-slate-700 px-5 py-4">
                                <p class="text-sm text-slate-400">Showing 1 to 4 of 128 logs</p>

                                <div class="flex gap-2">
                                    <button class="rounded-lg border border-slate-700 px-3 py-1.5 text-sm text-slate-300 hover:bg-slate-800">
                                        Previous
                                    </button>
                                    <button class="rounded-lg border border-slate-700 px-3 py-1.5 text-sm text-slate-300 hover:bg-slate-800">
                                        Next
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </main>
        

</x-layouts.admin>