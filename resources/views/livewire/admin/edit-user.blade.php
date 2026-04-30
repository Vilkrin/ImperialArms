<div>
    
                <div class="p-6 flex items-center justify-between">

                    <div class="flex items-center gap-4">

                        <a href="{{ route('admin.users.index') }}"
                        class="inline-flex items-center gap-2 px-3 py-2 text-sm text-slate-300 hover:bg-slate-800/50 rounded transition-colors">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                            </svg>
                            Back to Users
                        </a>

                        <div class="h-6 w-px bg-slate-700"></div>

                        <div class="flex flex-col">
                            <h1 class="font-semibold text-lg text-slate-100">Edit User</h1>
                            <p class="text-sm text-slate-400">Modify user information and permissions</p>
                        </div>

                    </div>

                </div>

                <div class="space-y-6">
                    
                    <!-- Basic Information -->
                    <div class="bg-slate-900/50 border border-amber-400/20 backdrop-blur-sm rounded-lg shadow-sm">
                        <div class="p-6 border-b border-slate-700">
                            <h3 class="text-2xl font-semibold text-slate-100">Basic Information</h3>
                        </div>

                        <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-4">
                    <form wire:submit="save">
                        <div class="space-y-2">
                            <flux:field>
                                <flux:label>Username</flux:label>
                                <flux:input wire:model="name" />
                                <flux:error name="name" />
                            </flux:field>
                        </div>

                        <div class="space-y-2">
                            <flux:field>
                                <flux:label>Email</flux:label>
                                <flux:input type="email" wire:model="email" />
                                <flux:error name="email" />
                            </flux:field>
                        </div>

                        <div class="space-y-2">
                            <flux:field>
                                <flux:label>Password</flux:label>
                                <flux:input type="password" wire:model="password" />
                                <flux:error name="password" />
                            </flux:field>
                        </div>

                        <div class="space-y-2">
                            <flux:field>
                                <flux:label>Status</flux:label>

                                <flux:select wire:model="status">
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                    <option value="banned">Banned</option>
                                </flux:select>

                                <flux:error name="status" />
                            </flux:field>
                        </div>

                        <div class="pt-4">
                            <flux:button type="submit" class="bg-amber-400 hover:bg-amber-500 text-slate-900 font-semibold">Save Changes</flux:button>
                        </div>
                    </form>
                        </div>
                    </div>

                    <!-- User Roles and Dossier -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <!-- User Roles -->
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

                        <!-- Dossier Information -->
                        <form wire:submit="saveDossier">
                        <div class="bg-slate-900/50 border border-amber-400/20 backdrop-blur-sm rounded-lg shadow-sm">
                            <div class="p-6 border-b border-slate-700">
                                <h3 class="text-2xl font-semibold leading-none tracking-tight text-slate-100">Dossier Information</h3>
                            </div>
                            <div class="p-6">
                                <div class="space-y-6">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div class="space-y-2">
                                            <label for="rank" class="text-sm font-medium text-slate-200">Rank</label>
                                            <input id="rank" value="Captain" placeholder="e.g., Captain" class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400" />
                                        </div>
                                        
                                        <div class="space-y-2">
                                            <label for="division" class="text-sm font-medium text-slate-200">Division</label>
                                            <input id="division" value="Engineering Corps" placeholder="e.g., Engineering Corps" class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400" />
                                        </div>
                                        
                                        <div class="space-y-2">
                                            <label for="dutyStatus" class="text-sm font-medium text-slate-200">Duty Status</label>
                                            <select id="dutyStatus" class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400">
                                                <option value="Active Duty" selected>Active Duty</option>
                                                <option value="Reserve">Reserve</option>
                                                <option value="Discharged">Discharged</option>
                                                <option value="Leave of Absence">Leave of Absence</option>
                                            </select>
                                        </div>
                                        
                                        <div class="space-y-2">
                                            <label for="enlistmentDate" class="text-sm font-medium text-slate-200">Enlistment Date</label>
                                            <input id="enlistmentDate" type="date" value="2023-06-15" class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400" />
                                        </div>
                                        
                                        <div class="space-y-2 md:col-span-2">
                                            <label for="dischargeDate" class="text-sm font-medium text-slate-200">Discharge Date (Optional)</label>
                                            <input id="dischargeDate" type="date" class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400" />
                                        </div>
                                    </div>

                                    <div class="space-y-2">
                                        <label class="text-sm font-medium text-slate-200">Service Record</label>
                                        <div class="flex gap-2">
                                            <input id="newServiceRecord" type="text" placeholder="Add service record entry" class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400" />
                                            <button type="button" onclick="addServiceRecord()" class="inline-flex items-center justify-center h-10 w-10 rounded-md border border-slate-700 bg-slate-900/50 text-slate-300 hover:bg-slate-800/50">
                                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                                            </button>
                                        </div>
                                        <ul id="serviceRecordList" class="space-y-2 mt-2">
                                            <li class="flex items-start gap-2 text-sm bg-slate-800/60 p-2 rounded">
                                                <span class="flex-1">Completed Advanced Systems Training - 2023-08-20</span>
                                                <button type="button" onclick="removeServiceRecord(this)" class="h-6 w-6 inline-flex items-center justify-center rounded hover:bg-slate-800/90 text-slate-400">
                                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                                                </button>
                                            </li>
                                            <li class="flex items-start gap-2 text-sm bg-slate-800/60 p-2 rounded">
                                                <span class="flex-1">Promoted to Captain - 2024-01-10</span>
                                                <button type="button" onclick="removeServiceRecord(this)" class="h-6 w-6 inline-flex items-center justify-center rounded hover:bg-slate-800/90 text-slate-400">
                                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                                                </button>
                                            </li>
                                            <li class="flex items-start gap-2 text-sm bg-slate-800/60 p-2 rounded">
                                                <span class="flex-1">Led successful fleet optimization project - 2024-03-15</span>
                                                <button type="button" onclick="removeServiceRecord(this)" class="h-6 w-6 inline-flex items-center justify-center rounded hover:bg-slate-800/90 text-slate-400">
                                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="space-y-2">
                                        <label class="text-sm font-medium text-slate-200">Commendations</label>
                                        <div class="flex gap-2">
                                            <input id="newCommendation" type="text" placeholder="Add commendation" class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400" />
                                            <button type="button" onclick="addCommendation()" class="inline-flex items-center justify-center h-10 w-10 rounded-md border border-slate-700 bg-slate-900/50 text-slate-300 hover:bg-slate-800/50">
                                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                                            </button>
                                        </div>
                                        <ul id="commendationsList" class="space-y-2 mt-2">
                                            <li class="flex items-start gap-2 text-sm bg-slate-800/60 p-2 rounded">
                                                <span class="flex-1">Excellence in Technical Leadership Award</span>
                                                <button type="button" onclick="removeCommendation(this)" class="h-6 w-6 inline-flex items-center justify-center rounded hover:bg-slate-800/90 text-slate-400">
                                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                                                </button>
                                            </li>
                                            <li class="flex items-start gap-2 text-sm bg-slate-800/60 p-2 rounded">
                                                <span class="flex-1">Outstanding Service Medal</span>
                                                <button type="button" onclick="removeCommendation(this)" class="h-6 w-6 inline-flex items-center justify-center rounded hover:bg-slate-800/90 text-slate-400">
                                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="space-y-2">
                                        <label class="text-sm font-medium text-slate-200">Disciplinary Actions</label>
                                        <div class="flex gap-2">
                                            <input id="newDisciplinaryAction" type="text" placeholder="Add disciplinary action" class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400" />
                                            <button type="button" onclick="addDisciplinaryAction()" class="inline-flex items-center justify-center h-10 w-10 rounded-md border border-slate-700 bg-slate-900/50 text-slate-300 hover:bg-slate-800/50">
                                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                                            </button>
                                        </div>
                                        <ul id="disciplinaryActionsList" class="space-y-2 mt-2">
                                            <!-- No disciplinary actions by default -->
                                        </ul>
                                    </div>

                                    <div class="space-y-2">
                                        <label for="leadershipNotes" class="text-sm font-medium text-slate-200">Leadership Notes</label>
                                        <textarea id="leadershipNotes" rows="4" placeholder="Enter leadership notes and observations..." class="flex w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400">Exceptional technical skills and leadership qualities. Shows great promise for advanced command positions. Consistently exceeds performance expectations.</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>

</div>