<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>
            @hasSection('title')
            @yield('title') | {{ config('app.name', 'Laravel') }}
            @else
            {{ config('app.name', 'Laravel') }}
            @endif
        </title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />
 
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Cookiebot -->
        <script id="Cookiebot"
        src="https://consent.cookiebot.com/uc.js"
        data-cbid="{{ config('services.cookiebot.id') }}"
        data-blockingmode="{{ config('services.cookiebot.blocking_mode') }}"
        type="text/javascript"></script>


        <!-- Styles -->        
        @livewireStyles
        @fluxAppearance

</head>
  <body class="min-h-screen bg-background text-foreground font-exo overflow-x-hidden">
    <!-- Navigation -->
    <nav class="fixed top-0 w-full z-50 bg-[hsl(var(--background)/0.8)] backdrop-blur-md border-b border-border">
      <div class="container mx-auto px-4">
        <div class="flex items-center justify-between h-16">
          <a href="{{ route('home') }}" class="flex items-center space-x-3">
            <i class="fa-solid fa-shield text-primary glow-effect text-2xl"></i>
            <span class="font-orbitron text-xl font-bold text-gradient">IMPERIAL ARMS</span>
          </a>

          <div class="hidden md:flex items-center space-x-8">
            <a href="{{ route('home') }}" class="flex items-center space-x-2 text-primary">
              <i class="fa-solid fa-shield"></i>
              <span class="font-exo">Home</span>
            </a>
            <a href="{{ route('about') }}" class="flex items-center space-x-2 text-foreground/80 hover:text-primary transition-colors">
              <i class="fa-solid fa-users"></i>
              <span class="font-exo">About</span>
            </a>
            <a href="{{ route('fleet') }}" class="flex items-center space-x-2 text-foreground/80 hover:text-primary transition-colors">
              <i class="fa-solid fa-ship"></i>
              <span class="font-exo">Fleet Roster</span>
            </a>
            <a href="{{ route('mission-board') }}" class="flex items-center space-x-2 text-foreground/80 hover:text-primary transition-colors">
              <i class="fa-solid fa-file-lines"></i>
              <span class="font-exo">Mission Board</span>
            </a>
            <a href="{{ route('recruitment') }}" class="flex items-center space-x-2 text-foreground/80 hover:text-primary transition-colors">
              <i class="fa-solid fa-user-plus"></i>
              <span class="font-exo">Join Us</span>
            </a>
            <a href="{{ route('news') }}" class="flex items-center space-x-2 text-foreground/80 hover:text-primary transition-colors">
              <i class="fa-solid fa-tower-broadcast"></i>
              <span class="font-exo">News</span>
            </a>
            <a href="{{ route('contact') }}" class="flex items-center space-x-2 text-foreground/80 hover:text-primary transition-colors">
              <i class="fa-solid fa-message"></i>
              <span class="font-exo">Contact</span>
            </a>
          </div>

          <!-- Services Dropdown -->
          <div class="relative group">
              <button class="flex items-center space-x-2 text-foreground/80 hover:text-primary transition-colors">
                  <svg class="h-4 w-4 group-hover:text-primary transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                  </svg>
                  <span class="font-exo">Services</span>
                  <svg class="h-3 w-3 group-hover:text-primary transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                  </svg>
              </button>
          </div>
                    
          <div class="flex items-center space-x-4">
            <!-- Extra nav actions -->
            @if (Route::has('login'))
              @auth
            <div class="flex items-center space-x-3">
              <a href="members.html" class="btn-outline text-sm px-4 py-2">
                  <span class="font-exo">Members Area</span>
              </a>
            </div>
                 
            <div class="flex items-center space-x-3">
              <a href="#" class="px-3 py-1.5 border border-border rounded text-sm text-foreground/80 hover:text-primary hover:border-[hsl(var(--primary)/.5)] transition-colors font-exo">Members Area</a>
              <a href="{{ url('/admin') }}" class="px-3 py-1.5 border border-border rounded text-sm text-foreground/80 hover:text-primary hover:border-[hsl(var(--primary)/.5)] transition-colors font-exo">Dashboard</a>              
            </div>
            @else
            <div class="flex items-center space-x-3">
              <a href="{{ route('login') }}" class="px-3 py-1.5 border border-border rounded text-sm text-foreground/80 hover:text-primary hover:border-[hsl(var(--primary)/.5)] transition-colors font-exo">Login</a>
              @if (Route::has('register'))
              <a href="{{ route('register') }}" class="btn-imperial text-sm px-4 py-2">Register</a>
              @endif
             @endauth
            @endif
            </div>
          </div>
        </div>
      </div>
    </nav>

    
    {{ $slot }}
    
  
    <!-- Footer -->
    <footer class="bg-card/50 border-t border-border">
      <div class="container mx-auto px-4 py-12">
        <div class="grid md:grid-cols-4 gap-8">
          <div class="md:col-span-2">
            <a href="index.html" class="flex items-center space-x-3 mb-6">
              <i class="fa-solid fa-shield text-primary glow-effect text-2xl"></i>
              <span class="font-orbitron text-xl font-bold text-gradient">IMPERIAL ARMS</span>
            </a>
            <p class="text-muted-foreground font-exo mb-6 max-w-md">Professional freight, logistics, and mercenary operations across the 'verse. Securing the stars with discipline, efficiency, and firepower.</p>
            <div class="flex space-x-4">
              <a href="#" class="p-2 bg-[hsl(var(--muted)/0.5)] rounded hover:bg-[hsl(var(--primary)/0.2)] hover:text-primary transition-colors" aria-label="Discord"><i class="fa-brands fa-discord"></i></a>
              <a href="#" class="p-2 bg-[hsl(var(--muted)/0.5)] rounded hover:bg-[hsl(var(--primary)/0.2)] hover:text-primary transition-colors" aria-label="Spectrum"><i class="fa-solid fa-tower-broadcast"></i></a>
              <a href="#" class="p-2 bg-[hsl(var(--muted)/0.5)] rounded hover:bg-[hsl(var(--primary)/0.2)] hover:text-primary transition-colors" aria-label="Reddit"><i class="fa-brands fa-reddit"></i></a>
              <a href="#" class="p-2 bg-[hsl(var(--muted)/0.5)] rounded hover:bg-[hsl(var(--primary)/0.2)] hover:text-primary transition-colors" aria-label="Email"><i class="fa-solid fa-envelope"></i></a>
            </div>
          </div>

          <div>
            <h3 class="font-orbitron text-lg font-bold mb-4 text-gradient">NAVIGATION</h3>
            <ul class="space-y-2 text-sm">
              <li><a href="#" class="text-[hsl(var(--muted-foreground))] hover:text-primary transition-colors font-exo">About Us</a></li>
              <li><a href="#" class="text-[hsl(var(--muted-foreground))] hover:text-primary transition-colors font-exo">Fleet Roster</a></li>
              <li><a href="#" class="text-[hsl(var(--muted-foreground))] hover:text-primary transition-colors font-exo">Mission Board</a></li>
              <li><a href="#" class="text-[hsl(var(--muted-foreground))] hover:text-primary transition-colors font-exo">Join Us</a></li>
              <li><a href="#" class="text-[hsl(var(--muted-foreground))] hover:text-primary transition-colors font-exo">News</a></li>
              <li><a href="#" class="text-[hsl(var(--muted-foreground))] hover:text-primary transition-colors font-exo">Contact</a></li>
            </ul>
          </div>

          <div>
            <h3 class="font-orbitron text-lg font-bold mb-4 text-gradient">ORGANIZATION</h3>
            <div class="space-y-3 text-sm">
              <div><span class="text-[hsl(var(--muted-foreground))]">Founded:</span> <span class="ml-2">2947</span></div>
              <div><span class="text-[hsl(var(--muted-foreground))]">Focus:</span> <span class="ml-2">Trading, Security</span></div>
              <div><span class="text-[hsl(var(--muted-foreground))]">Commitment:</span> <span class="ml-2">Hardcore</span></div>
              <div><span class="text-[hsl(var(--muted-foreground))]">Language:</span> <span class="ml-2">English</span></div>
              <div><span class="text-[hsl(var(--muted-foreground))]">Recruiting:</span> <span class="ml-2 text-accent">Yes</span></div>
            </div>
          </div>
        </div>

        <div class="border-t border-border mt-12 pt-8 flex flex-col md:flex-row items-center justify-between text-sm">
          <div class="text-[hsl(var(--muted-foreground))] font-exo mb-4 md:mb-0">© 2024 Imperial Arms. All rights reserved. Not affiliated with Cloud Imperium Games.</div>
          <div class="flex items-center space-x-6">
            <a href="#" class="text-[hsl(var(--muted-foreground))] hover:text-primary transition-colors font-exo">Privacy Policy</a>
            <a href="#" class="text-[hsl(var(--muted-foreground))] hover:text-primary transition-colors font-exo">Code of Conduct</a>
            <a href="#" class="text-[hsl(var(--muted-foreground))] hover:text-primary transition-colors font-exo">Terms of Service</a>
          </div>
        </div>
      </div>
    </footer>

     @livewireScripts
     @fluxScripts
  
  </body>
</html>