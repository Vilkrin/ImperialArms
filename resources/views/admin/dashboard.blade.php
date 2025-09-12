<x-layouts.admin :title="__('Dashboard')">

            <main class="flex-1 p-6 overflow-auto">
                <div class="space-y-8">
                    <!-- Analytics & Stats Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div class="card glow-effect">
                            <div class="flex flex-col space-y-1.5 p-6">
                                <div class="flex flex-row items-center justify-between space-y-0 pb-2">
                                    <h3 class="text-sm font-medium text-muted-foreground">
                                        Total Visitors
                                    </h3>
                                    <svg class="h-4 w-4 text-muted-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                                    </svg>
                                </div>
                                <div class="p-6 pt-0">
                                    <div class="text-2xl font-bold text-foreground">12,345</div>
                                    <div class="flex items-center text-xs">
                                        <svg class="h-3 w-3 text-green-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17l9.2-9.2M17 17V7H7"></path>
                                        </svg>
                                        <span class="text-green-500">+12.5%</span>
                                        <span class="text-muted-foreground ml-1">from last month</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card glow-effect">
                            <div class="flex flex-col space-y-1.5 p-6">
                                <div class="flex flex-row items-center justify-between space-y-0 pb-2">
                                    <h3 class="text-sm font-medium text-muted-foreground">
                                        Page Views
                                    </h3>
                                    <svg class="h-4 w-4 text-muted-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                </div>
                                <div class="p-6 pt-0">
                                    <div class="text-2xl font-bold text-foreground">45,678</div>
                                    <div class="flex items-center text-xs">
                                        <svg class="h-3 w-3 text-green-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17l9.2-9.2M17 17V7H7"></path>
                                        </svg>
                                        <span class="text-green-500">+8.2%</span>
                                        <span class="text-muted-foreground ml-1">from last month</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card glow-effect">
                            <div class="flex flex-col space-y-1.5 p-6">
                                <div class="flex flex-row items-center justify-between space-y-0 pb-2">
                                    <h3 class="text-sm font-medium text-muted-foreground">
                                        Avg. Session
                                    </h3>
                                    <svg class="h-4 w-4 text-muted-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div class="p-6 pt-0">
                                    <div class="text-2xl font-bold text-foreground">3m 42s</div>
                                    <div class="flex items-center text-xs">
                                        <svg class="h-3 w-3 text-red-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 7l-9.2 9.2M7 7v10h10"></path>
                                        </svg>
                                        <span class="text-red-500">-2.1%</span>
                                        <span class="text-muted-foreground ml-1">from last month</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card glow-effect">
                            <div class="flex flex-col space-y-1.5 p-6">
                                <div class="flex flex-row items-center justify-between space-y-0 pb-2">
                                    <h3 class="text-sm font-medium text-muted-foreground">
                                        Bounce Rate
                                    </h3>
                                    <svg class="h-4 w-4 text-muted-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                    </svg>
                                </div>
                                <div class="p-6 pt-0">
                                    <div class="text-2xl font-bold text-foreground">24.8%</div>
                                    <div class="flex items-center text-xs">
                                        <svg class="h-3 w-3 text-green-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17l9.2-9.2M17 17V7H7"></path>
                                        </svg>
                                        <span class="text-green-500">-5.3%</span>
                                        <span class="text-muted-foreground ml-1">from last month</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                     <!-- Content Overview & Recent Activity -->
                     <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                         <div class="card glow-effect">
                             <div class="flex flex-col space-y-1.5 p-6">
                                 <h3 class="text-sm font-medium text-muted-foreground flex items-center gap-2">
                                     <svg class="h-4 w-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                     </svg>
                                     Content Status
                                 </h3>
                                 <div class="p-6 pt-0 space-y-3">
                                     <div class="flex justify-between">
                                         <span class="text-sm text-muted-foreground">Published</span>
                                         <span class="text-sm font-medium text-foreground">89</span>
                                     </div>
                                     <div class="flex justify-between">
                                         <span class="text-sm text-muted-foreground">Drafts</span>
                                         <span class="text-sm font-medium text-foreground">23</span>
                                     </div>
                                     <div class="flex justify-between">
                                         <span class="text-sm text-muted-foreground">Scheduled</span>
                                         <span class="text-sm font-medium text-foreground">15</span>
                                     </div>
                                 </div>
                             </div>
                         </div>

                         <div class="card glow-effect">
                             <div class="flex flex-col space-y-1.5 p-6">
                                 <h3 class="text-sm font-medium text-muted-foreground flex items-center gap-2">
                                     <svg class="h-4 w-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                                     </svg>
                                     User Activity
                                 </h3>
                                 <div class="p-6 pt-0 space-y-3">
                                     <div class="flex justify-between">
                                         <span class="text-sm text-muted-foreground">Online Now</span>
                                         <span class="text-sm font-medium text-foreground">34</span>
                                     </div>
                                     <div class="flex justify-between">
                                         <span class="text-sm text-muted-foreground">Today</span>
                                         <span class="text-sm font-medium text-foreground">156</span>
                                     </div>
                                     <div class="flex justify-between">
                                         <span class="text-sm text-muted-foreground">This Week</span>
                                         <span class="text-sm font-medium text-foreground">892</span>
                                     </div>
                                 </div>
                             </div>
                         </div>

                         <div class="card glow-effect">
                             <div class="flex flex-col space-y-1.5 p-6">
                                 <h3 class="text-sm font-medium text-muted-foreground">
                                     Upcoming Events
                                 </h3>
                                 <div class="p-6 pt-0 space-y-3">
                                     <div class="flex justify-between">
                                         <span class="text-sm text-muted-foreground">Fleet Operations</span>
                                         <span class="text-sm font-medium text-foreground">Today 20:00</span>
                                     </div>
                                     <div class="flex justify-between">
                                         <span class="text-sm text-muted-foreground">Training Session</span>
                                         <span class="text-sm font-medium text-foreground">Tomorrow</span>
                                     </div>
                                     <div class="flex justify-between">
                                         <span class="text-sm text-muted-foreground">Weekly Brief</span>
                                         <span class="text-sm font-medium text-foreground">Friday</span>
                                     </div>
                                 </div>
                             </div>
                         </div>

                         <div class="card glow-effect">
                             <div class="flex flex-col space-y-1.5 p-6">
                                 <h3 class="text-2xl font-semibold leading-none tracking-tight text-foreground">Recent Activity</h3>
                                 <div class="p-6 pt-0">
                                     <div class="space-y-4">
                                         <div class="flex items-center justify-between">
                                             <div class="flex items-center space-x-3">
                                                 <span class="badge">/fleet</span>
                                                 <span class="text-sm text-muted-foreground">1234 views</span>
                                             </div>
                                             <span class="text-xs text-muted-foreground">2 hours ago</span>
                                         </div>
                                         <div class="flex items-center justify-between">
                                             <div class="flex items-center space-x-3">
                                                 <span class="badge">/recruitment</span>
                                                 <span class="text-sm text-muted-foreground">987 views</span>
                                             </div>
                                             <span class="text-xs text-muted-foreground">4 hours ago</span>
                                         </div>
                                         <div class="flex items-center justify-between">
                                             <div class="flex items-center space-x-3">
                                                 <span class="badge">/about</span>
                                                 <span class="text-sm text-muted-foreground">654 views</span>
                                             </div>
                                             <span class="text-xs text-muted-foreground">6 hours ago</span>
                                         </div>
                                         <div class="flex items-center justify-between">
                                             <div class="flex items-center space-x-3">
                                                 <span class="badge">/missions</span>
                                                 <span class="text-sm text-muted-foreground">432 views</span>
                                             </div>
                                             <span class="text-xs text-muted-foreground">8 hours ago</span>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>

                     <!-- Main Content Grid -->
                     <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                         <!-- Calendar -->
                         <div class="card glow-effect">
                             <div class="flex flex-col space-y-1.5 p-6">
                                 <h3 class="text-2xl font-semibold leading-none tracking-tight text-foreground flex items-center gap-2">
                                     <svg class="h-5 w-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                     </svg>
                                     Calendar
                                 </h3>
                                 <p class="text-sm text-muted-foreground">Schedule and upcoming events</p>
                                 <div class="p-6 pt-0">
                                     <div class="w-full max-w-none">
                                         <div class="calendar">
                                             <div class="calendar-header">
                                                 <div class="calendar-header-cell">Sun</div>
                                                 <div class="calendar-header-cell">Mon</div>
                                                 <div class="calendar-header-cell">Tue</div>
                                                 <div class="calendar-header-cell">Wed</div>
                                                 <div class="calendar-header-cell">Thu</div>
                                                 <div class="calendar-header-cell">Fri</div>
                                                 <div class="calendar-header-cell">Sat</div>
                                             </div>
                                             <div class="calendar-body" id="calendar-body">
                                                 <!-- Calendar cells will be populated by JavaScript -->
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>

                         <!-- Media Library -->
                         <div class="card glow-effect flex flex-col">
                             <div class="flex flex-col space-y-1.5 p-6">
                                 <div class="flex items-center justify-between">
                                     <h3 class="text-2xl font-semibold leading-none tracking-tight text-foreground flex items-center gap-2">
                                         <svg class="h-5 w-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                         </svg>
                                         Media Library
                                     </h3>
                                     <button class="flex items-center gap-1 px-3 py-1 bg-primary text-primary-foreground rounded-md text-sm hover:bg-primary/90 transition-colors">
                                         <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                         </svg>
                                         Upload
                                     </button>
                                 </div>
                                 <p class="text-sm text-muted-foreground">Recent media uploads and files</p>
                                 <div class="p-6 pt-0 flex-1 flex flex-col justify-between space-y-4">
                                     <div class="grid grid-cols-3 gap-3">
                                         <div class="aspect-square bg-accent/20 rounded-lg border border-border/50 flex items-center justify-center">
                                             <svg class="h-6 w-6 text-muted-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                             </svg>
                                         </div>
                                         <div class="aspect-square bg-accent/20 rounded-lg border border-border/50 flex items-center justify-center">
                                             <svg class="h-6 w-6 text-muted-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                             </svg>
                                         </div>
                                         <div class="aspect-square bg-accent/20 rounded-lg border border-border/50 flex items-center justify-center">
                                             <svg class="h-6 w-6 text-muted-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                             </svg>
                                         </div>
                                         <div class="aspect-square bg-accent/20 rounded-lg border border-border/50 flex items-center justify-center">
                                             <svg class="h-6 w-6 text-muted-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                             </svg>
                                         </div>
                                         <div class="aspect-square bg-accent/20 rounded-lg border border-border/50 flex items-center justify-center">
                                             <svg class="h-6 w-6 text-muted-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                             </svg>
                                         </div>
                                         <div class="aspect-square bg-accent/20 rounded-lg border border-border/50 flex items-center justify-center">
                                             <svg class="h-6 w-6 text-muted-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                             </svg>
                                         </div>
                                     </div>
                                     <div class="space-y-3">
                                         <div class="space-y-2">
                                             <div class="flex justify-between text-sm">
                                                 <span class="text-foreground">Storage Used</span>
                                                 <span class="text-foreground">12.4 GB / 50 GB</span>
                                             </div>
                                             <div class="progress">
                                                 <div class="progress-bar" style="width: 25%"></div>
                                             </div>
                                         </div>
                                         <div class="text-center">
                                             <button class="text-sm text-primary hover:underline">
                                                 View All Media →
                                             </button>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>

                     <!-- Content Management Actions -->
                     <div class="card glow-effect">
                         <div class="flex flex-col space-y-1.5 p-6">
                             <h3 class="text-2xl font-semibold leading-none tracking-tight text-foreground flex items-center gap-2">
                                 <svg class="h-5 w-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                 </svg>
                                 Quick Actions
                             </h3>
                             <p class="text-sm text-muted-foreground">Frequently used content management tools</p>
                             <div class="p-6 pt-0">
                                 <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                     <button class="p-4 border border-border/50 rounded-lg hover:bg-accent/50 transition-colors text-center">
                                         <svg class="h-6 w-6 mx-auto mb-2 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                         </svg>
                                         <p class="text-sm font-medium text-foreground">All Posts</p>
                                     </button>
                                     <button class="p-4 border border-border/50 rounded-lg hover:bg-accent/50 transition-colors text-center">
                                         <svg class="h-6 w-6 mx-auto mb-2 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                         </svg>
                                         <p class="text-sm font-medium text-foreground">Media Library</p>
                                     </button>
                                     <button class="p-4 border border-border/50 rounded-lg hover:bg-accent/50 transition-colors text-center">
                                         <svg class="h-6 w-6 mx-auto mb-2 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                                         </svg>
                                         <p class="text-sm font-medium text-foreground">User Management</p>
                                     </button>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </main>

</x-layouts.admin>