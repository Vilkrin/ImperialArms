<div>
                        <form wire:submit="saveDossier">
                        <div class="bg-slate-900/50 border border-amber-400/20 backdrop-blur-sm rounded-lg shadow-sm">
                            <div class="p-6 border-b border-slate-700">
                                <h3 class="text-2xl font-semibold leading-none tracking-tight text-slate-100">Dossier Information</h3>
                                <p class="mt-1 text-sm text-slate-400">Manage the user's military dossier and service record</p>
                                <p class="mt-1 text-sm text-slate-400">Note: This information is for internal use only and will not be visible to the user.</p>
                                <p class="mt-1 text-sm text-slate-400">Ensure that all information entered is accurate and up-to-date to maintain a comprehensive service record.</p>
                                <p class="mt-1 text-sm text-slate-400">This is just a placeholder for the dossier information. Vilkrin will wire the form to the backend, soon.</p>
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
                                        <div class="flex gap-2">
                                            <input id="newleadershipNotes" type="text" placeholder="Add leadership notes" class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400" />
                                            <button type="button" onclick="addLeadershipNote()" class="inline-flex items-center justify-center h-10 w-10 rounded-md border border-slate-700 bg-slate-900/50 text-slate-300 hover:bg-slate-800/50">
                                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                                            </button>
                                        </div>
                                        <ul id="leadershipNotesList" class="space-y-2 mt-2">
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
                                </div>
                            </div>
                        </div>
                        </form>
</div>
