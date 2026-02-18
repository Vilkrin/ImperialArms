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

        <!-- Styles -->        
        @livewireStyles
        @fluxAppearance

  </head>

<body class="bg-slate-950 text-slate-100 font-exo overflow-x-hidden min-h-screen">
    <div class="flex w-full min-h-screen">
        <!-- Sidebar -->
        <aside id="sidebar" class="w-64 min-h-screen bg-slate-900/50 border-r border-slate-700">
            <!-- Header -->
            <div class="p-4 border-b border-slate-700">
                <div class="flex items-center gap-2">
                    <svg class="h-8 w-8 text-amber-400 drop-shadow-[0_0_20px_rgba(251,191,36,0.3)]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.618 5.984A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                    <div>
                        <h2 class="font-orbitron font-bold text-lg bg-gradient-to-br from-amber-400 to-amber-500 bg-clip-text text-transparent">Imperial Arms</h2>
                        <p class="text-xs text-slate-400">Admin Panel</p>
                    </div>
                </div>
            </div>

            <!-- Navigation -->
            <nav class="p-4 space-y-6">
                <!-- Content Section -->
                <div>
                    <h3 class="text-xs font-medium text-slate-500 uppercase tracking-wider mb-2 px-3">Content</h3>
                    <ul class="space-y-1">
                        <li><a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-3 py-2 text-sm bg-amber-400/10 text-amber-400 font-medium rounded-l-md border-r-2 border-amber-400 hover:bg-slate-800/50 hover:text-amber-300 transition-colors"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5a2 2 0 012-2h4a2 2 0 012 2v6H8V5z"/></svg> Dashboard</a></li>
                        <li><a href="pages/posts.html" class="flex items-center gap-3 px-3 py-2 text-sm text-amber-400 hover:bg-slate-800/50 hover:text-amber-300 transition-colors rounded-l-md border-r border-slate-700 hover:border-amber-400/60"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg> Posts</a></li>
                        <li><a href="pages/media.html" class="flex items-center gap-3 px-3 py-2 text-sm text-amber-400 hover:bg-slate-800/50 hover:text-amber-300 transition-colors rounded-l-md border-r border-slate-700 hover:border-amber-400/60"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg> Media</a></li>
                        <li><a href="pages/pages.html" class="flex items-center gap-3 px-3 py-2 text-sm text-amber-400 hover:bg-slate-800/50 hover:text-amber-300 transition-colors rounded-l-md border-r border-slate-700 hover:border-amber-400/60"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg> Pages</a></li>
                    </ul>
                </div>

                <!-- Management Section -->
                <div>
                    <h3 class="text-xs font-medium text-slate-500 uppercase tracking-wider mb-2 px-3">Management</h3>
                    <ul class="space-y-1">
                        <li><a href="{{ route('admin.users.index') }}" class="flex items-center gap-3 px-3 py-2 text-sm text-amber-400 hover:bg-slate-800/50 hover:text-amber-300 transition-colors rounded-l-md border-r border-slate-700 hover:border-amber-400/60"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/></svg> Users</a></li>
                        <li><a href="pages/ships.html" class="flex items-center gap-3 px-3 py-2 text-sm text-amber-400 hover:bg-slate-800/50 hover:text-amber-300 transition-colors rounded-l-md border-r border-slate-700 hover:border-amber-400/60"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Ships</a></li>
                        <li><a href="pages/fleet.html" class="flex items-center gap-3 px-3 py-2 text-sm text-amber-400 hover:bg-slate-800/50 hover:text-amber-300 transition-colors rounded-l-md border-r border-slate-700 hover:border-amber-400/60"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Fleet</a></li>
                        <li><a href="pages/permissions.html" class="flex items-center gap-3 px-3 py-2 text-sm text-amber-400 hover:bg-slate-800/50 hover:text-amber-300 transition-colors rounded-l-md border-r border-slate-700 hover:border-amber-400/60"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg> Permissions</a></li>
                    </ul>
                </div>

                <!-- Communication Section -->
                <div>
                    <h3 class="text-xs font-medium text-slate-500 uppercase tracking-wider mb-2 px-3">Communication</h3>
                    <ul class="space-y-1">
                        <li><a href="pages/chat.html" class="flex items-center gap-3 px-3 py-2 text-sm text-amber-400 hover:bg-slate-800/50 hover:text-amber-300 transition-colors rounded-l-md border-r border-slate-700 hover:border-amber-400/60"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg> Chat</a></li>
                        <li><a href="pages/services.html" class="flex items-center gap-3 px-3 py-2 text-sm text-amber-400 border-r border-slate-700 hover:bg-slate-800/50 hover:text-amber-300 hover:border-amber-400/60 transition-colors rounded-l-md"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg> Services</a></li>
                        <li><a href="pages/recruitment.html" class="flex items-center gap-3 px-3 py-2 text-sm text-amber-400 border-r border-slate-700 hover:bg-slate-800/50 hover:text-amber-300 hover:border-amber-400/60 transition-colors rounded-l-md"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg> Recruitment</a></li>
                    </ul>
                </div>

                <!-- System Section -->
                <div>
                    <h3 class="text-xs font-medium text-slate-500 uppercase tracking-wider mb-2 px-3">System</h3>
                    <ul class="space-y-1">
                        <li><a href="{{ route('admin.settings') }}" class="flex items-center gap-3 px-3 py-2 text-sm text-amber-400 hover:bg-slate-800/50 hover:text-amber-300 transition-colors rounded-l-md border-r border-slate-700 hover:border-amber-400/60"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996 .608 2.296 .07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg> Settings</a></li>
                    </ul>
                </div>
            </nav>

            <!-- Footer - Back to Main Site -->
            <div class="mt-auto border-t border-slate-700 p-4">
                <a href="{{ route('home') }}" class="flex items-center gap-3 px-3 py-2 text-sm text-amber-400 hover:bg-slate-800/50 hover:text-amber-300 transition-colors rounded-l-md border-r border-slate-700 hover:border-amber-400/60">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                    Back to Main Site
                </a>
            </div>
        </aside>

        <!-- Main Content Area -->
        <div class="flex-1 flex flex-col relative">
            <x-layouts.admin.header />
            
            <!-- Main Content -->
            <main class="flex-1 p-6 overflow-auto">

            {{ $slot }}

            </main>

        </div>
    </div>
            
 

     @livewireScripts
     @fluxScripts
  
  </body>

</html>