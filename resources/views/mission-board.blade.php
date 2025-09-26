<x-layouts.main :title="__('Home')">

    <main class="pt-16">
        <!-- Mission Board Section -->
        <section id="missions" class="py-20">
            <div class="container mx-auto px-4">
                <!-- Section Header -->
                <div class="text-center mb-16">
                    <h2 class="font-orbitron text-4xl md:text-5xl font-bold mb-6">
                        <span class="text-gradient">MISSION</span>
                        <span class="text-foreground"> BOARD</span>
                    </h2>
                    <div class="w-24 h-1 bg-primary mx-auto mb-6"></div>
                    <p class="text-xl text-muted-foreground max-w-3xl mx-auto font-exo">
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
                        <div class="card-imperial terminal-border">
                            <div class="flex items-start justify-between mb-4">
                                <div class="flex items-center space-x-3">
                                    <svg class="h-8 w-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.18-2.42l2.84-2.84A9.969 9.969 0 0119 12c0 1.933-.55 3.74-1.5 5.26l-2.84-2.84M9 12a3 3 0 113-3m-3 3a3 3 0 01-3-3"></path>
                                    </svg>
                                    <div>
                                        <h4 class="font-orbitron text-lg font-bold">High-Value Cargo Escort</h4>
                                        <p class="font-exo text-sm text-muted-foreground">OP-2024-001</p>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <span class="bg-primary/20 text-primary border border-primary/50 px-2 py-1 rounded text-xs font-orbitron">
                                        High
                                    </span>
                                    <span class="bg-accent/20 text-accent border border-accent/50 px-2 py-1 rounded text-xs font-orbitron">
                                        Open
                                    </span>
                                </div>
                            </div>
                            
                            <div class="space-y-4">
                                <p class="text-foreground/90 font-exo">Escort convoy carrying sensitive medical supplies through contested space.</p>
                                
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                                    <div class="flex items-center space-x-2">
                                        <svg class="h-4 w-4 text-muted-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        </svg>
                                        <span class="text-muted-foreground">Location:</span>
                                        <span class="text-foreground">Stanton System</span>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <svg class="h-4 w-4 text-muted-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span class="text-muted-foreground">Duration:</span>
                                        <span class="text-foreground">3-4 days</span>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <svg class="h-4 w-4 text-muted-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                                        </svg>
                                        <span class="text-muted-foreground">Reward:</span>
                                        <span class="text-primary font-medium">450,000 aUEC</span>
                                    </div>
                                </div>

                                <div>
                                    <span class="text-muted-foreground text-sm">Requirements:</span>
                                    <div class="flex flex-wrap gap-2 mt-2">
                                        <span class="bg-border/50 text-xs px-2 py-1 rounded border border-border">Heavy Fighter</span>
                                        <span class="bg-border/50 text-xs px-2 py-1 rounded border border-border">Combat Experience</span>
                                        <span class="bg-border/50 text-xs px-2 py-1 rounded border border-border">Security Clearance</span>
                                    </div>
                                </div>

                                <button class="btn-imperial w-full">
                                    ACCEPT MISSION
                                </button>
                            </div>
                        </div>

                        <!-- Mission 2: Industrial Mining Support -->
                        <div class="card-imperial">
                            <div class="flex items-start justify-between mb-4">
                                <div class="flex items-center space-x-3">
                                    <svg class="h-8 w-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                    </svg>
                                    <div>
                                        <h4 class="font-orbitron text-lg font-bold">Industrial Mining Support</h4>
                                        <p class="font-exo text-sm text-muted-foreground">OP-2024-002</p>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <span class="bg-accent/20 text-accent border border-accent/50 px-2 py-1 rounded text-xs font-orbitron">
                                        Medium
                                    </span>
                                    <span class="bg-primary/20 text-primary border border-primary/50 px-2 py-1 rounded text-xs font-orbitron">
                                        In Progress
                                    </span>
                                </div>
                            </div>
                            
                            <div class="space-y-4">
                                <p class="text-foreground/90 font-exo">Provide cargo transport and security for large-scale mining operation.</p>
                                
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                                    <div class="flex items-center space-x-2">
                                        <svg class="h-4 w-4 text-muted-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        </svg>
                                        <span class="text-muted-foreground">Location:</span>
                                        <span class="text-foreground">Pyro System</span>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <svg class="h-4 w-4 text-muted-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span class="text-muted-foreground">Duration:</span>
                                        <span class="text-foreground">5-7 days</span>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <svg class="h-4 w-4 text-muted-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                                        </svg>
                                        <span class="text-muted-foreground">Reward:</span>
                                        <span class="text-primary font-medium">380,000 aUEC</span>
                                    </div>
                                </div>

                                <div>
                                    <span class="text-muted-foreground text-sm">Requirements:</span>
                                    <div class="flex flex-wrap gap-2 mt-2">
                                        <span class="bg-border/50 text-xs px-2 py-1 rounded border border-border">Cargo Vessel</span>
                                        <span class="bg-border/50 text-xs px-2 py-1 rounded border border-border">Mining Equipment</span>
                                        <span class="bg-border/50 text-xs px-2 py-1 rounded border border-border">Multi-crew</span>
                                    </div>
                                </div>

                                <div class="w-full py-3 text-center text-muted-foreground font-orbitron text-sm border border-border rounded">
                                    IN PROGRESS
                                </div>
                            </div>
                        </div>

                        <!-- Mission 3: Emergency Supply Run -->
                        <div class="card-imperial terminal-border">
                            <div class="flex items-start justify-between mb-4">
                                <div class="flex items-center space-x-3">
                                    <svg class="h-8 w-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                    <div>
                                        <h4 class="font-orbitron text-lg font-bold">Emergency Supply Run</h4>
                                        <p class="font-exo text-sm text-muted-foreground">OP-2024-003</p>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <span class="bg-destructive/20 text-destructive border border-destructive/50 px-2 py-1 rounded text-xs font-orbitron">
                                        Critical
                                    </span>
                                    <span class="bg-accent/20 text-accent border border-accent/50 px-2 py-1 rounded text-xs font-orbitron">
                                        Open
                                    </span>
                                </div>
                            </div>
                            
                            <div class="space-y-4">
                                <p class="text-foreground/90 font-exo">Urgent delivery of medical supplies to remote outpost under siege.</p>
                                
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                                    <div class="flex items-center space-x-2">
                                        <svg class="h-4 w-4 text-muted-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        </svg>
                                        <span class="text-muted-foreground">Location:</span>
                                        <span class="text-foreground">Terra System</span>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <svg class="h-4 w-4 text-muted-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span class="text-muted-foreground">Duration:</span>
                                        <span class="text-foreground">1-2 days</span>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <svg class="h-4 w-4 text-muted-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                                        </svg>
                                        <span class="text-muted-foreground">Reward:</span>
                                        <span class="text-primary font-medium">650,000 aUEC</span>
                                    </div>
                                </div>

                                <div>
                                    <span class="text-muted-foreground text-sm">Requirements:</span>
                                    <div class="flex flex-wrap gap-2 mt-2">
                                        <span class="bg-border/50 text-xs px-2 py-1 rounded border border-border">Fast Ship</span>
                                        <span class="bg-border/50 text-xs px-2 py-1 rounded border border-border">Combat Ready</span>
                                        <span class="bg-border/50 text-xs px-2 py-1 rounded border border-border">Immediate Availability</span>
                                    </div>
                                </div>

                                <button class="btn-imperial w-full">
                                    ACCEPT MISSION
                                </button>
                            </div>
                        </div>

                        <!-- Mission 4: Corporate Freight Contract -->
                        <div class="card-imperial">
                            <div class="flex items-start justify-between mb-4">
                                <div class="flex items-center space-x-3">
                                    <svg class="h-8 w-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                    </svg>
                                    <div>
                                        <h4 class="font-orbitron text-lg font-bold">Corporate Freight Contract</h4>
                                        <p class="font-exo text-sm text-muted-foreground">OP-2024-004</p>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <span class="bg-accent/20 text-accent border border-accent/50 px-2 py-1 rounded text-xs font-orbitron">
                                        Medium
                                    </span>
                                    <span class="bg-accent/20 text-accent border border-accent/50 px-2 py-1 rounded text-xs font-orbitron">
                                        Open
                                    </span>
                                </div>
                            </div>
                            
                            <div class="space-y-4">
                                <p class="text-foreground/90 font-exo">Long-term freight contract for major corporation requiring reliable transport.</p>
                                
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                                    <div class="flex items-center space-x-2">
                                        <svg class="h-4 w-4 text-muted-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        </svg>
                                        <span class="text-muted-foreground">Location:</span>
                                        <span class="text-foreground">Multiple Systems</span>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <svg class="h-4 w-4 text-muted-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span class="text-muted-foreground">Duration:</span>
                                        <span class="text-foreground">2 weeks</span>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <svg class="h-4 w-4 text-muted-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                                        </svg>
                                        <span class="text-muted-foreground">Reward:</span>
                                        <span class="text-primary font-medium">1,200,000 aUEC</span>
                                    </div>
                                </div>

                                <div>
                                    <span class="text-muted-foreground text-sm">Requirements:</span>
                                    <div class="flex flex-wrap gap-2 mt-2">
                                        <span class="bg-border/50 text-xs px-2 py-1 rounded border border-border">Large Cargo Ship</span>
                                        <span class="bg-border/50 text-xs px-2 py-1 rounded border border-border">Corporate Standing</span>
                                        <span class="bg-border/50 text-xs px-2 py-1 rounded border border-border">Insurance</span>
                                    </div>
                                </div>

                                <button class="btn-imperial w-full">
                                    ACCEPT MISSION
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mission Archive -->
                <div>
                    <h3 class="font-orbitron text-2xl font-bold mb-8 text-gradient flex items-center">
                        <svg class="h-6 w-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a2 2 0 012-2h4a2 2 0 012 2v4m-6 4h6"></path>
                        </svg>
                        MISSION ARCHIVE
                    </h3>
                    <div class="grid md:grid-cols-3 gap-6">
                        <!-- Archive Mission 1 -->
                        <div class="card-imperial">
                            <div class="mb-4">
                                <h4 class="font-orbitron text-lg font-bold">Vanduul Border Patrol</h4>
                                <p class="font-exo text-sm text-muted-foreground">OP-2023-087</p>
                            </div>
                            <div class="space-y-3">
                                <div class="flex justify-between items-center text-sm">
                                    <span class="text-muted-foreground">Type:</span>
                                    <span class="bg-border/50 text-xs px-2 py-1 rounded border border-border">Security</span>
                                </div>
                                <div class="flex justify-between items-center text-sm">
                                    <span class="text-muted-foreground">Completed:</span>
                                    <span class="text-foreground">2024-01-15</span>
                                </div>
                                <div class="flex justify-between items-center text-sm">
                                    <span class="text-muted-foreground">Outcome:</span>
                                    <span class="bg-green-500/20 text-green-400 border border-green-500/50 px-2 py-1 rounded text-xs">Success</span>
                                </div>
                                <div class="flex justify-between items-center text-sm">
                                    <span class="text-muted-foreground">Reward:</span>
                                    <span class="text-primary font-medium">750,000 aUEC</span>
                                </div>
                            </div>
                        </div>

                        <!-- Archive Mission 2 -->
                        <div class="card-imperial">
                            <div class="mb-4">
                                <h4 class="font-orbitron text-lg font-bold">Jump Point Survey</h4>
                                <p class="font-exo text-sm text-muted-foreground">OP-2023-086</p>
                            </div>
                            <div class="space-y-3">
                                <div class="flex justify-between items-center text-sm">
                                    <span class="text-muted-foreground">Type:</span>
                                    <span class="bg-border/50 text-xs px-2 py-1 rounded border border-border">Exploration</span>
                                </div>
                                <div class="flex justify-between items-center text-sm">
                                    <span class="text-muted-foreground">Completed:</span>
                                    <span class="text-foreground">2024-01-12</span>
                                </div>
                                <div class="flex justify-between items-center text-sm">
                                    <span class="text-muted-foreground">Outcome:</span>
                                    <span class="bg-green-500/20 text-green-400 border border-green-500/50 px-2 py-1 rounded text-xs">Success</span>
                                </div>
                                <div class="flex justify-between items-center text-sm">
                                    <span class="text-muted-foreground">Reward:</span>
                                    <span class="text-primary font-medium">425,000 aUEC</span>
                                </div>
                            </div>
                        </div>

                        <!-- Archive Mission 3 -->
                        <div class="card-imperial">
                            <div class="mb-4">
                                <h4 class="font-orbitron text-lg font-bold">Pirate Interdiction</h4>
                                <p class="font-exo text-sm text-muted-foreground">OP-2023-085</p>
                            </div>
                            <div class="space-y-3">
                                <div class="flex justify-between items-center text-sm">
                                    <span class="text-muted-foreground">Type:</span>
                                    <span class="bg-border/50 text-xs px-2 py-1 rounded border border-border">Mercenary</span>
                                </div>
                                <div class="flex justify-between items-center text-sm">
                                    <span class="text-muted-foreground">Completed:</span>
                                    <span class="text-foreground">2024-01-08</span>
                                </div>
                                <div class="flex justify-between items-center text-sm">
                                    <span class="text-muted-foreground">Outcome:</span>
                                    <span class="bg-green-500/20 text-green-400 border border-green-500/50 px-2 py-1 rounded text-xs">Success</span>
                                </div>
                                <div class="flex justify-between items-center text-sm">
                                    <span class="text-muted-foreground">Reward:</span>
                                    <span class="text-primary font-medium">580,000 aUEC</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

</x-layouts.main>