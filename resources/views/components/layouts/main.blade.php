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

        <!-- Primary Meta Tags -->
        <meta name="title" content="{{ config('app.name') }}">
        <meta name="description" content="A short, clear description of your website or CMS. Keep this under 160 characters for best SEO.">

        <meta name="robots" content="index, follow">
        <meta name="author" content="{{ config('app.name') }}">


        <link rel="canonical" href="https://example.com/">

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://imperialarms.com/">
        <meta property="og:title" content="{{ config('app.name') }}">
        <meta property="og:description" content="Website Description Here. Keep it concise and compelling to encourage clicks when shared on social media.">
        <meta property="og:image" content="#">

        <meta property="og:site_name" content="{{ config('app.name') }}">
        <meta property="og:locale" content="en_GB">

        <!-- 📌 Open Graph Image tip: Use 1200 × 630 for og:image (works everywhere). -->

        <!-- Twitter -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:url" content="https://example.com/">
        <meta name="twitter:title" content="{{ config('app.name') }}">
        <meta name="twitter:description" content="A short, clear description of your website or CMS.">
        <meta name="twitter:image" content="https://example.com/images/social-preview.jpg">

        <!-- Optional -->
        <meta name="twitter:site" content="@yourhandle">
        <meta name="twitter:creator" content="@yourhandle">

        <meta name="theme-color" content="#0f172a">
        <link rel="icon" href="/favicon.ico">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

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

        <!-- Google ReCaptcha V3 -->
        {!! RecaptchaV3::initJs() !!}

        <!-- Styles -->        
        @livewireStyles
        @fluxAppearance

</head>
<body class="bg-gradient-to-b from-slate-900 via-slate-950 to-slate-950 text-slate-100 font-exo overflow-x-hidden">
    <!-- Navigation -->
    <nav class="fixed top-0 w-full z-50 bg-slate-950/80 backdrop-blur-md border-b border-slate-700">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between h-16">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="flex items-center space-x-3">
                    <svg class="h-8 w-8 text-amber-400 drop-shadow-[0_0_20px_rgba(251,191,36,0.3)] transition-transform duration-300 hover:-translate-y-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.618 5.984A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                    <span class="font-orbitron text-xl font-bold bg-gradient-to-br from-amber-400 to-amber-500 bg-clip-text text-transparent">IMPERIAL ARMS</span>
                </a>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="flex items-center space-x-2 transition-colors group {{ request()->routeIs('home') ? 'text-amber-400' : 'text-slate-300 hover:text-amber-400' }}">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.618 5.984A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                        <span class="font-exo">Home</span>
                    </a>
                    <a href="{{ route('about') }}" class="flex items-center space-x-2 transition-colors group {{ request()->routeIs('about') ? 'text-amber-400' : 'text-slate-300 hover:text-amber-400' }}">
                        <svg class="h-4 w-4 group-hover:text-amber-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/>
                        </svg>
                        <span class="font-exo">About</span>
                    </a>
                    <a href="{{ route('fleet') }}" class="flex items-center space-x-2 transition-colors group {{ request()->routeIs('fleet') ? 'text-amber-400' : 'text-slate-300 hover:text-amber-400' }}">
                        <svg class="h-4 w-4 group-hover:text-amber-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"/>
                        </svg>
                        <span class="font-exo">Fleet Roster</span>
                    </a>
                    <a href="{{ route('recruitment') }}" class="flex items-center space-x-2 transition-colors group {{ request()->routeIs('recruitment') ? 'text-amber-400' : 'text-slate-300 hover:text-amber-400' }}">
                        <svg class="h-4 w-4 group-hover:text-amber-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
                        </svg>
                        <span class="font-exo">Join Us</span>
                    </a>
                    <a href="{{ route('news') }}" class="flex items-center space-x-2 transition-colors group {{ request()->routeIs('news') ? 'text-amber-400' : 'text-slate-300 hover:text-amber-400' }}">
                        <svg class="h-4 w-4 group-hover:text-amber-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4V2a1 1 0 011-1h8a1 1 0 011 1v2h4a1 1 0 110 2h-1v12a2 2 0 01-2 2H6a2 2 0 01-2-2V6H3a1 1 0 010-2h4z"/>
                        </svg>
                        <span class="font-exo">News</span>
                    </a>
                    <a href="{{ route('contact') }}" class="flex items-center space-x-2 transition-colors group {{ request()->routeIs('contact') ? 'text-amber-400' : 'text-slate-300 hover:text-amber-400' }}">
                        <svg class="h-4 w-4 group-hover:text-amber-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                        </svg>
                        <span class="font-exo">Contact</span>
                    </a>

                    <!-- Services Dropdown -->
                    <div class="relative group">
                        <flux:navbar>
                            <flux:dropdown>
                                <flux:navbar.item icon="briefcase" icon:trailing="chevron-down">Services</flux:navbar.item>
                                <flux:navmenu> 
                                    <flux:navmenu.item href="{{ route('services.freight') }}">Freight Transport</flux:navmenu.item>

                                </flux:navmenu>
                            </flux:dropdown>
                        </flux:navbar>
                    </div>
                    
                   <!-- Auth Buttons -->
                   @if (Route::has('login'))
                      @auth
                      @can('view.member.dashboard')
                    <a href="#" class="inline-flex items-center rounded-md border border-slate-700/80 px-4 py-2 text-sm text-slate-200 hover:border-amber-400/50 hover:bg-amber-400/10 hover:text-amber-400 transition">
                        <span class="font-exo">Members Area</span>
                    </a>
                    @endcan
                    @can('access.admin.dashboard')
                    <a href="{{ route('admin.dashboard') }}" class="inline-flex items-center rounded-md border border-slate-700/80 px-4 py-2 text-sm text-slate-200 hover:border-amber-400/50 hover:bg-amber-400/10 hover:text-amber-400 transition">
                        <span class="font-exo">Dashboard</span>
                    </a>
                    @endcan
                    
                    <flux:dropdown align="end">
                        <flux:profile avatar="https://unavatar.io/x/calebporzio" name="{{ auth()->user()->name }}" />

                        <flux:navmenu class="max-w-[12rem]">
                            <div class="px-2 py-1.5">
                                <flux:text size="sm">Signed in as</flux:text>
                                <flux:heading class="mt-1! truncate">{{ auth()->user()->name }}</flux:heading>
                                <flux:heading class="mt-1! truncate">{{ auth()->user()->email }}</flux:heading>
                            </div>

                            <flux:navmenu.separator />
                        
                            <flux:navmenu.item href="{{ route('profile.index') }}" icon="user" class="text-zinc-800 dark:text-white">Account</flux:navmenu.item>

                            @can('view.member.dashboard')
                            <flux:navmenu.item href="#" icon="user" class="text-zinc-800 dark:text-white">Members Area</flux:navmenu.item>
                            @endcan
                            
                            @can('access.admin.dashboard')
                            <flux:navmenu.item href="{{ route('admin.dashboard') }}" icon="user" class="text-zinc-800 dark:text-white">Admin Area</flux:navmenu.item>
                            @endcan

                            <flux:navmenu.separator />

                            <form method="POST" action="{{ route('logout') }}" class="w-full cursor-pointer">
                                @csrf
                                <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="text-zinc-800 dark:text-white w-full">
                                    {{ __('Log Out') }}
                                </flux:menu.item>
                            </form>
                        </flux:navmenu>
                    </flux:dropdown>

                    @else
                    <!-- Auth Buttons -->
                    <div class="flex items-center space-x-3">
                        <a
                            href="{{ route('login') }}"
                            class="inline-flex items-center rounded-md border border-slate-700/80 px-4 py-2 text-sm text-slate-200 hover:border-amber-400/50 hover:bg-amber-400/10 hover:text-amber-400 transition"
                        >
                            Login
                        </a>
                    @if (Route::has('register'))
                        <a
                            href="{{ route('register') }}"
                            class="inline-flex items-center rounded-md bg-gradient-to-br from-amber-400 to-amber-500 text-slate-900 px-4 py-2 text-sm font-orbitron font-medium transition hover:-translate-y-0.5 shadow-[0_0_20px_rgba(251,191,36,0.3)]"
                        >
                            Register
                        </a>
                    </div>
                  
                      @endif
                    @endauth
                    @endif


                </div>

                <!-- Mobile menu button -->
                <button id="mobile-menu-btn" class="md:hidden text-slate-300 hover:text-amber-400 transition-colors">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>

            <!-- Mobile Navigation -->
            <div id="mobile-menu" class="hidden md:hidden bg-slate-900/95 backdrop-blur-md border-t border-slate-700">
                <div class="px-4 py-4 space-y-3">
                    <a href="{{ route('home') }}" class="flex items-center space-x-3 transition-colors py-2 text-amber-400">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.618 5.984A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                        <span class="font-exo">Home</span>
                    </a>
                    <a href="{{ route('about') }}" class="flex items-center space-x-3 transition-colors py-2 text-slate-300 hover:text-amber-400">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/>
                        </svg>
                        <span class="font-exo">About</span>
                    </a>
                    <a href="{{ route('fleet') }}" class="flex items-center space-x-3 transition-colors py-2 text-slate-300 hover:text-amber-400">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"/>
                        </svg>
                        <span class="font-exo">Fleet Roster</span>
                    </a>
                    <a href="{{ route('mission-board') }}" class="flex items-center space-x-3 transition-colors py-2 text-slate-300 hover:text-amber-400">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        <span class="font-exo">Mission Board</span>
                    </a>
                    <a href="{{ route('recruitment') }}" class="flex items-center space-x-3 transition-colors py-2 text-slate-300 hover:text-amber-400">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
                        </svg>
                        <span class="font-exo">Join Us</span>
                    </a>
                    <a href="{{ route('news') }}" class="flex items-center space-x-3 transition-colors py-2 text-slate-300 hover:text-amber-400">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4V2a1 1 0 011-1h8a1 1 0 011 1v2h4a1 1 0 110 2h-1v12a2 2 0 01-2 2H6a2 2 0 01-2-2V6H3a1 1 0 010-2h4z"/>
                        </svg>
                        <span class="font-exo">News</span>
                    </a>
                    <a href="{{ route('contact') }}" class="flex items-center space-x-3 transition-colors py-2 text-slate-300 hover:text-amber-400">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                        </svg>
                        <span class="font-exo">Contact</span>
                    </a>
                    
                    <!-- Mobile Services Section -->
                    <div class="pt-3 border-t border-slate-700">
                        <div class="text-sm font-semibold text-slate-400 mb-2 font-exo">Services</div>
                        <a href="#" class="flex items-center space-x-3 transition-colors py-2 text-slate-300 hover:text-amber-400">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                            </svg>
                            <span class="font-exo">Freight Transport</span>
                        </a>
                    </div>
                    
                    <!-- Mobile Button Items -->
                    <div class="pt-3 border-t border-slate-700 space-y-2">
                        <a href="admin/dashboard.html" class="inline-flex items-center rounded-md border border-slate-700/80 px-4 py-2 w-full justify-start text-sm text-slate-200 hover:border-amber-400/50 hover:bg-amber-400/10 hover:text-amber-400 transition">
                            <span class="font-exo">Dashboard</span>
                        </a>
                        <a href="members.html" class="inline-flex items-center rounded-md border border-slate-700/80 px-4 py-2 w-full justify-start text-sm text-slate-200 hover:border-amber-400/50 hover:bg-amber-400/10 hover:text-amber-400 transition">
                            <span class="font-exo">Members Area</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>    
    
    <main class="pt-16">

    {{ $slot }}
    
    </main>
  
    <!-- Footer -->
    <footer class="bg-slate-900/50 border-t border-slate-700 m-0">
        <div class="container mx-auto px-4 py-12">
            <div class="grid md:grid-cols-4 gap-8">
                <!-- Organization Info -->
                <div class="md:col-span-2">
                    <a href="index.html" class="flex items-center space-x-3 mb-6">
                        <svg class="h-8 w-8 text-amber-400 drop-shadow-[0_0_20px_rgba(251,191,36,0.3)] transition-transform duration-300 hover:-translate-y-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.618 5.984A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                        <span class="font-orbitron text-xl font-bold bg-gradient-to-br from-amber-400 to-amber-500 bg-clip-text text-transparent">IMPERIAL ARMS</span>
                    </a>
                    <p class="text-slate-400 font-exo mb-6 max-w-md">
                        Professional freight, logistics, and mercenary operations across the 'verse. 
                        Securing the stars with discipline, efficiency, and firepower.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="p-2 bg-slate-800/50 rounded hover:bg-amber-400/20 hover:text-amber-400 transition-colors group">
                            <svg class="h-5 w-5 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                            </svg>
                        </a>
                        <a href="#" class="p-2 bg-slate-800/50 rounded hover:bg-amber-400/20 hover:text-amber-400 transition-colors group">
                            <svg class="h-5 w-5 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4V2a1 1 0 011-1h8a1 1 0 011 1v2h4a1 1 0 110 2h-1v12a2 2 0 01-2 2H6a2 2 0 01-2-2V6H3a1 1 0 010-2h4z"/>
                            </svg>
                        </a>
                        <a href="#" class="p-2 bg-slate-800/50 rounded hover:bg-amber-400/20 hover:text-amber-400 transition-colors group">
                            <svg class="h-5 w-5 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/>
                            </svg>
                        </a>
                        <a href="#" class="p-2 bg-slate-800/50 rounded hover:bg-amber-400/20 hover:text-amber-400 transition-colors group">
                            <svg class="h-5 w-5 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="font-orbitron text-lg font-bold mb-4 bg-gradient-to-br from-amber-400 to-amber-500 bg-clip-text text-transparent">NAVIGATION</h3>
                    <ul class="space-y-2">
                        <li><a href="about.html" class="text-slate-400 hover:text-amber-400 transition-colors font-exo">About Us</a></li>
                        <li><a href="fleet.html" class="text-slate-400 hover:text-amber-400 transition-colors font-exo">Fleet Roster</a></li>
                        <li><a href="#" class="text-slate-400 hover:text-amber-400 transition-colors font-exo">Mission Board</a></li>
                        <li><a href="#" class="text-slate-400 hover:text-amber-400 transition-colors font-exo">Join Us</a></li>
                        <li><a href="#" class="text-slate-400 hover:text-amber-400 transition-colors font-exo">News</a></li>
                        <li><a href="#" class="text-slate-400 hover:text-amber-400 transition-colors font-exo">Contact</a></li>
                    </ul>
                </div>

                <!-- Organization Details -->
                <div>
                    <h3 class="font-orbitron text-lg font-bold mb-4 bg-gradient-to-br from-amber-400 to-amber-500 bg-clip-text text-transparent">ORGANIZATION</h3>
                    <div class="space-y-3 text-sm">
                        <div>
                            <span class="text-slate-400">Founded:</span>
                            <span class="ml-2 text-slate-100">2947</span>
                        </div>
                        <div>
                            <span class="text-slate-400">Focus:</span>
                            <span class="ml-2 text-slate-100">Security, Exploration.</span>
                        </div>
                        <div>
                            <span class="text-slate-400">Commitment:</span>
                            <span class="ml-2 text-slate-100">Regular</span>
                        </div>
                        <div>
                            <span class="text-slate-400">Language:</span>
                            <span class="ml-2 text-slate-100">English</span>
                        </div>
                        <div>
                            <span class="text-slate-400">Recruiting:</span>
                            <span class="ml-2 text-amber-400">Yes</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="border-t border-slate-700 mt-12 pt-8 flex flex-col md:flex-row items-center justify-between">
                <div class="text-slate-400 text-sm font-exo mb-4 md:mb-0">
                    © 2024 Imperial Arms. All rights reserved. Site Built by Vilkrin. Not affiliated with Cloud Imperium Games.
                </div>
                <div class="flex items-center space-x-6 text-sm">
                    <a href="#" class="text-slate-400 hover:text-amber-400 transition-colors font-exo">Privacy Policy</a>
                    <a href="#" class="text-slate-400 hover:text-amber-400 transition-colors font-exo">Code of Conduct</a>
                    <a href="#" class="text-slate-400 hover:text-amber-400 transition-colors font-exo">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

     @livewireScripts
     @fluxScripts
  
  </body>
</html>