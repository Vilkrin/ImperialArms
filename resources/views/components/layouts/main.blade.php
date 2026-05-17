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
        <meta name="description" content="Imperial Arms is a professional mercenary and logistics organization in the Star Citizen universe. We specialize in secure freight transport, high-risk operations, and exploration missions across the 'verse. 
                With a disciplined approach and a commitment to excellence, we provide top-tier services to clients while fostering a tight-knit community of members. 
                Join us as we navigate the stars with precision, firepower, and camaraderie.">

        <meta name="robots" content="index, follow">
        <meta name="author" content="{{ config('app.name') }}">


        <link rel="canonical" href="https://imperialarms.org/">

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://imperialarms.org/">
        <meta property="og:title" content="{{ config('app.name') }}">
        <meta property="og:description" content="Imperial Arms is a professional mercenary and logistics organization in the Star Citizen universe. We specialize in secure freight transport, high-risk operations, and exploration missions across the 'verse. 
                With a disciplined approach and a commitment to excellence, we provide top-tier services to clients while fostering a tight-knit community of members. 
                Join us as we navigate the stars with precision, firepower, and camaraderie.">
        <meta property="og:image" content="https://imperialarms.org/images/social-preview.jpg">

        <meta property="og:site_name" content="{{ config('app.name') }}">
        <meta property="og:locale" content="en_GB">

        <!-- 📌 Open Graph Image tip: Use 1200 × 630 for og:image (works everywhere). -->

        <!-- Twitter -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:url" content="https://imperialarms.org/">
        <meta name="twitter:title" content="{{ config('app.name') }}">
        <meta name="twitter:description" content="Imperial Arms is a professional mercenary and logistics organization in the Star Citizen universe. We specialize in secure freight transport, high-risk operations, and exploration missions across the 'verse. 
                With a disciplined approach and a commitment to excellence, we provide top-tier services to clients while fostering a tight-knit community of members. 
                Join us as we navigate the stars with precision, firepower, and camaraderie.">
        <meta name="twitter:image" content="https://imperialarms.org/images/social-preview.jpg">

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
                    @if ($generalSettings?->getFirstMediaUrl('logos'))
                        <img
                            src="{{ $generalSettings->getFirstMediaUrl('logos') }}"
                            alt="{{ $generalSettings->site_name ?? 'Site Logo' }}"
                            class="h-8 w-auto drop-shadow-[0_0_20px_rgba(251,191,36,0.3)] transition-transform duration-300 hover:-translate-y-0.5"
                        />
                    @else
                        <svg class="h-8 w-8 text-amber-400 drop-shadow-[0_0_20px_rgba(251,191,36,0.3)] transition-transform duration-300 hover:-translate-y-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.618 5.984A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    @endif

                    <span class="font-orbitron text-xl font-bold bg-gradient-to-br from-amber-400 to-amber-500 bg-clip-text text-transparent">
                        {{ $generalSettings?->site_name ?? 'IMPERIAL ARMS' }}
                    </span>
                </a>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center justify-center flex-1 space-x-8">
                    <a href="{{ route('home') }}" class="flex items-center space-x-2 transition-colors group {{ request()->routeIs('home') ? 'text-amber-400' : 'text-slate-300 hover:text-amber-400' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205 3 1m1.5.5-1.5-.5M6.75 7.364V3h-3v18m3-13.636 10.5-3.819" />
                            </svg>
                        <span class="font-exo">Home</span>
                    </a>
                    <a href="{{ route('about') }}" class="flex items-center space-x-2 transition-colors group {{ request()->routeIs('about') ? 'text-amber-400' : 'text-slate-300 hover:text-amber-400' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Zm6-10.125a1.875 1.875 0 1 1-3.75 0 1.875 1.875 0 0 1 3.75 0Zm1.294 6.336a6.721 6.721 0 0 1-3.17.789 6.721 6.721 0 0 1-3.168-.789 3.376 3.376 0 0 1 6.338 0Z" />
                            </svg>
                        <span class="font-exo">About</span>
                    </a>
                    <a href="{{ route('blog.index') }}" class="flex items-center space-x-2 transition-colors group {{ request()->routeIs('blog.index') ? 'text-amber-400' : 'text-slate-300 hover:text-amber-400' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
                            </svg>
                        <span class="font-exo">Blog</span>
                    </a>
                    <a href="{{ route('fleet.index') }}" class="flex items-center space-x-2 transition-colors group {{ request()->routeIs('fleet.index') ? 'text-amber-400' : 'text-slate-300 hover:text-amber-400' }}">
                            <svg class="h-4 w-4 group-hover:text-amber-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"/>
                            </svg>
                        <span class="font-exo">Fleet Roster</span>
                    </a>
                    <a href="{{ route('recruitment') }}" class="flex items-center space-x-2 transition-colors group {{ request()->routeIs('recruitment') ? 'text-amber-400' : 'text-slate-300 hover:text-amber-400' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                            </svg>
                        <span class="font-exo">Join Us</span>
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
            </div>
            <div class="hidden md:flex"> 
                    <flux:dropdown align="end">
                        <flux:profile class="cursor-pointer"
                            :avatar="auth()->user()->getFirstMediaUrl('avatars') ?: null"
                            name="{{ auth()->user()->name }}"
                        >
                            @if (!auth()->user()->getFirstMediaUrl('avatars'))
                                <x-slot:avatar>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                </x-slot:avatar>
                            @endif
                        </flux:profile>

                        <flux:navmenu class="max-w-[12rem]">
                            <div class="px-2 py-1.5">
                                <flux:text size="sm">Signed in as</flux:text>
                                <flux:heading class="mt-1! truncate">{{ auth()->user()->name }}</flux:heading>
                                <flux:heading class="mt-1! truncate">{{ auth()->user()->email }}</flux:heading>
                            </div>

                            <flux:navmenu.separator />
                        
                            <flux:navmenu.item href="{{ route('profile.index') }}" icon="user" class="text-zinc-800 dark:text-white cursor-pointer">Account</flux:navmenu.item>

                            @can('view.member.dashboard')
                            <flux:navmenu.item href="{{ route('members.dashboard') }}" icon="user" class="text-zinc-800 dark:text-white cursor-pointer">Members Area</flux:navmenu.item>
                            @endcan
                            
                            @can('access.admin.dashboard')
                            <flux:navmenu.item href="{{ route('admin.dashboard') }}" icon="user" class="text-zinc-800 dark:text-white cursor-pointer">Admin Area</flux:navmenu.item>
                            @endcan

                            <flux:navmenu.separator />

                            <form method="POST" action="{{ route('logout') }}" class="w-full">
                                @csrf
                                <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="text-zinc-800 dark:text-white w-full cursor-pointer">
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
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205 3 1m1.5.5-1.5-.5M6.75 7.364V3h-3v18m3-13.636 10.5-3.819" />
                        </svg>
                        <span class="font-exo">Home</span>
                    </a>
                    <a href="{{ route('about') }}" class="flex items-center space-x-3 transition-colors py-2 text-slate-300 hover:text-amber-400">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/>
                        </svg>
                        <span class="font-exo">About</span>
                    </a>
                     <a href="{{ route('blog.index') }}" class="flex items-center space-x-3 transition-colors py-2 text-slate-300 hover:text-amber-400">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Zm6-10.125a1.875 1.875 0 1 1-3.75 0 1.875 1.875 0 0 1 3.75 0Zm1.294 6.336a6.721 6.721 0 0 1-3.17.789 6.721 6.721 0 0 1-3.168-.789 3.376 3.376 0 0 1 6.338 0Z" />
                        </svg>
                        <span class="font-exo">Blog</span>
                    </a>
                    <a href="{{ route('fleet.index') }}" class="flex items-center space-x-3 transition-colors py-2 text-slate-300 hover:text-amber-400">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                               <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
                            </svg>
                        <span class="font-exo">Fleet Roster</span>
                    </a>
                    <a href="{{ route('recruitment') }}" class="flex items-center space-x-3 transition-colors py-2 text-slate-300 hover:text-amber-400">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                            </svg>
                        <span class="font-exo">Join Us</span>
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
                        <a href="{{ route('services.freight') }}" class="flex items-center space-x-3 transition-colors py-2 text-slate-300 hover:text-amber-400">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                            </svg>
                            <span class="font-exo">Freight Transport</span>
                        </a>
                    </div>
                    
                    <!-- Mobile Button Items -->
                    <div class="pt-3 border-t border-slate-700 space-y-2">
                        <a href="{{ route('admin.dashboard') }}" class="inline-flex items-center rounded-md border border-slate-700/80 px-4 py-2 w-full justify-start text-sm text-slate-200 hover:border-amber-400/50 hover:bg-amber-400/10 hover:text-amber-400 transition">
                            <span class="font-exo">Dashboard</span>
                        </a>
                        <a href="{{ route('members.dashboard') }}" class="inline-flex items-center rounded-md border border-slate-700/80 px-4 py-2 w-full justify-start text-sm text-slate-200 hover:border-amber-400/50 hover:bg-amber-400/10 hover:text-amber-400 transition">
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
                    <a href="{{ route('home') }}" class="flex items-center space-x-3 mb-6">
                        @if ($generalSettings?->getFirstMediaUrl('logos'))
                            <img
                                src="{{ $generalSettings->getFirstMediaUrl('logos') }}"
                                alt="{{ $generalSettings->site_name ?? 'Site Logo' }}"
                                class="h-8 w-auto drop-shadow-[0_0_20px_rgba(251,191,36,0.3)] transition-transform duration-300 hover:-translate-y-0.5"
                            />
                        @else
                            <svg class="h-8 w-8 text-amber-400 drop-shadow-[0_0_20px_rgba(251,191,36,0.3)] transition-transform duration-300 hover:-translate-y-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.618 5.984A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        @endif

                        <span class="font-orbitron text-xl font-bold bg-gradient-to-br from-amber-400 to-amber-500 bg-clip-text text-transparent">
                            {{ $generalSettings?->site_name ?? 'IMPERIAL ARMS' }}
                        </span>
                    </a>
                    <p class="text-slate-400 font-exo mb-6 max-w-md">
                        Professional freight, logistics, and mercenary operations across the 'verse. 
                        Securing the stars with discipline, efficiency, and firepower.
                    </p>
                    <div class="flex space-x-4">
                        <a href="https://bsky.app/profile/lokenplays.bsky.social" class="p-2 bg-slate-800/50 rounded hover:bg-amber-400/20 hover:text-amber-400 transition-colors group">
                            <i class="fa-brands fa-bluesky"></i>
                        </a>
                        <a href="https://discord.gg/lokenplays" class="p-2 bg-slate-800/50 rounded hover:bg-amber-400/20 hover:text-amber-400 transition-colors group">
                            <i class="fa-brands fa-discord  "></i>
                        </a>
                        <a href="https://www.twitch.tv/lokenplays" class="p-2 bg-slate-800/50 rounded hover:bg-amber-400/20 hover:text-amber-400 transition-colors group">
                            <i class="fa-brands fa-twitch"></i>
                        </a>
                        <a href="https://www.youtube.com/watch?v=iik25wqIuFo" class="p-2 bg-slate-800/50 rounded hover:bg-amber-400/20 hover:text-amber-400 transition-colors group">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="font-orbitron text-lg font-bold mb-4 bg-gradient-to-br from-amber-400 to-amber-500 bg-clip-text text-transparent">NAVIGATION</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('about') }}" class="text-slate-400 hover:text-amber-400 transition-colors font-exo">About Us</a></li>
                        <li><a href="{{ route('blog.index') }}" class="text-slate-400 hover:text-amber-400 transition-colors font-exo">Blog</a></li>
                        <li><a href="{{ route('fleet.index') }}" class="text-slate-400 hover:text-amber-400 transition-colors font-exo">Fleet Roster</a></li>
                        <li><a href="{{ route('recruitment') }}" class="text-slate-400 hover:text-amber-400 transition-colors font-exo">Join Us</a></li>
                        {{-- <li><a href="{{ route('blog.index') }}" class="text-slate-400 hover:text-amber-400 transition-colors font-exo">Blog</a></li> --}}
                        <li><a href="{{ route('contact') }}" class="text-slate-400 hover:text-amber-400 transition-colors font-exo">Contact</a></li>
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
                    {!! $generalSettings?->footer_text ?: '© 2026 Imperial Arms. All rights reserved. Site Built by Vilkrin. Not affiliated with Cloud Imperium Games.' !!}
                </div>
                <div class="flex items-center space-x-6 text-sm">
                    <a href="#" class="text-slate-400 hover:text-amber-400 transition-colors font-exo">Privacy Policy</a>
                    <a href="#" class="text-slate-400 hover:text-amber-400 transition-colors font-exo">Code of Conduct</a>
                    <a href="#" class="text-slate-400 hover:text-amber-400 transition-colors font-exo">Terms of Service</a>
                    <button
                        type="button"
                        x-data
                        x-on:click="window.dispatchEvent(new CustomEvent('open-cookie-preferences-window'))"
                        class="cursor-pointer text-slate-400 hover:text-amber-400 transition-colors font-exo"
                    >
                        Cookie settings
                    </button>
                </div>
            </div>
        </div>
    </footer>

     @livewireScripts
     @fluxScripts

     <livewire:cookie-consent />
  
  </body>
</html>