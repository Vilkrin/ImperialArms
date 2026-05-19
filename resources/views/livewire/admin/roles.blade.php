                    <!-- Roles Content -->
                    <div id="rolesContent" class="bg-slate-900/50 border border-slate-700 rounded-lg backdrop-blur-sm shadow-sm">
                        <div class="p-6 border-b border-slate-700">
                            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                                <h2 class="text-2xl font-semibold leading-none tracking-tight flex items-center gap-2 text-slate-100">
                                    <svg class="h-5 w-5 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/>
                                    </svg>
                                    Roles Management
                                </h2>
                                <div class="flex items-center gap-2">
                                    <div class="relative">
                                        <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 h-4 w-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                    </svg>
                                        <input id="roleSearch" placeholder="Search roles..." class="flex h-10 w-64 rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm pl-10 placeholder:text-slate-400 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400" />
                                </div>
                                    <button onclick="toggleAddRoleForm()" class="inline-flex items-center justify-center gap-2 px-4 py-2 bg-amber-400 text-slate-900 rounded-md text-sm font-medium hover:bg-amber-300 transition-colors">
                                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                    </svg>
                                        Add New Role
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="p-6">
                            <!-- Add/Edit Role Form -->
                            <div id="roleForm" class="hidden mb-6 p-4 border border-slate-700 rounded-lg bg-slate-800/20 space-y-4">
                                <div class="flex items-center justify-between">
                                    <h3 class="font-semibold text-slate-100 flex items-center gap-2">
                                        <span id="roleFormTitle">Add New Role</span>
                                    </h3>
                                    <button onclick="cancelRoleForm()" class="p-1 hover:bg-slate-700 rounded transition-colors">
                                        <svg class="h-5 w-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"/>
                                    </svg>
                                    </button>
                                </div>
                                <div class="space-y-4">
                                    <div>
                                        <label class="text-sm font-medium text-slate-200">Role Name</label>
                                        <input id="roleName" placeholder="Enter role name (e.g., editor, manager)" class="mt-1 flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm placeholder:text-slate-400 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400" />
                                    </div>
                                    <div>
                                        <label class="text-sm font-medium text-slate-200">Permissions</label>
                                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3 mt-2 p-3 border border-slate-700 rounded-md bg-slate-900/50">
                                            <label class="flex items-center space-x-2 cursor-pointer">
                                                <input type="checkbox" class="h-4 w-4 rounded border-slate-700 text-amber-400 focus:ring-amber-400">
                                                <span class="text-sm text-slate-300">Create Users</span>
                                            </label>
                                            <label class="flex items-center space-x-2 cursor-pointer">
                                                <input type="checkbox" class="h-4 w-4 rounded border-slate-700 text-amber-400 focus:ring-amber-400">
                                                <span class="text-sm text-slate-300">View Users</span>
                                            </label>
                                            <label class="flex items-center space-x-2 cursor-pointer">
                                                <input type="checkbox" class="h-4 w-4 rounded border-slate-700 text-amber-400 focus:ring-amber-400">
                                                <span class="text-sm text-slate-300">Update Users</span>
                                            </label>
                                            <label class="flex items-center space-x-2 cursor-pointer">
                                                <input type="checkbox" class="h-4 w-4 rounded border-slate-700 text-amber-400 focus:ring-amber-400">
                                                <span class="text-sm text-slate-300">Delete Users</span>
                                            </label>
                                            <label class="flex items-center space-x-2 cursor-pointer">
                                                <input type="checkbox" class="h-4 w-4 rounded border-slate-700 text-amber-400 focus:ring-amber-400">
                                                <span class="text-sm text-slate-300">Create Content</span>
                                            </label>
                                            <label class="flex items-center space-x-2 cursor-pointer">
                                                <input type="checkbox" class="h-4 w-4 rounded border-slate-700 text-amber-400 focus:ring-amber-400">
                                                <span class="text-sm text-slate-300">View Content</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="flex gap-2">
                                        <button onclick="saveRole()" class="inline-flex items-center justify-center px-4 py-2 bg-amber-400 text-slate-900 rounded-md text-sm font-medium hover:bg-amber-300 transition-colors">
                                            <span id="roleSaveBtn">Create Role</span>
                                        </button>
                                        <button onclick="cancelRoleForm()" class="inline-flex items-center justify-center px-4 py-2 border border-slate-700 bg-slate-900/50 text-slate-300 rounded-md text-sm font-medium hover:bg-slate-800 transition-colors">
                                            Cancel
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Roles Table -->
                            <div class="overflow-x-auto">
                                <table class="w-full">
                                    <thead>
                                        <tr class="border-b border-slate-700">
                                            <th class="h-12 px-4 text-left align-middle font-medium text-slate-400">Role Name</th>
                                            <th class="h-12 px-4 text-left align-middle font-medium text-slate-400">Users Assigned</th>
                                            <th class="h-12 px-4 text-right align-middle font-medium text-slate-400">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border-b border-slate-700 transition-colors hover:bg-slate-800/50">
                                            <td class="p-4 align-middle">
                                                <div>
                                                    <div class="font-medium text-slate-100">Super Admin</div>
                                                    <div class="text-sm text-slate-400">super-admin</div>
                                                </div>
                                            </td>
                                            <td class="p-4 align-middle">
                                                <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold border-slate-700 bg-slate-800 text-slate-300">2 users</span>
                                            </td>
                                            <td class="p-4 align-middle text-right">
                                                <div class="flex items-center justify-end gap-2">
                                                    <button onclick="editRole(1, 'Super Admin', 'super-admin')" class="inline-flex items-center justify-center h-9 w-9 hover:bg-amber-400/10 hover:text-amber-400 rounded transition-colors">
                                                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                                        </svg>
                                                    </button>
                                                    <button class="inline-flex items-center justify-center h-9 w-9 hover:bg-red-400/10 hover:text-red-400 rounded transition-colors">
                                                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="border-b border-slate-700 transition-colors hover:bg-slate-800/50">
                                            <td class="p-4 align-middle">
                                                <div>
                                                    <div class="font-medium text-slate-100">Administrator</div>
                                                    <div class="text-sm text-slate-400">admin</div>
                                                </div>
                                            </td>
                                            <td class="p-4 align-middle">
                                                <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold border-slate-700 bg-slate-800 text-slate-300">5 users</span>
                                            </td>
                                            <td class="p-4 align-middle text-right">
                                                <div class="flex items-center justify-end gap-2">
                                                    <button onclick="editRole(2, 'Administrator', 'admin')" class="inline-flex items-center justify-center h-9 w-9 hover:bg-amber-400/10 hover:text-amber-400 rounded transition-colors">
                                                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                                        </svg>
                                                    </button>
                                                    <button class="inline-flex items-center justify-center h-9 w-9 hover:bg-red-400/10 hover:text-red-400 rounded transition-colors">
                                                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>