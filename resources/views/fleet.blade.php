<x-layouts.main :title="__('Home')">

      <!-- Fleet Section -->
    <section id="fleet" class="py-20 bg-muted/20 pt-36">
        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="font-orbitron text-4xl md:text-5xl font-bold mb-6">
                    <span class="text-gradient">SHIP</span>
                    <span class="text-foreground"> LIST</span>
                </h2>
                <div class="w-24 h-1 bg-primary mx-auto mb-6"></div>
                <p class="text-xl text-muted-foreground max-w-3xl mx-auto font-exo">
                    Our diverse fleet of specialized vessels, ready for any mission across the 'verse.
                </p>
            </div>

            <!-- Controls -->
            <div class="flex flex-col md:flex-row gap-4 mb-12">
                <!-- Search -->
                <div class="relative flex-1">
                    <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 h-4 w-4 text-muted-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                    <input
                        type="text"
                        id="search-input"
                        placeholder="Search ships or roles..."
                        class="pl-10 bg-card border border-border focus:border-primary rounded-md px-3 py-2 w-full text-foreground"
                    />
                </div>

                <!-- Filters -->
                <div class="flex items-center gap-2 flex-wrap">
                    <svg class="h-4 w-4 text-muted-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"/>
                    </svg>
                    <button class="filter-btn active bg-primary text-primary-foreground px-3 py-1 rounded text-sm font-exo" data-filter="All">All</button>
                    <button class="filter-btn btn-outline px-3 py-1 rounded text-sm font-exo" data-filter="Cargo">Cargo</button>
                    <button class="filter-btn btn-outline px-3 py-1 rounded text-sm font-exo" data-filter="Fighter">Fighter</button>
                    <button class="filter-btn btn-outline px-3 py-1 rounded text-sm font-exo" data-filter="Support">Support</button>
                    <button class="filter-btn btn-outline px-3 py-1 rounded text-sm font-exo" data-filter="Industrial">Industrial</button>
                </div>
            </div>

            <!-- Fleet Grid -->
            <div id="fleet-grid" class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-16">
                <!-- Ships will be populated by JavaScript -->
            </div>

            <!-- Fleet Stats -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="card-imperial text-center">
                    <div class="text-3xl font-orbitron font-bold text-primary">8</div>
                    <div class="text-muted-foreground font-exo">Total Vessels</div>
                </div>
                <div class="card-imperial text-center">
                    <div class="text-3xl font-orbitron font-bold text-accent">3</div>
                    <div class="text-muted-foreground font-exo">Cargo Ships</div>
                </div>
                <div class="card-imperial text-center">
                    <div class="text-3xl font-orbitron font-bold text-destructive">3</div>
                    <div class="text-muted-foreground font-exo">Combat Vessels</div>
                </div>
                <div class="card-imperial text-center">
                    <div class="text-3xl font-orbitron font-bold text-primary">6</div>
                    <div class="text-muted-foreground font-exo">Available Models</div>
                </div>
            </div>
        </div>
    </section>

</x-layouts.main>  