<x-layouts.admin :title="__('Roles Management')">

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Header -->
            <header class="h-16 border-b border-slate-700 bg-slate-900/50 backdrop-blur-sm flex items-center justify-between px-6 relative z-50">
                <div class="flex items-center gap-4">
                    <button id="sidebar-toggle" class="p-2 hover:bg-amber-400/10 rounded-lg transition-colors">
                        <svg class="h-5 w-5 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                    <div>
                        <h1 class="font-semibold text-lg text-slate-100">Roles & Permissions</h1>
                        <p class="text-sm text-slate-400">Manage user roles and system permissions</p>
                    </div>
                </div>
                
                <div class="flex items-center gap-4">
                    <div class="relative">
                        <button id="notificationBtn" class="p-2 hover:bg-amber-400/10 rounded-lg relative transition-colors">
                            <svg class="h-5 w-5 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                            </svg>
                            <span class="absolute -top-1 -right-1 h-3 w-3 bg-amber-400 rounded-full"></span>
                        </button>
                        <div id="notificationMenu" class="hidden absolute right-0 mt-2 w-80 bg-slate-900 border border-slate-700 rounded-lg shadow-xl z-[100]">
                            <div class="p-3 border-b border-slate-700">
                                <h3 class="font-semibold text-slate-100">Notifications</h3>
                            </div>
                            <div class="p-3">
                                <p class="text-sm text-slate-400">No new notifications</p>
                            </div>
                        </div>
                    </div>

                    <div class="relative">
                        <button id="userMenuBtn" class="flex items-center gap-2 hover:bg-amber-400/10 rounded-lg p-2 transition-colors">
                            <div class="h-8 w-8 bg-amber-400/20 rounded-full flex items-center justify-center">
                                <svg class="h-4 w-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.618 5.984A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                </svg>
                            </div>
                            <div class="text-sm">
                                <p class="font-medium text-slate-100">Admin</p>
                                <p class="text-slate-400 text-xs">System</p>
                            </div>
                        </button>
                        <div id="userMenu" class="hidden absolute right-0 mt-2 w-56 bg-slate-900 border border-slate-700 rounded-lg shadow-xl z-[100]">
                            <div class="px-3 py-2 border-b border-slate-700">
                                <p class="text-sm font-semibold text-slate-100">Admin System</p>
                            </div>
                            <div class="p-2">
                                <a href="view-user.html" class="flex items-center gap-2 px-3 py-2 text-sm text-slate-300 hover:bg-amber-400/10 hover:text-amber-400 rounded transition-colors">
                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                                    Profile
                                </a>
                            </div>
                            <div class="p-2 border-t border-slate-700">
                                <button class="flex items-center gap-2 w-full px-3 py-2 text-sm text-red-400 hover:bg-red-400/10 rounded transition-colors">
                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                                    Sign Out
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <main class="flex-1 p-6 overflow-auto">
                <div class="space-y-6">
                    <!-- Tab Navigation -->
                    <div class="flex space-x-1 bg-slate-800/50 p-1 rounded-lg w-fit">
                        <button id="rolesTab" class="flex items-center gap-2 px-4 py-2 rounded bg-amber-400 text-slate-900 text-sm font-medium transition-colors">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/>
                            </svg>
                            Roles
                        </button>
                        <button id="permissionsTab" class="flex items-center gap-2 px-4 py-2 rounded text-slate-300 hover:bg-slate-700/50 text-sm font-medium transition-colors">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                    </svg>
                            Permissions
                        </button>
                                </div>

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

                    <!-- Permissions Content -->
                    <div id="permissionsContent" class="hidden bg-slate-900/50 border border-slate-700 rounded-lg backdrop-blur-sm shadow-sm">
                        <div class="p-6 border-b border-slate-700">
                            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                                <h2 class="text-2xl font-semibold leading-none tracking-tight flex items-center gap-2 text-slate-100">
                                    <svg class="h-5 w-5 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                    </svg>
                                    Permissions Management
                                </h2>
                                <div class="flex items-center gap-2">
                                    <div class="relative">
                                        <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 h-4 w-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                        </svg>
                                        <input id="permSearch" placeholder="Search permissions..." class="flex h-10 w-64 rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm pl-10 placeholder:text-slate-400 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400" />
                                    </div>
                                    <button onclick="toggleAddPermissionForm()" class="inline-flex items-center justify-center gap-2 px-4 py-2 bg-amber-400 text-slate-900 rounded-md text-sm font-medium hover:bg-amber-300 transition-colors">
                                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                    </svg>
                                        Add New Permission
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="p-6">
                            <!-- Add/Edit Permission Form -->
                            <div id="permissionForm" class="hidden mb-6 p-4 border border-slate-700 rounded-lg bg-slate-800/20 space-y-4">
                                <div class="flex items-center justify-between">
                                    <h3 class="font-semibold text-slate-100 flex items-center gap-2">
                                        <span id="permFormTitle">Add New Permission</span>
                                    </h3>
                                    <button onclick="cancelPermissionForm()" class="p-1 hover:bg-slate-700 rounded transition-colors">
                                        <svg class="h-5 w-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"/>
                                    </svg>
                                    </button>
                                </div>
                                <div class="space-y-4">
                                    <div>
                                        <label class="text-sm font-medium text-slate-200">Permission Name</label>
                                        <input id="permName" placeholder="Enter permission name (e.g., users.create, content.read)" class="mt-1 flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm placeholder:text-slate-400 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400" />
                                </div>
                                    <div>
                                        <label class="text-sm font-medium text-slate-200">Assign to Roles</label>
                                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-3 mt-2 p-3 border border-slate-700 rounded-md bg-slate-900/50">
                                            <label class="flex items-center space-x-2 cursor-pointer">
                                                <input type="checkbox" class="h-4 w-4 rounded border-slate-700 text-amber-400 focus:ring-amber-400">
                                                <span class="text-sm text-slate-300">Super Admin</span>
                                            </label>
                                            <label class="flex items-center space-x-2 cursor-pointer">
                                                <input type="checkbox" class="h-4 w-4 rounded border-slate-700 text-amber-400 focus:ring-amber-400">
                                                <span class="text-sm text-slate-300">Administrator</span>
                                            </label>
                                            <label class="flex items-center space-x-2 cursor-pointer">
                                                <input type="checkbox" class="h-4 w-4 rounded border-slate-700 text-amber-400 focus:ring-amber-400">
                                                <span class="text-sm text-slate-300">Editor</span>
                                            </label>
                                            <label class="flex items-center space-x-2 cursor-pointer">
                                                <input type="checkbox" class="h-4 w-4 rounded border-slate-700 text-amber-400 focus:ring-amber-400">
                                                <span class="text-sm text-slate-300">Viewer</span>
                                            </label>
                                </div>
                                </div>
                                    <div class="flex gap-2">
                                        <button onclick="savePermission()" class="inline-flex items-center justify-center px-4 py-2 bg-amber-400 text-slate-900 rounded-md text-sm font-medium hover:bg-amber-300 transition-colors">
                                            <span id="permSaveBtn">Create Permission</span>
                                        </button>
                                        <button onclick="cancelPermissionForm()" class="inline-flex items-center justify-center px-4 py-2 border border-slate-700 bg-slate-900/50 text-slate-300 rounded-md text-sm font-medium hover:bg-slate-800 transition-colors">
                                            Cancel
                                        </button>
                            </div>
                        </div>
                    </div>

                            <!-- Permissions Table -->
                            <div class="overflow-x-auto">
                                <table class="w-full">
                                    <thead>
                                        <tr class="border-b border-slate-700">
                                            <th class="h-12 px-4 text-left align-middle font-medium text-slate-400">Permission Name</th>
                                            <th class="h-12 px-4 text-left align-middle font-medium text-slate-400">Roles Assigned</th>
                                            <th class="h-12 px-4 text-right align-middle font-medium text-slate-400">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border-b border-slate-700 transition-colors hover:bg-slate-800/50">
                                            <td class="p-4 align-middle">
                                                <div>
                                                    <div class="font-medium text-slate-100">Create Users</div>
                                                    <div class="text-sm text-slate-400 font-mono">users.create</div>
                                                </div>
                                            </td>
                                            <td class="p-4 align-middle">
                                                <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold border-slate-700 bg-slate-800 text-slate-300">2 roles</span>
                                            </td>
                                            <td class="p-4 align-middle text-right">
                                                <div class="flex items-center justify-end gap-2">
                                                    <button onclick="editPermission(1, 'Create Users', 'users.create')" class="inline-flex items-center justify-center h-9 w-9 hover:bg-amber-400/10 hover:text-amber-400 rounded transition-colors">
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
                                        <tr class="transition-colors hover:bg-slate-800/50">
                                            <td class="p-4 align-middle">
                                                <div>
                                                    <div class="font-medium text-slate-100">View Users</div>
                                                    <div class="text-sm text-slate-400 font-mono">users.read</div>
                                                </div>
                                            </td>
                                            <td class="p-4 align-middle">
                                                <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold border-slate-700 bg-slate-800 text-slate-300">4 roles</span>
                                            </td>
                                            <td class="p-4 align-middle text-right">
                                                <div class="flex items-center justify-end gap-2">
                                                    <button onclick="editPermission(2, 'View Users', 'users.read')" class="inline-flex items-center justify-center h-9 w-9 hover:bg-amber-400/10 hover:text-amber-400 rounded transition-colors">
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
                </div>
            </main>
        </div>
    </div>

    <script>
        // Tab switching
        const rolesTab = document.getElementById('rolesTab');
        const permissionsTab = document.getElementById('permissionsTab');
        const rolesContent = document.getElementById('rolesContent');
        const permissionsContent = document.getElementById('permissionsContent');

        rolesTab.addEventListener('click', () => {
            rolesTab.classList.remove('text-slate-300', 'hover:bg-slate-700/50');
            rolesTab.classList.add('bg-amber-400', 'text-slate-900');
            permissionsTab.classList.remove('bg-amber-400', 'text-slate-900');
            permissionsTab.classList.add('text-slate-300', 'hover:bg-slate-700/50');
            rolesContent.classList.remove('hidden');
            permissionsContent.classList.add('hidden');
        });

        permissionsTab.addEventListener('click', () => {
            permissionsTab.classList.remove('text-slate-300', 'hover:bg-slate-700/50');
            permissionsTab.classList.add('bg-amber-400', 'text-slate-900');
            rolesTab.classList.remove('bg-amber-400', 'text-slate-900');
            rolesTab.classList.add('text-slate-300', 'hover:bg-slate-700/50');
            permissionsContent.classList.remove('hidden');
            rolesContent.classList.add('hidden');
        });

        // Role Form Functions
        function toggleAddRoleForm() {
            const form = document.getElementById('roleForm');
            document.getElementById('roleFormTitle').textContent = 'Add New Role';
            document.getElementById('roleSaveBtn').textContent = 'Create Role';
            document.getElementById('roleName').value = '';
            form.classList.toggle('hidden');
        }

        function editRole(id, displayName, name) {
            const form = document.getElementById('roleForm');
            document.getElementById('roleFormTitle').textContent = 'Edit Role';
            document.getElementById('roleSaveBtn').textContent = 'Update Role';
            document.getElementById('roleName').value = name;
            form.classList.remove('hidden');
        }

        function saveRole() {
            console.log('Saving role...');
            cancelRoleForm();
        }

        function cancelRoleForm() {
            document.getElementById('roleForm').classList.add('hidden');
            document.getElementById('roleName').value = '';
        }

        // Permission Form Functions
        function toggleAddPermissionForm() {
            const form = document.getElementById('permissionForm');
            document.getElementById('permFormTitle').textContent = 'Add New Permission';
            document.getElementById('permSaveBtn').textContent = 'Create Permission';
            document.getElementById('permName').value = '';
            form.classList.toggle('hidden');
        }

        function editPermission(id, displayName, name) {
            const form = document.getElementById('permissionForm');
            document.getElementById('permFormTitle').textContent = 'Edit Permission';
            document.getElementById('permSaveBtn').textContent = 'Update Permission';
            document.getElementById('permName').value = name;
            form.classList.remove('hidden');
        }

        function savePermission() {
            console.log('Saving permission...');
            cancelPermissionForm();
        }

        function cancelPermissionForm() {
            document.getElementById('permissionForm').classList.add('hidden');
            document.getElementById('permName').value = '';
        }

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