<x-layouts.main :title="__('About')">

    <section id="about" class="py-20 relative">
    <div class="container mx-auto px-4">

        <!-- Section Header -->
        <div class="text-center mb-16">
        <h2 class="font-orbitron text-4xl md:text-5xl font-bold mb-6">
            <span class="text-gradient">ABOUT</span>
            <span class="text-foreground">IMPERIAL ARMS</span>
        </h2>
        <div class="w-24 h-1 bg-primary mx-auto mb-6"></div>
        <p class="text-xl text-muted-foreground max-w-3xl mx-auto font-exo">
            Founded on the principles of military excellence and industrial efficiency, 
            Imperial Arms represents the pinnacle of professional operations in the 'verse.
        </p>
        </div>

        <!-- Mission Statement -->
        <div class="card-imperial max-w-4xl mx-auto mb-16 terminal-border">
        <div class="text-center">
            <!-- Replace with an actual star icon (SVG) -->
            <svg class="h-12 w-12 text-primary mx-auto mb-4 animate-pulse-glow" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 22 12 18.77 5.82 22 7 14.14l-5-4.87 6.91-1.01z"/>
            </svg>
            <h3 class="font-orbitron text-2xl font-bold mb-4 text-gradient">
            MISSION STATEMENT
            </h3>
            <p class="text-lg text-foreground/90 font-exo leading-relaxed">
            To provide unparalleled freight, logistics, and security services across the galaxy 
            through disciplined execution, advanced technology, and unwavering commitment to our clients. 
            Imperial Arms stands as the premier choice for organizations requiring reliable, 
            professional, and militarily-precise operations.
            </p>
        </div>
        </div>

        <!-- Core Values -->
        <div class="mb-16">
        <h3 class="font-orbitron text-3xl font-bold text-center mb-12 text-gradient">
            CORE VALUES
        </h3>
        <div class="grid md:grid-cols-3 gap-8">

            <!-- Discipline -->
            <div class="card-imperial group p-6 rounded-2xl shadow-lg bg-background">
            <div class="text-center">
                <!-- Shield Icon -->
                <svg class="h-12 w-12 text-primary mx-auto mb-4 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 2l7 4v6c0 5-3.5 9.5-7 10-3.5-.5-7-5-7-10V6l7-4z"/>
                </svg>
                <h4 class="font-orbitron text-xl">Discipline</h4>
            </div>
            <p class="text-center text-muted-foreground font-exo mt-2">
                Military precision in every operation. We maintain the highest standards of professional conduct.
            </p>
            </div>

            <!-- Efficiency -->
            <div class="card-imperial group p-6 rounded-2xl shadow-lg bg-background">
            <div class="text-center">
                <!-- Target Icon -->
                <svg class="h-12 w-12 text-primary mx-auto mb-4 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <circle cx="12" cy="12" r="10"></circle>
                <circle cx="12" cy="12" r="6"></circle>
                <circle cx="12" cy="12" r="2"></circle>
                </svg>
                <h4 class="font-orbitron text-xl">Efficiency</h4>
            </div>
            <p class="text-center text-muted-foreground font-exo mt-2">
                Streamlined logistics and tactical excellence. Every mission executed with maximum effectiveness.
            </p>
            </div>

            <!-- Firepower -->
            <div class="card-imperial group p-6 rounded-2xl shadow-lg bg-background">
            <div class="text-center">
                <!-- Zap Icon -->
                <svg class="h-12 w-12 text-primary mx-auto mb-4 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
                </svg>
                <h4 class="font-orbitron text-xl">Firepower</h4>
            </div>
            <p class="text-center text-muted-foreground font-exo mt-2">
                Superior military capabilities and cutting-edge weaponry. We protect what matters.
            </p>
            </div>

        </div>
        </div>

        <!-- Organizational Divisions -->
        <div>
        <h3 class="font-orbitron text-3xl font-bold text-center mb-12 text-gradient">
            ORGANIZATIONAL DIVISIONS
        </h3>
        <div class="grid md:grid-cols-3 gap-8">

            <!-- Logistics -->
            <div class="card-imperial group scan-line p-6 rounded-2xl shadow-lg bg-background">
            <div class="text-center">
                <!-- Truck Icon -->
                <svg class="h-12 w-12 text-accent mx-auto mb-4 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 7h13v10H3zM16 7h5l-1.5 3H16zM5 17a2 2 0 114 0 2 2 0 01-4 0zm10 0a2 2 0 114 0 2 2 0 01-4 0z"/>
                </svg>
                <h4 class="font-orbitron text-xl">Logistics Division</h4>
            </div>
            <p class="text-center text-muted-foreground font-exo mt-2">
                Industrial-scale freight operations, supply chain management, and cargo security.
            </p>
            </div>

            <!-- Security -->
            <div class="card-imperial group scan-line p-6 rounded-2xl shadow-lg bg-background">
            <div class="text-center">
                <!-- Shield Icon -->
                <svg class="h-12 w-12 text-primary mx-auto mb-4 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 2l7 4v6c0 5-3.5 9.5-7 10-3.5-.5-7-5-7-10V6l7-4z"/>
                </svg>
                <h4 class="font-orbitron text-xl">Security Division</h4>
            </div>
            <p class="text-center text-muted-foreground font-exo mt-2">
                Professional mercenary services, escort operations, and tactical support.
            </p>
            </div>

            <!-- Operations -->
            <div class="card-imperial group scan-line p-6 rounded-2xl shadow-lg bg-background">
            <div class="text-center">
                <!-- Users Icon -->
                <svg class="h-12 w-12 text-destructive mx-auto mb-4 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17 21v-2a4 4 0 00-3-3.87M9 21v-2a4 4 0 013-3.87M5 8a4 4 0 118 0 4 4 0 01-8 0zm10 0a4 4 0 118 0 4 4 0 01-8 0z"/>
                </svg>
                <h4 class="font-orbitron text-xl">Operations Division</h4>
            </div>
            <p class="text-center text-muted-foreground font-exo mt-2">
                Mission coordination, fleet management, and strategic planning.
            </p>
            </div>

        </div>
        </div>

    </div>
    </section>


</x-layouts.main>