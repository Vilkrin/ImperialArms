<x-layouts.admin :title="__('Create User')">

                    <div>
                        <h1 class="font-semibold text-lg text-slate-100">Add New User</h1>
                        <p class="text-sm text-slate-400">Create a new user account</p>
                    </div>


                  <div class="space-y-6">
                    <!-- Header Actions -->
                    <div class="flex items-center justify-between">
                        <a href="users.html" class="inline-flex items-center gap-2 px-4 py-2 text-sm text-slate-300 hover:bg-slate-800/50 rounded transition-colors">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                            </svg>
                            Back to Users
                        </a>
                        
                        <div class="flex items-center gap-2">
                            <a href="users.html" class="inline-flex items-center justify-center gap-2 px-4 py-2 border border-slate-700 bg-slate-900/50 text-slate-300 rounded-md text-sm font-medium hover:bg-slate-800 transition-colors">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                                Cancel
                            </a>
                            <button onclick="saveUser()" class="inline-flex items-center justify-center gap-2 px-4 py-2 bg-amber-400 text-slate-900 rounded-md text-sm font-medium hover:bg-amber-300 transition-colors">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"/>
                                </svg>
                                Create User
                            </button>
                        </div>
                    </div>

                    <!-- User Information Form -->
                    <div class="bg-slate-900/50 border border-amber-400/20 backdrop-blur-sm rounded-lg shadow-sm">
                        <div class="p-6 border-b border-slate-700">
                            <h3 class="text-2xl font-semibold leading-none tracking-tight text-slate-100">User Information</h3>
                        </div>
                        <div class="p-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label for="name" class="text-sm font-medium text-slate-200">Full Name *</label>
                                    <input id="name" placeholder="Enter full name" class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm placeholder:text-slate-400 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400" />
                                </div>
                                
                                <div class="space-y-2">
                                    <label for="email" class="text-sm font-medium text-slate-200">Email Address *</label>
                                    <input id="email" type="email" placeholder="Enter email address" class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm placeholder:text-slate-400 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400" />
                                </div>
                                
                                <div class="space-y-2">
                                    <label for="phone" class="text-sm font-medium text-slate-200">Phone Number</label>
                                    <input id="phone" placeholder="Enter phone number" class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm placeholder:text-slate-400 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400" />
                                </div>
                                
                                <div class="space-y-2">
                                    <label for="status" class="text-sm font-medium text-slate-200">Status</label>
                                    <select id="status" class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400">
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
                                    </select>
                                </div>
                                
                                <div class="space-y-2">
                                    <label for="department" class="text-sm font-medium text-slate-200">Department</label>
                                    <input id="department" placeholder="Enter department" class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm placeholder:text-slate-400 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400" />
                                </div>
                                
                                <div class="space-y-2">
                                    <label for="location" class="text-sm font-medium text-slate-200">Location</label>
                                    <input id="location" placeholder="Enter location" class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm placeholder:text-slate-400 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Role Assignment -->
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
                                        <span id="assignedCount">0</span> assigned
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
                                            <input type="checkbox" class="sr-only peer" onchange="updateRoleCount()">
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