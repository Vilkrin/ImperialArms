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

  <body class="min-h-screen bg-background">
    <div class="min-h-screen flex w-full bg-background">
        <!-- Sidebar -->
        <aside class="sidebar" id="sidebar">
            <!-- Header -->
            <div class="p-4 border-b border-sidebar-border">
                <div class="flex items-center gap-2">
                    <svg class="h-8 w-8 text-sidebar-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                    <div>
                        <h2 class="font-orbitron font-bold text-lg text-sidebar-foreground">Imperial Arms</h2>
                        <p class="text-xs text-sidebar-foreground/70">Admin Panel</p>
                    </div>
                </div>
            </div>

            <!-- Navigation -->
            <nav class="p-4 space-y-6">
                <div>
                    <h3 class="text-sm font-medium text-sidebar-foreground/70 mb-3">Content</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="#" class="flex items-center gap-3 px-3 py-2 rounded-lg bg-sidebar-primary/10 text-sidebar-primary font-medium border-r-2 border-sidebar-primary">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5a2 2 0 012-2h4a2 2 0 012 2v6H8V5z"></path>
                                </svg>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-sidebar-accent/50 text-sidebar-foreground">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                <span>Posts</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-sidebar-accent/50 text-sidebar-foreground">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <span>Media</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-sidebar-accent/50 text-sidebar-foreground">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <span>Pages</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-sm font-medium text-sidebar-foreground/70 mb-3">Management</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="#" class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-sidebar-accent/50 text-sidebar-foreground">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                                </svg>
                                <span>Users</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-sidebar-accent/50 text-sidebar-foreground">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                                <span>Permissions</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-sm font-medium text-sidebar-foreground/70 mb-3">Communication</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="#" class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-sidebar-accent/50 text-sidebar-foreground">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                </svg>
                                <span>Chat</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-sidebar-accent/50 text-sidebar-foreground">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                <span>Mail</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-sm font-medium text-sidebar-foreground/70 mb-3">System</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="#" class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-sidebar-accent/50 text-sidebar-foreground">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <span>Settings</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Footer -->
                <div class="mt-auto border-t border-sidebar-border pt-4">
                    <a href="#" class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-sidebar-accent/50 text-sidebar-foreground">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        <span>Back to Main Site</span>
                    </a>
                </div>
            </nav>
        </aside>

        <div class="flex-1 flex flex-col">
            <!-- Header -->
            <header class="h-16 border-b border-border bg-card/50 backdrop-blur-sm flex items-center justify-between px-6">
                <div class="flex items-center gap-4">
                    <button class="p-2 hover:bg-accent/50 rounded-lg transition-colors" onclick="toggleSidebar()">
                        <svg class="h-5 w-5 text-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                    <div>
                        <h1 class="font-orbitron font-semibold text-lg text-foreground">Dashboard</h1>
                        <p class="text-sm text-muted-foreground">Welcome back to the admin panel</p>
                    </div>
                </div>
                
                <div class="flex items-center gap-4">
                    <!-- Notifications Dropdown -->
                    <div class="relative">
                        <button class="p-2 hover:bg-accent/50 rounded-lg relative transition-colors" onclick="toggleDropdown('notifications')">
                            <svg class="h-5 w-5 text-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-5 5v-5z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                            </svg>
                            <span class="absolute -top-1 -right-1 h-3 w-3 bg-primary rounded-full text-xs"></span>
                        </button>
                        <div class="dropdown-menu" id="notifications">
                            <div class="p-3 border-b border-border">
                                <h3 class="font-semibold text-foreground">Notifications</h3>
                            </div>
                            <div class="dropdown-separator"></div>
                            <div class="dropdown-item">
                                <div class="h-2 w-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                                <div>
                                    <p class="text-sm font-medium text-foreground">New fleet member joined</p>
                                    <p class="text-xs text-muted-foreground">John Smith joined Imperial Arms</p>
                                    <p class="text-xs text-muted-foreground">2 minutes ago</p>
                                </div>
                            </div>
                            <div class="dropdown-item">
                                <div class="h-2 w-2 bg-accent rounded-full mt-2 flex-shrink-0"></div>
                                <div>
                                    <p class="text-sm font-medium text-foreground">Mission report submitted</p>
                                    <p class="text-xs text-muted-foreground">Stanton patrol mission completed</p>
                                    <p class="text-xs text-muted-foreground">1 hour ago</p>
                                </div>
                            </div>
                            <div class="dropdown-item">
                                <div class="h-2 w-2 bg-accent rounded-full mt-2 flex-shrink-0"></div>
                                <div>
                                    <p class="text-sm font-medium text-foreground">Content published</p>
                                    <p class="text-xs text-muted-foreground">Fleet expansion update is now live</p>
                                    <p class="text-xs text-muted-foreground">3 hours ago</p>
                                </div>
                            </div>
                            <div class="dropdown-separator"></div>
                            <div class="dropdown-item text-center text-sm text-primary hover:text-primary/80">
                                View all notifications
                            </div>
                        </div>
                    </div>

                    <!-- User Dropdown -->
                    <div class="relative">
                        <button class="flex items-center gap-2 hover:bg-accent/50 rounded-lg p-2 transition-colors" onclick="toggleDropdown('user')">
                            <div class="h-8 w-8 bg-primary/20 rounded-full flex items-center justify-center">
                                <svg class="h-4 w-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                            </div>
                            <div class="text-sm">
                                <p class="font-medium text-foreground">Admin</p>
                                <p class="text-muted-foreground">System</p>
                            </div>
                        </button>
                        <div class="dropdown-menu" id="user">
                            <div class="p-3 border-b border-border">
                                <h3 class="font-semibold text-foreground">Admin Account</h3>
                            </div>
                            <div class="dropdown-separator"></div>
                            <a href="#" class="dropdown-item">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                Profile Settings
                            </a>
                            <div class="dropdown-item">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                Messages
                            </div>
                            <div class="dropdown-separator"></div>
                            <div class="dropdown-item text-destructive focus:text-destructive">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                </svg>
                                Sign Out
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            
            <!-- Main Content -->
            {{ $slot }}
            
         </div>
     </div>

     <script>
         // Toggle sidebar
         function toggleSidebar() {
             const sidebar = document.getElementById('sidebar');
             sidebar.classList.toggle('collapsed');
         }

         // Toggle dropdowns
         function toggleDropdown(id) {
             const dropdown = document.getElementById(id);
             const allDropdowns = document.querySelectorAll('.dropdown-menu');
             
             // Close all other dropdowns
             allDropdowns.forEach(d => {
                 if (d.id !== id) {
                     d.classList.remove('show');
                 }
             });
             
             // Toggle current dropdown
             dropdown.classList.toggle('show');
         }

         // Close dropdowns when clicking outside
         document.addEventListener('click', function(event) {
             if (!event.target.closest('.relative')) {
                 document.querySelectorAll('.dropdown-menu').forEach(dropdown => {
                     dropdown.classList.remove('show');
                 });
             }
         });

         // Generate calendar
         function generateCalendar() {
             const calendarBody = document.getElementById('calendar-body');
             const today = new Date();
             const currentMonth = today.getMonth();
             const currentYear = today.getFullYear();
             const firstDay = new Date(currentYear, currentMonth, 1);
             const lastDay = new Date(currentYear, currentMonth + 1, 0);
             const startDate = new Date(firstDay);
             startDate.setDate(startDate.getDate() - firstDay.getDay());
             
             let calendarHTML = '';
             
             for (let week = 0; week < 6; week++) {
                 for (let day = 0; day < 7; day++) {
                     const currentDate = new Date(startDate);
                     currentDate.setDate(startDate.getDate() + (week * 7) + day);
                     
                     const isCurrentMonth = currentDate.getMonth() === currentMonth;
                     const isToday = currentDate.toDateString() === today.toDateString();
                     const isSelected = false; // You can implement date selection logic here
                     
                     let cellClass = 'calendar-cell';
                     if (!isCurrentMonth) cellClass += ' other-month';
                     if (isToday) cellClass += ' selected';
                     
                     calendarHTML += `<div class="${cellClass}" data-date="${currentDate.toISOString().split('T')[0]}">${currentDate.getDate()}</div>`;
                 }
             }
             
             calendarBody.innerHTML = calendarHTML;
         }

         // Initialize calendar when page loads
         document.addEventListener('DOMContentLoaded', function() {
             generateCalendar();
         });
     </script>
</body>


</html>