<x-layouts.main :title="__('Home')">

    <section id="fleet" class="py-20 bg-slate-800/20 pt-36">
        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="font-orbitron text-4xl md:text-5xl font-bold mb-6">
                    <span class="bg-gradient-to-br from-amber-400 to-amber-500 bg-clip-text text-transparent">SHIP</span>
                    <span class="text-slate-100"> LIST</span>
                </h2>
                <div class="w-24 h-1 bg-amber-400 mx-auto mb-6"></div>
                <p class="text-xl text-slate-400 max-w-3xl mx-auto font-exo">
                    Our diverse fleet of specialized vessels, ready for any mission across the 'verse.
                </p>
            </div>
			
            <!-- Controls -->
            <div class="flex flex-col md:flex-row gap-4 mb-12">
                <!-- Search -->
                <div class="relative flex-1">
                    <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 h-4 w-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                    <input
                        type="text"
                        id="search-input"
                        placeholder="Search ships or roles..."
                        class="pl-10 bg-slate-900 border border-slate-700 focus:border-amber-400 focus:ring-1 focus:ring-amber-400 rounded-md px-3 py-2 w-full text-slate-100 outline-none transition"
                    />
                </div>

                <!-- Filters -->
                <div class="flex items-center gap-2 flex-wrap">
                    <svg class="h-4 w-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"/>
                    </svg>
                    <button class="filter-btn active bg-amber-400 text-slate-900 px-3 py-1 rounded text-sm font-exo" data-filter="All">All</button>
                    <button class="filter-btn inline-flex items-center border border-slate-700/80 px-3 py-1 rounded text-sm text-slate-200 hover:border-amber-400/50 hover:bg-amber-400/10 hover:text-amber-400 transition font-exo" data-filter="Cargo">Cargo</button>
                    <button class="filter-btn inline-flex items-center border border-slate-700/80 px-3 py-1 rounded text-sm text-slate-200 hover:border-amber-400/50 hover:bg-amber-400/10 hover:text-amber-400 transition font-exo" data-filter="Fighter">Fighter</button>
                    <button class="filter-btn inline-flex items-center border border-slate-700/80 px-3 py-1 rounded text-sm text-slate-200 hover:border-amber-400/50 hover:bg-amber-400/10 hover:text-amber-400 transition font-exo" data-filter="Support">Support</button>
                    <button class="filter-btn inline-flex items-center border border-slate-700/80 px-3 py-1 rounded text-sm text-slate-200 hover:border-amber-400/50 hover:bg-amber-400/10 hover:text-amber-400 transition font-exo" data-filter="Industrial">Industrial</button>
                </div>
            </div>

            <!-- Fleet Grid -->
            <div id="fleet-grid" class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-16">
                <!-- Ship Cards -->
                @forelse ($ships as $ship)
                    <div class="bg-slate-900/50 border border-slate-700 rounded-lg p-6 backdrop-blur hover:border-amber-400/50 transition-all duration-300 group ship-card" data-class="{{ $ship->class }}" data-search="{{ strtolower($ship->name . ' ' . $ship->role) }}">
                        <div class="mb-4">
                            <div class="flex items-start justify-between mb-4">
                                <!-- Ship Image -->
                                @if($ship->getFirstMediaUrl('images'))
                                    <img 
                                        src="{{ $ship->getFirstMediaUrl('images') }}" 
                                        alt="{{ $ship->name }}" 
                                        class="h-16 w-16 object-cover rounded-lg group-hover:scale-110 transition-transform"
                                    >
                                @else
                                    <!-- Fallback if no image uploaded -->
                                    <div class="h-16 w-16 bg-slate-700 rounded-lg flex items-center justify-center text-slate-400">
                                        ?
                                    </div>
                                @endif
                            </div>
                            <h3 class="font-orbitron text-lg font-bold mb-2 text-slate-100">{{ $ship->name }}</h3>
                            <p class="font-exo text-slate-400 text-sm mb-4">{{ $ship->description }}</p>
                        </div>
                        <div class="space-y-3">
                            <div class="grid grid-cols-2 gap-4 text-sm">
                                <div>
                                    <span class="text-slate-400">Class:</span>
                                    <span class="ml-2 font-medium {{ $ship->class_color }}">{{ $ship->class }}</span>
                                </div>
                                <div>
                                    <span class="text-slate-400">Crew:</span>
                                    <span class="ml-2 text-slate-100">{{ $ship->crew }}</span>
                                </div>
                            </div>
                            <div>
                                <span class="text-slate-400 text-sm">Role:</span>
                                <div class="font-medium text-slate-100">{{ $ship->role }}</div>
                            </div>
                        </div>
                    </div> 
                    
                @empty
                    <div class="col-span-full text-center text-slate-400">
                        No ships available at the moment. Please check back later.
                    </div>
                @endforelse

			
            <!-- Fleet Stats -->
            @if ($ships->isNotEmpty())
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="bg-slate-900/50 border border-slate-700 rounded-lg p-6 backdrop-blur text-center">
                    <div class="text-3xl font-orbitron font-bold text-amber-400">8</div>
                    <div class="text-slate-400 font-exo">Total Vessels</div>
                </div>
                <div class="bg-slate-900/50 border border-slate-700 rounded-lg p-6 backdrop-blur text-center">
                    <div class="text-3xl font-orbitron font-bold text-amber-400">3</div>
                    <div class="text-slate-400 font-exo">Cargo Ships</div>
                </div>
                <div class="bg-slate-900/50 border border-slate-700 rounded-lg p-6 backdrop-blur text-center">
                    <div class="text-3xl font-orbitron font-bold text-red-500">3</div>
                    <div class="text-slate-400 font-exo">Combat Vessels</div>
                </div>
                <div class="bg-slate-900/50 border border-slate-700 rounded-lg p-6 backdrop-blur text-center">
                    <div class="text-3xl font-orbitron font-bold text-amber-400">6</div>
                    <div class="text-slate-400 font-exo">Available Models</div>
                </div>
            </div>
            @endif
        </div>
    </section>

</x-layouts.main>  