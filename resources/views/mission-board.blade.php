<x-layouts.main :title="__('Home')">

            <!-- Mission Board Section -->
        <section id="missions" class="py-20">
            <div class="container mx-auto px-4">
                <!-- Section Header -->
                <div class="text-center mb-16">
                    <h2 class="font-orbitron text-4xl md:text-5xl font-bold mb-6">
                        <span class="bg-gradient-to-br from-amber-400 to-amber-500 bg-clip-text text-transparent">MISSION</span>
                        <span class="text-slate-100"> BOARD</span>
                    </h2>
                    <div class="w-24 h-1 bg-amber-400 mx-auto mb-6"></div>
                    <p class="text-xl text-slate-400 max-w-3xl mx-auto font-exo">
                        Current contracts and operational assignments for Imperial Arms personnel.
                    </p>
                </div>

                <!-- Active Missions -->
                <div class="mb-16">
                    <h3 class="font-orbitron text-2xl font-bold mb-8 text-gradient flex items-center">
                        <svg class="h-6 w-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.18-2.42l2.84-2.84A9.969 9.969 0 0119 12c0 1.933-.55 3.74-1.5 5.26l-2.84-2.84M9 12a3 3 0 113-3m-3 3a3 3 0 01-3-3"></path>
                        </svg>
                        ACTIVE CONTRACTS
                    </h3>
                    <div class="grid lg:grid-cols-2 gap-6">
                        <!-- Mission 1: High-Value Cargo Escort -->
                        <div class="bg-slate-900/50 border-2 border-amber-400/50 rounded-lg p-6 backdrop-blur">
                            <div class="flex items-start justify-between mb-4">
                                <div class="flex items-center space-x-3">
                                    <svg class="h-8 w-8 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.18-2.42l2.84-2.84A9.969 9.969 0 0119 12c0 1.933-.55 3.74-1.5 5.26l-2.84-2.84M9 12a3 3 0 113-3m-3 3a3 3 0 01-3-3"></path>
                                    </svg>
                                    <div>
                                        <h4 class="font-orbitron text-lg font-bold">High-Value Cargo Escort</h4>
                                        <p class="font-exo text-sm text-slate-400">OP-2024-001</p>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <span class="bg-amber-400/20 text-amber-400 border border-amber-400/50 px-2 py-1 rounded text-xs font-orbitron">
                                        High
                                    </span>
                                    <span class="bg-amber-400/20 text-amber-400 border border-amber-400/50 px-2 py-1 rounded text-xs font-orbitron">
                                        Open
                                    </span>
                                </div>
                            </div>
                            
                            <div class="space-y-4">
                                <p class="text-slate-300 font-exo">Escort convoy carrying sensitive medical supplies through contested space.</p>
                                
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                                    <div class="flex items-center space-x-2">
                                        <svg class="h-4 w-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        </svg>
                                        <span class="text-slate-400">Location:</span>
                                        <span class="text-slate-100">Stanton System</span>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <svg class="h-4 w-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span class="text-slate-400">Duration:</span>
                                        <span class="text-slate-100">3-4 days</span>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <svg class="h-4 w-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                                        </svg>
                                        <span class="text-slate-400">Reward:</span>
                                        <span class="text-amber-400 font-medium">450,000 aUEC</span>
                                    </div>
                                </div>

                                <div>
                                    <span class="text-slate-400 text-sm">Requirements:</span>
                                    <div class="flex flex-wrap gap-2 mt-2">
                                        <span class="bg-slate-700/50 text-xs px-2 py-1 rounded border border-slate-700">Heavy Fighter</span>
                                        <span class="bg-slate-700/50 text-xs px-2 py-1 rounded border border-slate-700">Combat Experience</span>
                                        <span class="bg-slate-700/50 text-xs px-2 py-1 rounded border border-slate-700">Security Clearance</span>
                                    </div>
                                </div>

                                <button class="inline-flex items-center justify-center rounded-md bg-gradient-to-br from-amber-400 to-amber-500 text-slate-900 px-4 py-2 font-orbitron font-medium transition hover:-translate-y-0.5 shadow-[0_0_20px_rgba(251,191,36,0.3)] w-full">
                                    ACCEPT MISSION
                                </button>
                            </div>
                        </div>

                        <!-- Mission 2: Industrial Mining Support -->
                        <div class="bg-slate-900/50 border border-slate-700 rounded-lg p-6 backdrop-blur">
                            <div class="flex items-start justify-between mb-4">
                                <div class="flex items-center space-x-3">
                                    <svg class="h-8 w-8 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                    </svg>
                                    <div>
                                        <h4 class="font-orbitron text-lg font-bold">Industrial Mining Support</h4>
                                        <p class="font-exo text-sm text-slate-400">OP-2024-002</p>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <span class="bg-amber-400/20 text-amber-400 border border-amber-400/50 px-2 py-1 rounded text-xs font-orbitron">
                                        Medium
                                    </span>
                                    <span class="bg-amber-400/20 text-amber-400 border border-amber-400/50 px-2 py-1 rounded text-xs font-orbitron">
                                        In Progress
                                    </span>
                                </div>
                            </div>
                            
                            <div class="space-y-4">
                                <p class="text-slate-300 font-exo">Provide cargo transport and security for large-scale mining operation.</p>
                                
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                                    <div class="flex items-center space-x-2">
                                        <svg class="h-4 w-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        </svg>
                                        <span class="text-slate-400">Location:</span>
                                        <span class="text-slate-100">Pyro System</span>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <svg class="h-4 w-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span class="text-slate-400">Duration:</span>
                                        <span class="text-slate-100">5-7 days</span>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <svg class="h-4 w-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                                        </svg>
                                        <span class="text-slate-400">Reward:</span>
                                        <span class="text-amber-400 font-medium">380,000 aUEC</span>
                                    </div>
                                </div>

                                <div>
                                    <span class="text-slate-400 text-sm">Requirements:</span>
                                    <div class="flex flex-wrap gap-2 mt-2">
                                        <span class="bg-slate-700/50 text-xs px-2 py-1 rounded border border-slate-700">Cargo Vessel</span>
                                        <span class="bg-slate-700/50 text-xs px-2 py-1 rounded border border-slate-700">Mining Equipment</span>
                                        <span class="bg-slate-700/50 text-xs px-2 py-1 rounded border border-slate-700">Multi-crew</span>
                                    </div>
                                </div>

                                <div class="w-full py-3 text-center text-slate-400 font-orbitron text-sm border border-slate-700 rounded">
                                    IN PROGRESS
                                </div>
                            </div>
                        </div>

                        <!-- Mission 3: Emergency Supply Run -->
                        <div class="bg-slate-900/50 border-2 border-amber-400/50 rounded-lg p-6 backdrop-blur">
                            <div class="flex items-start justify-between mb-4">
                                <div class="flex items-center space-x-3">
                                    <svg class="h-8 w-8 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                    <div>
                                        <h4 class="font-orbitron text-lg font-bold">Emergency Supply Run</h4>
                                        <p class="font-exo text-sm text-slate-400">OP-2024-003</p>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <span class="bg-red-500/20 text-red-500 border border-red-500/50 px-2 py-1 rounded text-xs font-orbitron">
                                        Critical
                                    </span>
                                    <span class="bg-amber-400/20 text-amber-400 border border-amber-400/50 px-2 py-1 rounded text-xs font-orbitron">
                                        Open
                                    </span>
                                </div>
                            </div>
                            
                            <div class="space-y-4">
                                <p class="text-slate-300 font-exo">Urgent delivery of medical supplies to remote outpost under siege.</p>
                                
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                                    <div class="flex items-center space-x-2">
                                        <svg class="h-4 w-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        </svg>
                                        <span class="text-slate-400">Location:</span>
                                        <span class="text-slate-100">Terra System</span>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <svg class="h-4 w-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span class="text-slate-400">Duration:</span>
                                        <span class="text-slate-100">1-2 days</span>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <svg class="h-4 w-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                                        </svg>
                                        <span class="text-slate-400">Reward:</span>
                                        <span class="text-amber-400 font-medium">650,000 aUEC</span>
                                    </div>
                                </div>

                                <div>
                                    <span class="text-slate-400 text-sm">Requirements:</span>
                                    <div class="flex flex-wrap gap-2 mt-2">
                                        <span class="bg-slate-700/50 text-xs px-2 py-1 rounded border border-slate-700">Fast Ship</span>
                                        <span class="bg-slate-700/50 text-xs px-2 py-1 rounded border border-slate-700">Combat Ready</span>
                                        <span class="bg-slate-700/50 text-xs px-2 py-1 rounded border border-slate-700">Immediate Availability</span>
                                    </div>
                                </div>

                                <button class="inline-flex items-center justify-center rounded-md bg-gradient-to-br from-amber-400 to-amber-500 text-slate-900 px-4 py-2 font-orbitron font-medium transition hover:-translate-y-0.5 shadow-[0_0_20px_rgba(251,191,36,0.3)] w-full">
                                    ACCEPT MISSION
                                </button>
                            </div>
                        </div>

                        <!-- Mission 4: Corporate Freight Contract -->
                        <div class="bg-slate-900/50 border border-slate-700 rounded-lg p-6 backdrop-blur">
                            <div class="flex items-start justify-between mb-4">
                                <div class="flex items-center space-x-3">
                                    <svg class="h-8 w-8 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                    </svg>
                                    <div>
                                        <h4 class="font-orbitron text-lg font-bold">Corporate Freight Contract</h4>
                                        <p class="font-exo text-sm text-slate-400">OP-2024-004</p>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <span class="bg-amber-400/20 text-amber-400 border border-amber-400/50 px-2 py-1 rounded text-xs font-orbitron">
                                        Medium
                                    </span>
                                    <span class="bg-amber-400/20 text-amber-400 border border-amber-400/50 px-2 py-1 rounded text-xs font-orbitron">
                                        Open
                                    </span>
                                </div>
                            </div>
                            
                            <div class="space-y-4">
                                <p class="text-slate-300 font-exo">Long-term freight contract for major corporation requiring reliable transport.</p>
                                
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                                    <div class="flex items-center space-x-2">
                                        <svg class="h-4 w-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        </svg>
                                        <span class="text-slate-400">Location:</span>
                                        <span class="text-slate-100">Multiple Systems</span>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <svg class="h-4 w-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span class="text-slate-400">Duration:</span>
                                        <span class="text-slate-100">2 weeks</span>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <svg class="h-4 w-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                                        </svg>
                                        <span class="text-slate-400">Reward:</span>
                                        <span class="text-amber-400 font-medium">1,200,000 aUEC</span>
                                    </div>
                                </div>

                                <div>
                                    <span class="text-slate-400 text-sm">Requirements:</span>
                                    <div class="flex flex-wrap gap-2 mt-2">
                                        <span class="bg-slate-700/50 text-xs px-2 py-1 rounded border border-slate-700">Large Cargo Ship</span>
                                        <span class="bg-slate-700/50 text-xs px-2 py-1 rounded border border-slate-700">Corporate Standing</span>
                                        <span class="bg-slate-700/50 text-xs px-2 py-1 rounded border border-slate-700">Insurance</span>
                                    </div>
                                </div>

                                <button class="inline-flex items-center justify-center rounded-md bg-gradient-to-br from-amber-400 to-amber-500 text-slate-900 px-4 py-2 font-orbitron font-medium transition hover:-translate-y-0.5 shadow-[0_0_20px_rgba(251,191,36,0.3)] w-full">
                                    ACCEPT MISSION
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mission Archive -->
                <div>
                    <h3 class="font-orbitron text-2xl font-bold mb-8 bg-gradient-to-br from-amber-400 to-amber-500 bg-clip-text text-transparent flex items-center">
                        <svg class="h-6 w-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a2 2 0 012-2h4a2 2 0 012 2v4m-6 4h6"></path>
                        </svg>
                        MISSION ARCHIVE
                    </h3>
                    <div class="grid md:grid-cols-3 gap-6">
                        <!-- Archive Mission 1 -->
                        <div class="bg-slate-900/50 border border-slate-700 rounded-lg p-6 backdrop-blur">
                            <div class="mb-4">
                                <h4 class="font-orbitron text-lg font-bold">Vanduul Border Patrol</h4>
                                <p class="font-exo text-sm text-slate-400">OP-2023-087</p>
                            </div>
                            <div class="space-y-3">
                                <div class="flex justify-between items-center text-sm">
                                    <span class="text-slate-400">Type:</span>
                                    <span class="bg-slate-700/50 text-xs px-2 py-1 rounded border border-slate-700">Security</span>
                                </div>
                                <div class="flex justify-between items-center text-sm">
                                    <span class="text-slate-400">Completed:</span>
                                    <span class="text-slate-100">2024-01-15</span>
                                </div>
                                <div class="flex justify-between items-center text-sm">
                                    <span class="text-slate-400">Outcome:</span>
                                    <span class="bg-green-500/20 text-green-400 border border-green-500/50 px-2 py-1 rounded text-xs">Success</span>
                                </div>
                                <div class="flex justify-between items-center text-sm">
                                    <span class="text-slate-400">Reward:</span>
                                    <span class="text-amber-400 font-medium">750,000 aUEC</span>
                                </div>
                            </div>
                        </div>

                        <!-- Archive Mission 2 -->
                        <div class="bg-slate-900/50 border border-slate-700 rounded-lg p-6 backdrop-blur">
                            <div class="mb-4">
                                <h4 class="font-orbitron text-lg font-bold">Jump Point Survey</h4>
                                <p class="font-exo text-sm text-slate-400">OP-2023-086</p>
                            </div>
                            <div class="space-y-3">
                                <div class="flex justify-between items-center text-sm">
                                    <span class="text-slate-400">Type:</span>
                                    <span class="bg-slate-700/50 text-xs px-2 py-1 rounded border border-slate-700">Exploration</span>
                                </div>
                                <div class="flex justify-between items-center text-sm">
                                    <span class="text-slate-400">Completed:</span>
                                    <span class="text-slate-100">2024-01-12</span>
                                </div>
                                <div class="flex justify-between items-center text-sm">
                                    <span class="text-slate-400">Outcome:</span>
                                    <span class="bg-green-500/20 text-green-400 border border-green-500/50 px-2 py-1 rounded text-xs">Success</span>
                                </div>
                                <div class="flex justify-between items-center text-sm">
                                    <span class="text-slate-400">Reward:</span>
                                    <span class="text-amber-400 font-medium">425,000 aUEC</span>
                                </div>
                            </div>
                        </div>

                        <!-- Archive Mission 3 -->
                        <div class="bg-slate-900/50 border border-slate-700 rounded-lg p-6 backdrop-blur">
                            <div class="mb-4">
                                <h4 class="font-orbitron text-lg font-bold">Pirate Interdiction</h4>
                                <p class="font-exo text-sm text-slate-400">OP-2023-085</p>
                            </div>
                            <div class="space-y-3">
                                <div class="flex justify-between items-center text-sm">
                                    <span class="text-slate-400">Type:</span>
                                    <span class="bg-slate-700/50 text-xs px-2 py-1 rounded border border-slate-700">Mercenary</span>
                                </div>
                                <div class="flex justify-between items-center text-sm">
                                    <span class="text-slate-400">Completed:</span>
                                    <span class="text-slate-100">2024-01-08</span>
                                </div>
                                <div class="flex justify-between items-center text-sm">
                                    <span class="text-slate-400">Outcome:</span>
                                    <span class="bg-green-500/20 text-green-400 border border-green-500/50 px-2 py-1 rounded text-xs">Success</span>
                                </div>
                                <div class="flex justify-between items-center text-sm">
                                    <span class="text-slate-400">Reward:</span>
                                    <span class="text-amber-400 font-medium">580,000 aUEC</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

</x-layouts.main>