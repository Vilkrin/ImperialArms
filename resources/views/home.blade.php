<x-layouts.main :title="__('Home')">

    <!-- Hero Section -->
    <section id="home" class="relative min-h-screen flex items-center justify-center overflow-hidden pt-16 pb-32">
        <!-- Background Image -->
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" style="background-image: url('https://picsum.photos/id/903/1920/1080'); height: calc(100% + 200px); bottom: -200px;">
            <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/60 to-black/80"></div>
        </div>

        <!-- Content -->
        <div class="relative z-10 text-center max-w-4xl mx-auto px-4">
            <!-- Logo -->
            <div>
                @if ($generalSettings?->getFirstMediaUrl('logos'))
                    <img
                        src="{{ $generalSettings->getFirstMediaUrl('logos') }}"
                        alt="{{ $generalSettings->site_name ?? 'Site Logo' }}"
                        class="h-24 w-auto mx-auto mb-6 drop-shadow-[0_0_20px_rgba(251,191,36,0.3)]"
                    />
                @else
                    <svg class="h-16 w-16 text-amber-400 mx-auto mb-6 drop-shadow-[0_0_20px_rgba(251,191,36,0.3)]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.618 5.984A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                @endif
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
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z" />
                    </svg>
                    <span class="font-orbitron font-medium">MANUFACTURING</span>
                </div>
                <div class="flex items-center space-x-3 text-amber-400">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                       <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
                    </svg>
                    <span class="font-orbitron font-medium">LOGISTICS</span>
                </div>
                <div class="flex items-center space-x-3 text-red-500">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.618 5.984A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                    <span class="font-orbitron font-medium">SALVAGE</span>
                </div>
                <div class="flex items-center space-x-3 text-red-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                       <path stroke-linecap="round" stroke-linejoin="round" d="M7.864 4.243A7.5 7.5 0 0 1 19.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 0 0 4.5 10.5a7.464 7.464 0 0 1-1.15 3.993m1.989 3.559A11.209 11.209 0 0 0 8.25 10.5a3.75 3.75 0 1 1 7.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 0 1-3.6 9.75m6.633-4.596a18.666 18.666 0 0 1-2.485 5.33" />
                    </svg>
                    <span class="font-orbitron font-medium">SECURITY</span>
                </div>
                <div class="flex items-center space-x-3 text-red-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                    </svg>
                    <span class="font-orbitron font-medium">CLIENT RELATIONS</span>
                </div>
            </div>

            <!-- CTA Buttons -->
            <div class="flex flex-col md:flex-row items-center justify-center gap-4">
                <a href="{{ route('recruitment') }}" class="inline-flex items-center justify-center rounded-md bg-gradient-to-br from-amber-400 to-amber-500 text-slate-900 text-lg px-8 py-4 font-orbitron font-medium transition hover:-translate-y-0.5 shadow-[0_0_20px_rgba(251,191,36,0.3)] group">
                    JOIN THE FLEET
                    <svg class="ml-2 h-5 w-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
                <a href="{{ route('fleet.index') }}" class="inline-flex items-center justify-center rounded-md border border-amber-400/50 text-amber-400 text-lg px-8 py-4 hover:bg-amber-400/10 transition">
                    VIEW FLEET ROSTER
                </a>
            </div>
        </div>
    </section>

</x-layouts.main>
