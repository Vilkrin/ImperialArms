<x-layouts.main :title="__('Home')">

        <!-- Section Header -->
        <section id="news" class="py-20">
            <div class="container mx-auto px-4">
                <div class="text-center mb-16">
                    <h2 class="font-orbitron text-4xl md:text-5xl font-bold mb-6">
                        <span class="bg-gradient-to-br from-amber-400 to-amber-500 bg-clip-text text-transparent">NEWS &</span>
                        <span class="text-slate-100"> DISPATCHES</span>
                    </h2>
                    <div class="w-24 h-1 bg-amber-400 mx-auto mb-6"></div>
                    <p class="text-xl text-slate-400 max-w-3xl mx-auto font-exo">
                        Stay informed with the latest updates from Imperial Arms command and the Star Citizen universe.
                    </p>
                </div>

                <!-- Achievements Banner -->
                <div class="grid md:grid-cols-3 gap-6 mb-16">
                    <div class="bg-slate-900/50 border border-slate-700 rounded-lg p-6 backdrop-blur text-center">
                        <div class="pt-6 p-6">
                            <svg class="h-12 w-12 mx-auto mb-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                            </svg>
                            <div class="text-3xl font-orbitron font-bold text-amber-400 mb-2">50+</div>
                            <h3 class="font-orbitron text-lg font-medium mb-2">Zero Loss Record</h3>
                            <p class="text-slate-400 text-sm font-exo">50+ consecutive successful missions without cargo loss</p>
                        </div>
                    </div>
                    
                    <div class="bg-slate-900/50 border border-slate-700 rounded-lg p-6 backdrop-blur text-center">
                        <div class="pt-6 p-6">
                            <svg class="h-12 w-12 mx-auto mb-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                            </svg>
                            <div class="text-3xl font-orbitron font-bold text-amber-400 mb-2">25</div>
                            <h3 class="font-orbitron text-lg font-medium mb-2">Fleet Strength</h3>
                            <p class="text-slate-400 text-sm font-exo">Combat-ready vessels across multiple ship classes</p>
                        </div>
                    </div>
                    
                    <div class="bg-slate-900/50 border border-slate-700 rounded-lg p-6 backdrop-blur text-center">
                        <div class="pt-6 p-6">
                            <svg class="h-12 w-12 mx-auto mb-4 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                            <div class="text-3xl font-orbitron font-bold text-red-500 mb-2">78</div>
                            <h3 class="font-orbitron text-lg font-medium mb-2">Active Members</h3>
                            <p class="text-slate-400 text-sm font-exo">Professional pilots and crew members</p>
                        </div>
                    </div>
                </div>

                <!-- News Articles -->
                <div class="grid lg:grid-cols-3 gap-6">
                    <!-- Featured Article -->
                    <div class="lg:col-span-2">
                        <div class="bg-slate-900/50 border-2 border-amber-400/50 rounded-lg p-6 backdrop-blur">
                            <div class="flex items-start justify-between mb-4">
                                <div class="flex-1">
                                    <div class="flex items-center space-x-3 mb-2">
                                        <span class="bg-amber-400/20 text-amber-400 border border-amber-400/50 px-2 py-1 rounded text-xs font-orbitron">
                                            Mission Report
                                        </span>
                                        <div class="flex items-center space-x-2 text-slate-400">
                                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a2 2 0 012-2h8a2 2 0 012 2v4m-4 8h4a2 2 0 002-2V9a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z"/>
                                            </svg>
                                            <span class="text-sm font-exo">2024-01-20</span>
                                        </div>
                                    </div>
                                    <h3 class="font-orbitron text-2xl font-bold mb-2">Operation Stanton Shield - Mission Success</h3>
                                    <p class="font-exo text-base text-slate-400 mb-2">
                                        By Fleet Command
                                    </p>
                                </div>
                                <svg class="h-6 w-6 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-slate-300 font-exo mb-4 text-lg">Imperial Arms successfully completed a high-risk escort mission, delivering critical medical supplies to Terra system under hostile conditions.</p>
                                <p class="text-slate-400 font-exo mb-6">Our combined logistics and security divisions worked seamlessly to ensure zero cargo loss and minimal casualties during the 72-hour operation.</p>
                                <button class="border border-amber-400/50 text-amber-400 hover:bg-amber-400/10 px-4 py-2 rounded transition-colors">
                                    Read Full Report
                                    <svg class="ml-2 h-4 w-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- News List -->
                    <div class="space-y-6">
                        <h3 class="font-orbitron text-xl font-bold bg-gradient-to-br from-amber-400 to-amber-500 bg-clip-text text-transparent">
                            RECENT UPDATES
                        </h3>
                        
                        <!-- News Article 1 -->
                        <div class="bg-slate-900/50 border border-slate-700 rounded-lg p-6 backdrop-blur">
                            <div class="pb-3 mb-2">
                                <div class="flex items-center space-x-2 mb-2">
                                    <span class="bg-amber-400/20 text-amber-400 border border-amber-400/50 px-2 py-1 rounded text-xs font-orbitron">
                                        Fleet Update
                                    </span>
                                    <div class="flex items-center space-x-1 text-slate-400">
                                        <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a2 2 0 012-2h8a2 2 0 012 2v4m-4 8h4a2 2 0 002-2V9a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z"/>
                                        </svg>
                                        <span class="text-xs font-exo">2024-01-18</span>
                                    </div>
                                </div>
                                <h4 class="font-orbitron text-lg font-bold">New Fleet Additions: Heavy Fighters</h4>
                            </div>
                            <div>
                                <p class="text-slate-300 font-exo text-sm mb-3">Imperial Arms has acquired three additional Aegis Vanguard Wardens to strengthen our escort capabilities.</p>
                                <div class="flex items-center justify-between">
                                    <span class="text-slate-400 text-xs font-exo">By Fleet Logistics</span>
                                    <button class="text-amber-400 hover:text-amber-300 text-sm transition-colors">
                                        Read More
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- News Article 2 -->
                        <div class="bg-slate-900/50 border border-slate-700 rounded-lg p-6 backdrop-blur">
                            <div class="pb-3 mb-2">
                                <div class="flex items-center space-x-2 mb-2">
                                    <span class="bg-yellow-400/20 text-yellow-400 border border-yellow-400/50 px-2 py-1 rounded text-xs font-orbitron">
                                        Patch Notes
                                    </span>
                                    <div class="flex items-center space-x-1 text-slate-400">
                                        <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a2 2 0 012-2h8a2 2 0 012 2v4m-4 8h4a2 2 0 002-2V9a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z"/>
                                        </svg>
                                        <span class="text-xs font-exo">2024-01-15</span>
                                    </div>
                                </div>
                                <h4 class="font-orbitron text-lg font-bold">Star Citizen Alpha 3.22 - Guild Preparations</h4>
                            </div>
                            <div>
                                <p class="text-slate-300 font-exo text-sm mb-3">Important updates affecting cargo operations and combat mechanics. All members should review new procedures.</p>
                                <div class="flex items-center justify-between">
                                    <span class="text-slate-400 text-xs font-exo">By Operations Division</span>
                                    <button class="text-amber-400 hover:text-amber-300 text-sm transition-colors">
                                        Read More
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- News Article 3 -->
                        <div class="bg-slate-900/50 border border-slate-700 rounded-lg p-6 backdrop-blur">
                            <div class="pb-3 mb-2">
                                <div class="flex items-center space-x-2 mb-2">
                                    <span class="bg-red-500/20 text-red-500 border border-red-500/50 px-2 py-1 rounded text-xs font-orbitron">
                                        Organization
                                    </span>
                                    <div class="flex items-center space-x-1 text-slate-400">
                                        <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a2 2 0 012-2h8a2 2 0 012 2v4m-4 8h4a2 2 0 002-2V9a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z"/>
                                        </svg>
                                        <span class="text-xs font-exo">2024-01-12</span>
                                    </div>
                                </div>
                                <h4 class="font-orbitron text-lg font-bold">Recruitment Drive Results</h4>
                            </div>
                            <div>
                                <p class="text-slate-300 font-exo text-sm mb-3">Successfully onboarded 12 new members across all divisions. Welcome to the Imperial Arms family!</p>
                                <div class="flex items-center justify-between">
                                    <span class="text-slate-400 text-xs font-exo">By Recruitment Team</span>
                                    <button class="text-amber-400 hover:text-amber-300 text-sm transition-colors">
                                        Read More
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Newsletter Signup -->
                <div class="mt-16">
                    <div class="bg-slate-900/50 border border-slate-700 rounded-lg p-6 backdrop-blur max-w-2xl mx-auto text-center">
                        <div class="mb-4">
                            <h3 class="font-orbitron text-2xl bg-gradient-to-br from-amber-400 to-amber-500 bg-clip-text text-transparent mb-2">
                                STAY INFORMED
                            </h3>
                            <p class="font-exo text-base text-slate-400">
                                Subscribe to receive critical mission updates and organization news directly to your personal comm device.
                            </p>
                        </div>
                        <div>
                            <div class="flex flex-col md:flex-row gap-4">
                                <input
                                    type="email"
                                    placeholder="Enter your email address..."
                                    class="flex-1 p-3 rounded bg-slate-900 border border-slate-700 focus:border-amber-400 text-slate-100"
                                />
                                <button class="inline-flex items-center justify-center rounded-md bg-gradient-to-br from-amber-400 to-amber-500 text-slate-900 px-4 py-2 font-orbitron font-medium transition hover:-translate-y-0.5 shadow-[0_0_20px_rgba(251,191,36,0.3)]">
                                    SUBSCRIBE
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

</x-layouts.main>
