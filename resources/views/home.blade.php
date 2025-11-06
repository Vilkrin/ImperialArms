<x-layouts.main :title="__('Home')">

    <!-- Hero Section -->
    <section id="home" class="relative min-h-screen flex items-center justify-center overflow-hidden pt-16 pb-32">
        <!-- Background Image -->
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('backgrounds/spacescape_vast_field.png') }}'); height: calc(100% + 200px); bottom: -200px;">
            <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/60 to-black/80"></div>
        </div>

        <!-- Content -->
        <div class="relative z-10 text-center max-w-4xl mx-auto px-4">
            <div>
                <svg class="h-16 w-16 text-amber-400 mx-auto mb-6 drop-shadow-[0_0_20px_rgba(251,191,36,0.3)]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.618 5.984A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                </svg>
            </div>
            
            <h1 class="font-orbitron text-5xl md:text-7xl font-bold mb-6">
                <span class="bg-gradient-to-br from-amber-400 to-amber-500 bg-clip-text text-transparent">IMPERIAL</span>
                <span class="text-slate-100"> ARMS</span>
            </h1>
            
            <p class="text-xl md:text-2xl text-slate-300 mb-4 font-exo">
                Securing the Stars. Delivering Firepower.
            </p>
            
            <p class="text-lg text-slate-400 mb-8 max-w-2xl mx-auto font-exo">
                Professional freight, logistics, and mercenary operations across the 'verse. 
                Join the most disciplined and efficient organization in the galaxy.
            </p>

            <!-- Quick Stats -->
            <div class="flex flex-col md:flex-row items-center justify-center gap-8 mb-12">
                <div class="flex items-center space-x-3 text-amber-400">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                    </svg>
                    <span class="font-orbitron font-medium">LOGISTICS</span>
                </div>
                <div class="flex items-center space-x-3 text-amber-400">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                    <span class="font-orbitron font-medium">FIREPOWER</span>
                </div>
                <div class="flex items-center space-x-3 text-red-500">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.618 5.984A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                    <span class="font-orbitron font-medium">SECURITY</span>
                </div>
            </div>

            <!-- CTA Buttons -->
            <div class="flex flex-col md:flex-row items-center justify-center gap-4">
                <a href="#" class="inline-flex items-center justify-center rounded-md bg-gradient-to-br from-amber-400 to-amber-500 text-slate-900 text-lg px-8 py-4 font-orbitron font-medium transition hover:-translate-y-0.5 shadow-[0_0_20px_rgba(251,191,36,0.3)] group">
                    JOIN THE FLEET
                    <svg class="ml-2 h-5 w-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
                <a href="fleet.html" class="inline-flex items-center justify-center rounded-md border border-amber-400/50 text-amber-400 text-lg px-8 py-4 hover:bg-amber-400/10 transition">
                    VIEW FLEET ROSTER
                </a>
            </div>
        </div>
    </section>

</x-layouts.main>
