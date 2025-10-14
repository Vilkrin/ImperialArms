<x-layouts.admin :title="__('Edit User')">

                      <a href="users.html" class="inline-flex items-center gap-2 px-3 py-2 text-sm text-slate-300 hover:bg-slate-800/50 rounded transition-colors">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                        Back to Users
                    </a>
                    <div class="h-6 w-px bg-slate-700"></div>
                    <div>
                        <h1 class="font-semibold text-lg text-slate-100">Edit User</h1>
                        <p class="text-sm text-slate-400">Modify user information and permissions</p>
                    </div>

                    <div class="space-y-6">
                    <!-- Basic Information -->
                    <div class="bg-slate-900/50 border border-amber-400/20 backdrop-blur-sm rounded-lg shadow-sm">
                        <div class="p-6 border-b border-slate-700">
                            <h3 class="text-2xl font-semibold leading-none tracking-tight text-slate-100">Basic Information</h3>
                        </div>
                        <div class="p-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="space-y-2">
                                    <label for="name" class="text-sm font-medium text-slate-200">Full Name</label>
                                    <input id="name" value="Alex Chen" class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400" />
                                </div>
                                
                                <div class="space-y-2">
                                    <label for="email" class="text-sm font-medium text-slate-200">Email</label>
                                    <input id="email" type="email" value="alex.chen@imperialarms.com" class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400" />
                                </div>
                                
                                <div class="space-y-2">
                                    <label for="phone" class="text-sm font-medium text-slate-200">Phone</label>
                                    <input id="phone" value="+1 (555) 123-4567" class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400" />
                                </div>
                                
                                <div class="space-y-2">
                                    <label for="status" class="text-sm font-medium text-slate-200">Status</label>
                                    <select id="status" class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400">
                                        <option value="Active" selected>Active</option>
                                        <option value="Inactive">Inactive</option>
                                    </select>
                                </div>
                                
                                <div class="space-y-2">
                                    <label for="department" class="text-sm font-medium text-slate-200">Department</label>
                                    <input id="department" value="Engineering" class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400" />
                                </div>
                                
                                <div class="space-y-2">
                                    <label for="location" class="text-sm font-medium text-slate-200">Location</label>
                                    <input id="location" value="San Francisco, CA" class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- User Roles -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
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
                                        <span id="assignedCount">1</span> assigned
                                    </span>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="space-y-3">
                                    <div class="flex items-center justify-between p-3 border border-slate-700 rounded-lg hover:bg-slate-800/50 transition-colors">
                                        <div class="flex-1">
                                            <div class="flex items-center gap-2 mb-1">
                                                <span class="font-medium text-slate-100">Super Admin</span>
                                                <span class="inline-flex items-center rounded-full border px-2 py-0.5 text-xs font-mono border-slate-700 bg-slate-800 text-slate-300">super-admin</span>
                                            </div>
                                            <p class="text-sm text-slate-400">Full system access with all permissions</p>
                                        </div>
                                        <label class="relative inline-flex items-center cursor-pointer">
                                            <input type="checkbox" class="sr-only peer" onchange="updateRoleCount()">
                                            <div class="w-11 h-6 bg-slate-700 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-amber-400 rounded-full peer peer-checked:after:translate-x-full after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-amber-400"></div>
                                        </label>
                                    </div>

                                    <div class="flex items-center justify-between p-3 border border-slate-700 rounded-lg hover:bg-slate-800/50 transition-colors">
                                        <div class="flex-1">
                                            <div class="flex items-center gap-2 mb-1">
                                                <span class="font-medium text-slate-100">Administrator</span>
                                                <span class="inline-flex items-center rounded-full border px-2 py-0.5 text-xs font-mono border-slate-700 bg-slate-800 text-slate-300">admin</span>
                                            </div>
                                            <p class="text-sm text-slate-400">Administrative access to most features</p>
                                        </div>
                                        <label class="relative inline-flex items-center cursor-pointer">
                                            <input type="checkbox" checked class="sr-only peer" onchange="updateRoleCount()">
                                            <div class="w-11 h-6 bg-slate-700 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-amber-400 rounded-full peer peer-checked:after:translate-x-full after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-amber-400"></div>
                                        </label>
                                    </div>

                                    <div class="flex items-center justify-between p-3 border border-slate-700 rounded-lg hover:bg-slate-800/50 transition-colors">
                                        <div class="flex-1">
                                            <div class="flex items-center gap-2 mb-1">
                                                <span class="font-medium text-slate-100">Editor</span>
                                                <span class="inline-flex items-center rounded-full border px-2 py-0.5 text-xs font-mono border-slate-700 bg-slate-800 text-slate-300">editor</span>
                                            </div>
                                            <p class="text-sm text-slate-400">Content creation and editing permissions</p>
                                        </div>
                                        <label class="relative inline-flex items-center cursor-pointer">
                                            <input type="checkbox" class="sr-only peer" onchange="updateRoleCount()">
                                            <div class="w-11 h-6 bg-slate-700 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-amber-400 rounded-full peer peer-checked:after:translate-x-full after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-amber-400"></div>
                                        </label>
                                    </div>

                                    <div class="flex items-center justify-between p-3 border border-slate-700 rounded-lg hover:bg-slate-800/50 transition-colors">
                                        <div class="flex-1">
                                            <div class="flex items-center gap-2 mb-1">
                                                <span class="font-medium text-slate-100">Viewer</span>
                                                <span class="inline-flex items-center rounded-full border px-2 py-0.5 text-xs font-mono border-slate-700 bg-slate-800 text-slate-300">viewer</span>
                                            </div>
                                            <p class="text-sm text-slate-400">Read-only access to content</p>
                                        </div>
                                        <label class="relative inline-flex items-center cursor-pointer">
                                            <input type="checkbox" class="sr-only peer" onchange="updateRoleCount()">
                                            <div class="w-11 h-6 bg-slate-700 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-amber-400 rounded-full peer peer-checked:after:translate-x-full after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-amber-400"></div>
                                        </label>
                                    </div>

                                    <div class="flex items-center justify-between p-3 border border-slate-700 rounded-lg hover:bg-slate-800/50 transition-colors">
                                        <div class="flex-1">
                                            <div class="flex items-center gap-2 mb-1">
                                                <span class="font-medium text-slate-100">Moderator</span>
                                                <span class="inline-flex items-center rounded-full border px-2 py-0.5 text-xs font-mono border-slate-700 bg-slate-800 text-slate-300">moderator</span>
                                            </div>
                                            <p class="text-sm text-slate-400">Content moderation and user management</p>
                                        </div>
                                        <label class="relative inline-flex items-center cursor-pointer">
                                            <input type="checkbox" class="sr-only peer" onchange="updateRoleCount()">
                                            <div class="w-11 h-6 bg-slate-700 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-amber-400 rounded-full peer peer-checked:after:translate-x-full after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-amber-400"></div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
  

</x-layouts.admin>