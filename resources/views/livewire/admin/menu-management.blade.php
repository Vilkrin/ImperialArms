                <div class="space-y-6">
                    <section class="bg-slate-900/50 border border-slate-700 rounded-lg p-4 flex items-start gap-3">
                        <svg class="h-5 w-5 text-amber-400 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                        <p class="text-sm text-slate-400">
                            Use the grip icon to indicate order control, edit existing links, and add dropdown sub-links for navbar items.
                            Footer columns and links are managed in the Footer tab.
                        </p>
                    </section>

                    <!-- Tabs -->
                    <section class="space-y-4">
                        <div class="inline-flex items-center gap-1 rounded-md border border-slate-700 bg-slate-900/50 p-1">
                            <button class="tab-btn px-3 py-1.5 text-sm rounded text-amber-400 bg-amber-400/10" data-tab="navbar">Main Navbar <span class="ml-1 text-xs text-slate-300">(8)</span></button>
                            <button class="tab-btn px-3 py-1.5 text-sm rounded text-slate-300 hover:text-amber-400 hover:bg-slate-800/50" data-tab="footer">Footer <span class="ml-1 text-xs text-slate-300">(3)</span></button>
                        </div>

                        <!-- Navbar tab -->
                        <div id="tab-navbar" class="tab-content">
                            <div class="bg-slate-900/50 border border-slate-700 rounded-lg p-4 space-y-4">
                                <div class="flex items-center justify-between gap-3">
                                    <div>
                                        <h2 class="font-orbitron text-lg text-slate-100">Primary Navigation</h2>
                                        <p class="text-sm text-slate-400">Top-level links and their dropdown sub-links.</p>
                                    </div>
                                    <button id="addNavbarLinkBtn" class="inline-flex items-center justify-center gap-2 px-4 py-2 bg-amber-400 text-slate-900 rounded-md text-sm font-medium hover:bg-amber-300 transition-colors">
                                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v12m6-6H6"/></svg>
                                        Add Link
                                    </button>
                                </div>

                                <div id="navbarList" class="space-y-3">
                                    <div class="space-y-2">
                                        <div class="flex items-center gap-3 p-3 bg-slate-900/50 border border-slate-700 rounded-lg">
                                            <button class="text-slate-500 hover:text-slate-300" aria-label="Reorder"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6h4M10 12h4M10 18h4"/></svg></button>
                                            <div class="flex-1 min-w-0"><div class="font-medium truncate">Home</div><div class="text-xs text-slate-400 font-mono truncate">/</div></div>
                                            <div class="flex items-center gap-1"><button class="action-edit p-2 rounded hover:bg-slate-800/60" data-label="Home" data-url="/"><svg class="h-4 w-4 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg></button><button class="p-2 rounded hover:bg-red-500/10"><svg class="h-4 w-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6M9 7h6"/></svg></button></div>
                                        </div>
                                    </div>
                                    <div class="space-y-2"><div class="flex items-center gap-3 p-3 bg-slate-900/50 border border-slate-700 rounded-lg"><button class="text-slate-500 hover:text-slate-300" aria-label="Reorder"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6h4M10 12h4M10 18h4"/></svg></button><div class="flex-1 min-w-0"><div class="font-medium truncate">About</div><div class="text-xs text-slate-400 font-mono truncate">/about</div></div><div class="flex items-center gap-1"><button class="action-edit p-2 rounded hover:bg-slate-800/60" data-label="About" data-url="/about"><svg class="h-4 w-4 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg></button><button class="p-2 rounded hover:bg-red-500/10"><svg class="h-4 w-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6M9 7h6"/></svg></button></div></div></div>
                                    <div class="space-y-2">
                                        <div class="flex items-center gap-3 p-3 bg-slate-900/50 border border-slate-700 rounded-lg">
                                            <button class="text-slate-500 hover:text-slate-300" aria-label="Reorder"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6h4M10 12h4M10 18h4"/></svg></button>
                                            <div class="flex-1 min-w-0"><div class="flex items-center gap-2"><span class="font-medium truncate">Fleet Roster</span><span class="inline-flex items-center rounded-full border px-2 py-0.5 text-xs border-slate-700 text-slate-300 bg-slate-800/70">3</span></div><div class="text-xs text-slate-400 font-mono truncate">/fleet</div></div>
                                            <div class="flex items-center gap-1"><button class="p-2 rounded hover:bg-slate-800/60 text-slate-300 text-xs">Sub-link</button><button class="action-edit p-2 rounded hover:bg-slate-800/60" data-label="Fleet Roster" data-url="/fleet"><svg class="h-4 w-4 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg></button><button class="p-2 rounded hover:bg-red-500/10"><svg class="h-4 w-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6M9 7h6"/></svg></button></div>
                                        </div>
                                        <div class="ml-6 pl-4 border-l border-slate-700 space-y-2">
                                            <div class="flex items-center gap-3 p-3 bg-slate-900/40 border border-slate-700 rounded-lg"><button class="text-slate-500 hover:text-slate-300"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6h4M10 12h4M10 18h4"/></svg></button><div class="flex-1 min-w-0"><div class="font-medium truncate">All Ships</div><div class="text-xs text-slate-400 font-mono truncate">/fleet</div></div></div>
                                            <div class="flex items-center gap-3 p-3 bg-slate-900/40 border border-slate-700 rounded-lg"><button class="text-slate-500 hover:text-slate-300"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6h4M10 12h4M10 18h4"/></svg></button><div class="flex-1 min-w-0"><div class="font-medium truncate">Capital Class</div><div class="text-xs text-slate-400 font-mono truncate">/fleet?class=capital</div></div></div>
                                            <div class="flex items-center gap-3 p-3 bg-slate-900/40 border border-slate-700 rounded-lg"><button class="text-slate-500 hover:text-slate-300"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6h4M10 12h4M10 18h4"/></svg></button><div class="flex-1 min-w-0"><div class="font-medium truncate">Fighters</div><div class="text-xs text-slate-400 font-mono truncate">/fleet?class=fighter</div></div></div>
                                        </div>
                                    </div>
                                    <div class="space-y-2"><div class="flex items-center gap-3 p-3 bg-slate-900/50 border border-slate-700 rounded-lg"><button class="text-slate-500 hover:text-slate-300" aria-label="Reorder"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6h4M10 12h4M10 18h4"/></svg></button><div class="flex-1 min-w-0"><div class="font-medium truncate">Join Us</div><div class="text-xs text-slate-400 font-mono truncate">/recruitment</div></div><div class="flex items-center gap-1"><button class="action-edit p-2 rounded hover:bg-slate-800/60" data-label="Join Us" data-url="/recruitment"><svg class="h-4 w-4 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg></button><button class="p-2 rounded hover:bg-red-500/10"><svg class="h-4 w-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6M9 7h6"/></svg></button></div></div></div>
                                    <div class="space-y-2"><div class="flex items-center gap-3 p-3 bg-slate-900/50 border border-slate-700 rounded-lg"><button class="text-slate-500 hover:text-slate-300" aria-label="Reorder"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6h4M10 12h4M10 18h4"/></svg></button><div class="flex-1 min-w-0"><div class="font-medium truncate">Blog</div><div class="text-xs text-slate-400 font-mono truncate">/blog</div></div><div class="flex items-center gap-1"><button class="action-edit p-2 rounded hover:bg-slate-800/60" data-label="Blog" data-url="/blog"><svg class="h-4 w-4 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg></button><button class="p-2 rounded hover:bg-red-500/10"><svg class="h-4 w-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6M9 7h6"/></svg></button></div></div></div>
                                    <div class="space-y-2"><div class="flex items-center gap-3 p-3 bg-slate-900/50 border border-slate-700 rounded-lg"><button class="text-slate-500 hover:text-slate-300" aria-label="Reorder"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6h4M10 12h4M10 18h4"/></svg></button><div class="flex-1 min-w-0"><div class="font-medium truncate">Forum</div><div class="text-xs text-slate-400 font-mono truncate">/forum</div></div><div class="flex items-center gap-1"><button class="action-edit p-2 rounded hover:bg-slate-800/60" data-label="Forum" data-url="/forum"><svg class="h-4 w-4 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg></button><button class="p-2 rounded hover:bg-red-500/10"><svg class="h-4 w-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6M9 7h6"/></svg></button></div></div></div>
                                    <div class="space-y-2"><div class="flex items-center gap-3 p-3 bg-slate-900/50 border border-slate-700 rounded-lg"><button class="text-slate-500 hover:text-slate-300" aria-label="Reorder"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6h4M10 12h4M10 18h4"/></svg></button><div class="flex-1 min-w-0"><div class="font-medium truncate">Market</div><div class="text-xs text-slate-400 font-mono truncate">/market</div></div><div class="flex items-center gap-1"><button class="action-edit p-2 rounded hover:bg-slate-800/60" data-label="Market" data-url="/market"><svg class="h-4 w-4 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg></button><button class="p-2 rounded hover:bg-red-500/10"><svg class="h-4 w-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6M9 7h6"/></svg></button></div></div></div>
                                    <div class="space-y-2"><div class="flex items-center gap-3 p-3 bg-slate-900/50 border border-slate-700 rounded-lg"><button class="text-slate-500 hover:text-slate-300" aria-label="Reorder"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6h4M10 12h4M10 18h4"/></svg></button><div class="flex-1 min-w-0"><div class="font-medium truncate">Contact</div><div class="text-xs text-slate-400 font-mono truncate">/contact</div></div><div class="flex items-center gap-1"><button class="action-edit p-2 rounded hover:bg-slate-800/60" data-label="Contact" data-url="/contact"><svg class="h-4 w-4 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg></button><button class="p-2 rounded hover:bg-red-500/10"><svg class="h-4 w-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6M9 7h6"/></svg></button></div></div></div>
                                </div>
                            </div>
                        </div>

                        <!-- Footer tab -->
                        <div id="tab-footer" class="tab-content hidden space-y-4">
                            <div class="bg-slate-900/50 border border-slate-700 rounded-lg p-4">
                                <div class="flex items-end gap-2">
                                    <div class="flex-1 space-y-2">
                                        <label for="newFooterCol" class="text-sm text-slate-300">New footer column</label>
                                        <input id="newFooterCol" placeholder="e.g. Resources" class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm placeholder:text-slate-400 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400" />
                                    </div>
                                    <button id="addFooterColBtn" class="inline-flex items-center justify-center gap-2 px-4 py-2 bg-amber-400 text-slate-900 rounded-md text-sm font-medium hover:bg-amber-300 transition-colors">
                                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v12m6-6H6"/></svg>
                                        Add Column
                                    </button>
                                </div>
                            </div>

                            <div id="footerCols" class="grid gap-4 md:grid-cols-2 xl:grid-cols-3">
                                <div class="bg-slate-900/50 border border-slate-700 rounded-lg p-4 space-y-3">
                                    <div class="flex items-center gap-2">
                                        <button class="text-slate-500 hover:text-slate-300"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6h4M10 12h4M10 18h4"/></svg></button>
                                        <input value="Navigation" class="flex h-9 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400" />
                                        <button class="p-2 rounded hover:bg-red-500/10"><svg class="h-4 w-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6M9 7h6"/></svg></button>
                                    </div>
                                    <div class="space-y-2">
                                        <div class="flex items-center gap-3 p-3 bg-slate-900/40 border border-slate-700 rounded-lg"><div class="flex-1"><div class="font-medium">About Us</div><div class="text-xs text-slate-400 font-mono">/about</div></div></div>
                                        <div class="flex items-center gap-3 p-3 bg-slate-900/40 border border-slate-700 rounded-lg"><div class="flex-1"><div class="font-medium">Fleet Roster</div><div class="text-xs text-slate-400 font-mono">/fleet</div></div></div>
                                        <div class="flex items-center gap-3 p-3 bg-slate-900/40 border border-slate-700 rounded-lg"><div class="flex-1"><div class="font-medium">Join Us</div><div class="text-xs text-slate-400 font-mono">/recruitment</div></div></div>
                                        <div class="flex items-center gap-3 p-3 bg-slate-900/40 border border-slate-700 rounded-lg"><div class="flex-1"><div class="font-medium">Blog</div><div class="text-xs text-slate-400 font-mono">/blog</div></div></div>
                                        <div class="flex items-center gap-3 p-3 bg-slate-900/40 border border-slate-700 rounded-lg"><div class="flex-1"><div class="font-medium">Contact</div><div class="text-xs text-slate-400 font-mono">/contact</div></div></div>
                                    </div>
                                    <button class="inline-flex items-center justify-center gap-2 px-4 py-2 w-full border border-slate-700 bg-slate-900/50 rounded-md text-sm text-slate-200 hover:bg-slate-800/50 transition-colors">
                                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v12m6-6H6"/></svg>
                                        Add Link
                                    </button>
                                </div>
                                <div class="bg-slate-900/50 border border-slate-700 rounded-lg p-4 space-y-3">
                                    <div class="flex items-center gap-2">
                                        <button class="text-slate-500 hover:text-slate-300"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6h4M10 12h4M10 18h4"/></svg></button>
                                        <input value="Social" class="flex h-9 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400" />
                                        <button class="p-2 rounded hover:bg-red-500/10"><svg class="h-4 w-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6M9 7h6"/></svg></button>
                                    </div>
                                    <div class="space-y-2">
                                        <div class="flex items-center gap-3 p-3 bg-slate-900/40 border border-slate-700 rounded-lg"><div class="flex-1"><div class="font-medium">Discord</div><div class="text-xs text-slate-400 font-mono">#</div></div></div>
                                        <div class="flex items-center gap-3 p-3 bg-slate-900/40 border border-slate-700 rounded-lg"><div class="flex-1"><div class="font-medium">Spectrum</div><div class="text-xs text-slate-400 font-mono">#</div></div></div>
                                        <div class="flex items-center gap-3 p-3 bg-slate-900/40 border border-slate-700 rounded-lg"><div class="flex-1"><div class="font-medium">Reddit</div><div class="text-xs text-slate-400 font-mono">#</div></div></div>
                                        <div class="flex items-center gap-3 p-3 bg-slate-900/40 border border-slate-700 rounded-lg"><div class="flex-1"><div class="font-medium">Email</div><div class="text-xs text-slate-400 font-mono">mailto:contact@imperialarms.test</div></div></div>
                                    </div>
                                    <button class="inline-flex items-center justify-center gap-2 px-4 py-2 w-full border border-slate-700 bg-slate-900/50 rounded-md text-sm text-slate-200 hover:bg-slate-800/50 transition-colors">
                                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v12m6-6H6"/></svg>
                                        Add Link
                                    </button>
                                </div>
                                <div class="bg-slate-900/50 border border-slate-700 rounded-lg p-4 space-y-3">
                                    <div class="flex items-center gap-2">
                                        <button class="text-slate-500 hover:text-slate-300"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6h4M10 12h4M10 18h4"/></svg></button>
                                        <input value="Legal" class="flex h-9 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400" />
                                        <button class="p-2 rounded hover:bg-red-500/10"><svg class="h-4 w-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6M9 7h6"/></svg></button>
                                    </div>
                                    <div class="space-y-2">
                                        <div class="flex items-center gap-3 p-3 bg-slate-900/40 border border-slate-700 rounded-lg"><div class="flex-1"><div class="font-medium">Privacy Policy</div><div class="text-xs text-slate-400 font-mono">#</div></div></div>
                                        <div class="flex items-center gap-3 p-3 bg-slate-900/40 border border-slate-700 rounded-lg"><div class="flex-1"><div class="font-medium">Code of Conduct</div><div class="text-xs text-slate-400 font-mono">#</div></div></div>
                                        <div class="flex items-center gap-3 p-3 bg-slate-900/40 border border-slate-700 rounded-lg"><div class="flex-1"><div class="font-medium">Terms of Service</div><div class="text-xs text-slate-400 font-mono">#</div></div></div>
                                    </div>
                                    <button class="inline-flex items-center justify-center gap-2 px-4 py-2 w-full border border-slate-700 bg-slate-900/50 rounded-md text-sm text-slate-200 hover:bg-slate-800/50 transition-colors">
                                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v12m6-6H6"/></svg>
                                        Add Link
                                    </button>
                                </div>
                            </div>
                        </div>
                    </section>

                        <!-- Add/Edit modal -->
    <div id="itemModal" class="hidden fixed inset-0 z-[200] bg-slate-950/70 backdrop-blur-sm p-4">
        <div class="max-w-lg mx-auto mt-20 bg-slate-900 border border-slate-700 rounded-lg shadow-xl">
            <div class="p-6 border-b border-slate-700">
                <h3 id="itemModalTitle" class="font-orbitron text-lg text-slate-100">Add Link</h3>
            </div>
            <div class="p-6 space-y-4">
                <div class="space-y-2">
                    <label class="text-sm text-slate-300">Label</label>
                    <input id="itemLabel" placeholder="e.g. About" class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm placeholder:text-slate-400 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400" />
                </div>
                <div class="space-y-2">
                    <label class="text-sm text-slate-300">URL</label>
                    <input id="itemUrl" placeholder="/path or https://..." class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm placeholder:text-slate-400 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400" />
                </div>
            </div>
            <div class="p-6 border-t border-slate-700 flex items-center justify-end gap-3">
                <button id="closeItemModalBtn" class="inline-flex items-center justify-center px-4 py-2 border border-slate-700 bg-slate-900/50 rounded-md text-sm text-slate-200 hover:bg-slate-800/50 transition-colors">Cancel</button>
                <button id="saveItemBtn" class="inline-flex items-center justify-center px-4 py-2 bg-amber-400 text-slate-900 rounded-md text-sm font-medium hover:bg-amber-300 transition-colors">Save</button>
            </div>
        </div>
    </div>

        <script>
        // Sidebar toggle
        const sidebarToggle = document.getElementById('sidebar-toggle');
        const sidebar = document.querySelector('aside');
        if (sidebarToggle && sidebar) {
            sidebarToggle.addEventListener('click', () => {
                if (sidebar.classList.contains('w-64')) {
                    sidebar.classList.remove('w-64');
                    sidebar.classList.add('w-14');
                    sidebar.querySelectorAll('h2, h3, p, span').forEach(el => { el.style.display = 'none'; });
                } else {
                    sidebar.classList.remove('w-14');
                    sidebar.classList.add('w-64');
                    sidebar.querySelectorAll('h2, h3, p, span').forEach(el => { el.style.display = ''; });
                }
            });
        }

        // Tabs
        const tabButtons = Array.from(document.querySelectorAll('.tab-btn'));
        const tabContents = {
            navbar: document.getElementById('tab-navbar'),
            footer: document.getElementById('tab-footer')
        };
        tabButtons.forEach((btn) => {
            btn.addEventListener('click', () => {
                const key = btn.getAttribute('data-tab');
                tabButtons.forEach((b) => b.className = "tab-btn px-3 py-1.5 text-sm rounded text-slate-300 hover:text-amber-400 hover:bg-slate-800/50");
                btn.className = "tab-btn px-3 py-1.5 text-sm rounded text-amber-400 bg-amber-400/10";
                Object.entries(tabContents).forEach(([k, el]) => el?.classList.toggle('hidden', k !== key));
            });
        });

        // Add/edit modal
        const itemModal = document.getElementById('itemModal');
        const itemModalTitle = document.getElementById('itemModalTitle');
        const itemLabel = document.getElementById('itemLabel');
        const itemUrl = document.getElementById('itemUrl');

        const openModal = (title, label = "", url = "") => {
            if (!itemModal || !itemModalTitle || !itemLabel || !itemUrl) return;
            itemModalTitle.textContent = title;
            itemLabel.value = label;
            itemUrl.value = url;
            itemModal.classList.remove('hidden');
        };
        const closeModal = () => itemModal?.classList.add('hidden');

        document.getElementById('addNavbarLinkBtn')?.addEventListener('click', () => openModal("Add Link"));
        document.querySelectorAll('.action-edit').forEach((btn) => {
            btn.addEventListener('click', () => openModal("Edit Link", btn.getAttribute('data-label') || "", btn.getAttribute('data-url') || ""));
        });
        document.getElementById('closeItemModalBtn')?.addEventListener('click', closeModal);
        itemModal?.addEventListener('click', (e) => { if (e.target === itemModal) closeModal(); });
        document.getElementById('saveItemBtn')?.addEventListener('click', () => {
            if (!itemLabel.value.trim() || !itemUrl.value.trim()) {
                alert("Label and URL are required.");
                return;
            }
            closeModal();
        });

        // Footer add-column demo
        document.getElementById('addFooterColBtn')?.addEventListener('click', () => {
            const input = document.getElementById('newFooterCol');
            const title = input?.value?.trim();
            if (!title) return;
            const cols = document.getElementById('footerCols');
            if (!cols) return;
            const el = document.createElement('div');
            el.className = "bg-slate-900/50 border border-slate-700 rounded-lg p-4 space-y-3";
            el.innerHTML = `
                <div class="flex items-center gap-2">
                    <button class="text-slate-500 hover:text-slate-300"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6h4M10 12h4M10 18h4"/></svg></button>
                    <input value="${title.replace(/"/g, '&quot;')}" class="flex h-9 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400" />
                    <button class="p-2 rounded hover:bg-red-500/10"><svg class="h-4 w-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6M9 7h6"/></svg></button>
                </div>
                <div class="text-center py-6 text-sm text-slate-400 border border-dashed border-slate-700 rounded-lg">Redacted — no links</div>
                <button class="inline-flex items-center justify-center gap-2 px-4 py-2 w-full border border-slate-700 bg-slate-900/50 rounded-md text-sm text-slate-200 hover:bg-slate-800/50 transition-colors">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v12m6-6H6"/></svg>
                    Add Link
                </button>
            `;
            cols.appendChild(el);
            input.value = "";
        });
    </script>
    
                </div>