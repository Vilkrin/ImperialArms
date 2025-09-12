<x-layouts.main :title="__('Home')">

    <!-- Hero Section -->
    <section id="home" class="relative min-h-screen flex items-center justify-center overflow-hidden pt-16 pb-32">
      <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" style="background-image:url('../src/assets/ironclad-real.webp'); height: calc(100% + 200px); bottom:-200px;"></div>
      <div class="absolute inset-0" style="background: linear-gradient(to bottom, hsl(var(--background)/0.7), hsl(var(--background)/0.6), hsl(var(--background)/0.8));"></div>

      <div class="relative z-10 text-center max-w-4xl mx-auto px-4">
        <div class="mx-auto w-fit mb-6">
          <i class="fa-solid fa-shield text-primary mx-auto glow-effect text-6xl"></i>
        </div>

        <h1 class="font-orbitron text-5xl md:text-7xl font-bold mb-6">
          <span class="text-gradient">IMPERIAL</span>
          <span class="text-foreground"> ARMS</span>
        </h1>
        <p class="text-xl md:text-2xl text-foreground/80 mb-4 font-exo">Securing the Stars. Delivering Firepower.</p>
        <p class="text-lg text-muted-foreground mb-8 max-w-2xl mx-auto font-exo">Professional freight, logistics, and mercenary operations across the 'verse. Join the most disciplined and efficient organization in the galaxy.</p>

        <!-- Quick Stats -->
        <div class="flex flex-col md:flex-row items-center justify-center gap-8 mb-12">
          <div class="flex items-center space-x-3 text-accent">
            <i class="fa-solid fa-truck h-6 w-6"></i>
            <span class="font-orbitron font-medium">LOGISTICS</span>
          </div>
          <div class="flex items-center space-x-3 text-primary">
            <i class="fa-solid fa-bolt h-6 w-6"></i>
            <span class="font-orbitron font-medium">FIREPOWER</span>
          </div>
          <div class="flex items-center space-x-3 text-destructive">
            <!-- Heroicon: Shield -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.76v-.506c0-1.262 0-1.893.245-2.73a6.75 6.75 0 0 1 4.5-4.5c.837-.245 1.468-.245 2.73-.245h.55c1.262 0 1.893 0 2.73.245a6.75 6.75 0 0 1 4.5 4.5c.245.837.245 1.468.245 2.73v.55c0 1.262 0 1.893-.245 2.73a6.75 6.75 0 0 1-4.5 4.5c-.837.245-1.468.245-2.73.245h-.506c-1.653 0-2.48 0-3.28-.095a9 9 0 0 1-3.27-1.085c-.7-.392-1.34-.908-2.62-1.94a48.422 48.422 0 0 1-1.2-.98 56.49 56.49 0 0 0-.03-2.988Z" />
            </svg>
            <span class="font-orbitron font-medium">SECURITY</span>
          </div>
        </div>

        <!-- CTA Buttons -->
        <div class="flex flex-col md:flex-row items-center justify-center gap-4">
          <a href="#" class="btn-imperial px-4 py-2 group gap-2 whitespace-nowrap rounded-md">
            JOIN THE FLEET
            <!-- Heroicon: Arrow Right -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ml-2 h-5 w-5 transition-transform group-hover:translate-x-1">
              <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
            </svg>
          </a>
          <a href="#" class="px-4 py-2 border border-[hsl(var(--primary)/0.5)] text-primary rounded-md hover:bg-[hsl(var(--primary)/0.1)] gap-2 whitespace-nowrap">
            VIEW FLEET ROSTER
          </a>
        </div>
      </div>
    </section>

</x-layouts.main>
