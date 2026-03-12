<x-layouts.main :title="__('Members Area')">

        <!-- Header -->
        <section class="py-16 bg-gradient-to-r from-amber-500/10 to-teal-500/10">
            <div class="container mx-auto px-4">
                <div class="text-center">
                    <div class="flex items-center justify-center mb-4">
                        <i data-lucide="shield" class="h-12 w-12 text-amber-400 mr-4"></i>
                        <h1 class="text-4xl md:text-5xl font-orbitron font-bold text-gradient">
                            MEMBERS AREA
                        </h1>
                    </div>
                    <p class="text-xl text-gray-400 max-w-2xl mx-auto">
                        Exclusive access for Imperial Arms organization members
                    </p>
                    <div class="inline-flex items-center px-3 py-1 bg-teal-500/20 text-teal-300 rounded-full text-sm mt-4">
                        <i data-lucide="users" class="h-4 w-4 mr-2"></i>
                        Classified Access
                    </div>
                </div>
            </div>
        </section>

        <!-- Members Content -->
        <section class="py-16">
            <div class="container mx-auto px-4">
                <div class="w-full">
                    <!-- Tab Navigation -->
                    <div class="grid w-full grid-cols-4 mb-8 bg-gray-800/50 rounded-lg p-1">
                        <button class="tab-button px-4 py-2 rounded-md font-medium transition-colors text-white hover:bg-gray-700 data-[state=active]:bg-gray-700 data-[state=active]:text-white" onclick="showTab('dashboard')" data-state="active">Dashboard</button>
                        <button class="tab-button px-4 py-2 rounded-md font-medium transition-colors text-gray-400 hover:bg-gray-700 hover:text-white" onclick="showTab('operations')">Operations</button>
                        <button class="tab-button px-4 py-2 rounded-md font-medium transition-colors text-gray-400 hover:bg-gray-700 hover:text-white" onclick="showTab('communications')">Comms</button>
                        <button class="tab-button px-4 py-2 rounded-md font-medium transition-colors text-gray-400 hover:bg-gray-700 hover:text-white" onclick="showTab('resources')">Resources</button>
                    </div>

                    <!-- Dashboard Tab -->
                    <div id="dashboard" class="tab-content mt-8">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            <div class="bg-gray-800/50 border border-gray-700 rounded-lg p-6 backdrop-blur-sm">
                                <div class="mb-4">
                                    <div class="flex items-center mb-2">
                                        <i data-lucide="calendar" class="h-5 w-5 text-amber-400 mr-2"></i>
                                        <h3 class="text-lg font-semibold text-white">Upcoming Operations</h3>
                                    </div>
                                    <p class="text-sm text-gray-400">Next scheduled missions</p>
                                </div>
                                <div class="space-y-3">
                                    <div class="p-3 bg-teal-500/10 rounded-lg">
                                        <h4 class="font-semibold text-white">Operation Nightfall</h4>
                                        <p class="text-sm text-gray-400">2024-07-30 • 20:00 UTC</p>
                                        <span class="inline-block px-2 py-1 bg-gray-700 text-gray-300 rounded text-xs mt-1 border border-gray-600">Stealth Mission</span>
                                    </div>
                                    <div class="p-3 bg-teal-500/10 rounded-lg">
                                        <h4 class="font-semibold text-white">Fleet Exercise Alpha</h4>
                                        <p class="text-sm text-gray-400">2024-08-02 • 18:00 UTC</p>
                                        <span class="inline-block px-2 py-1 bg-gray-700 text-gray-300 rounded text-xs mt-1 border border-gray-600">Training</span>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gray-800/50 border border-gray-700 rounded-lg p-6 backdrop-blur-sm">
                                <div class="mb-4">
                                    <div class="flex items-center mb-2">
                                        <i data-lucide="users" class="h-5 w-5 text-amber-400 mr-2"></i>
                                        <h3 class="text-lg font-semibold text-white">Active Members</h3>
                                    </div>
                                    <p class="text-sm text-gray-400">Currently online</p>
                                </div>
                                <div class="space-y-2">
                                    <div class="flex items-center justify-between">
                                        <span class="text-white">Commander Rex</span>
                                        <span class="px-2 py-1 bg-teal-500/20 text-teal-300 rounded text-xs">Online</span>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <span class="text-white">Lt. Nova</span>
                                        <span class="px-2 py-1 bg-teal-500/20 text-teal-300 rounded text-xs">Online</span>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <span class="text-white">Sgt. Phoenix</span>
                                        <span class="px-2 py-1 bg-gray-700 text-gray-300 rounded text-xs border border-gray-600">Away</span>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gray-800/50 border border-gray-700 rounded-lg p-6 backdrop-blur-sm">
                                <div class="mb-4">
                                    <div class="flex items-center mb-2">
                                        <i data-lucide="award" class="h-5 w-5 text-amber-400 mr-2"></i>
                                        <h3 class="text-lg font-semibold text-white">Recent Achievements</h3>
                                    </div>
                                    <p class="text-sm text-gray-400">Latest accomplishments</p>
                                </div>
                                <div class="space-y-2">
                                    <div class="p-2 bg-teal-500/10 rounded">
                                        <p class="text-sm font-medium text-white">Mission Success: Titan Station</p>
                                        <p class="text-xs text-gray-400">Completed by Alpha Squad</p>
                                    </div>
                                    <div class="p-2 bg-teal-500/10 rounded">
                                        <p class="text-sm font-medium text-white">New Recruit: Pilot Echo</p>
                                        <p class="text-xs text-gray-400">Joined the organization</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Operations Tab -->
                    <div id="operations" class="tab-content mt-8 hidden">
                        <div class="bg-gray-800/50 border border-gray-700 rounded-lg p-6 backdrop-blur-sm">
                            <div class="mb-6">
                                <h3 class="text-lg font-semibold text-white mb-2">Classified Operations</h3>
                                <p class="text-sm text-gray-400">Strategic missions and objectives</p>
                            </div>
                            <div class="space-y-4">
                                <div class="border border-gray-700 rounded-lg p-4">
                                    <div class="flex items-center justify-between mb-2">
                                        <h3 class="font-semibold text-white">Operation Ghost Protocol</h3>
                                        <span class="px-2 py-1 bg-red-500/20 text-red-300 rounded text-xs">Top Secret</span>
                                    </div>
                                    <p class="text-sm text-gray-400 mb-3">
                                        Deep space reconnaissance mission in the Vega system
                                    </p>
                                    <button class="h-9 px-4 py-2 bg-amber-500 hover:bg-amber-400 text-black font-medium rounded-md transition-colors text-sm">View Details</button>
                                </div>
                                
                                <div class="border border-gray-700 rounded-lg p-4">
                                    <div class="flex items-center justify-between mb-2">
                                        <h3 class="font-semibold text-white">Supply Run Delta</h3>
                                        <span class="px-2 py-1 bg-gray-700 text-gray-300 rounded text-xs border border-gray-600">Active</span>
                                    </div>
                                    <p class="text-sm text-gray-400 mb-3">
                                        Transport medical supplies to frontier outpost
                                    </p>
                                    <button class="h-9 px-4 py-2 bg-amber-500 hover:bg-amber-400 text-black font-medium rounded-md transition-colors text-sm">View Details</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Communications Tab -->
                    <div id="communications" class="tab-content mt-8 hidden">
                        <div class="bg-gray-800/50 border border-gray-700 rounded-lg p-6 backdrop-blur-sm">
                            <div class="mb-6">
                                <div class="flex items-center mb-2">
                                    <i data-lucide="message-square" class="h-5 w-5 text-amber-400 mr-2"></i>
                                    <h3 class="text-lg font-semibold text-white">Secure Communications</h3>
                                </div>
                                <p class="text-sm text-gray-400">Internal organization channels</p>
                            </div>
                            <div class="space-y-4">
                                <div class="border border-gray-700 rounded-lg p-4">
                                    <h3 class="font-semibold mb-2 text-white">#command-center</h3>
                                    <p class="text-sm text-gray-400 mb-3">
                                        Leadership discussions and strategic planning
                                    </p>
                                    <button class="h-9 px-4 py-2 bg-amber-500 hover:bg-amber-400 text-black font-medium rounded-md transition-colors text-sm">Join Channel</button>
                                </div>
                                
                                <div class="border border-gray-700 rounded-lg p-4">
                                    <h3 class="font-semibold mb-2 text-white">#mission-briefings</h3>
                                    <p class="text-sm text-gray-400 mb-3">
                                        Pre-mission planning and debriefings
                                    </p>
                                    <button class="h-9 px-4 py-2 bg-amber-500 hover:bg-amber-400 text-black font-medium rounded-md transition-colors text-sm">Join Channel</button>
                                </div>
                                
                                <div class="border border-gray-700 rounded-lg p-4">
                                    <h3 class="font-semibold mb-2 text-white">#general</h3>
                                    <p class="text-sm text-gray-400 mb-3">
                                        General discussion and coordination
                                    </p>
                                    <button class="h-9 px-4 py-2 bg-amber-500 hover:bg-amber-400 text-black font-medium rounded-md transition-colors text-sm">Join Channel</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Resources Tab -->
                    <div id="resources" class="tab-content mt-8 hidden">
                        <div class="bg-gray-800/50 border border-gray-700 rounded-lg p-6 backdrop-blur-sm">
                            <div class="mb-6">
                                <div class="flex items-center mb-2">
                                    <i data-lucide="file-text" class="h-5 w-5 text-amber-400 mr-2"></i>
                                    <h3 class="text-lg font-semibold text-white">Member Resources</h3>
                                </div>
                                <p class="text-sm text-gray-400">Documents, guides, and tools</p>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="border border-gray-700 rounded-lg p-4">
                                    <h3 class="font-semibold mb-2 text-white">Operations Manual</h3>
                                    <p class="text-sm text-gray-400 mb-3">
                                        Standard operating procedures and protocols
                                    </p>
                                    <button class="h-9 px-4 py-2 border border-gray-600 bg-transparent hover:bg-gray-700 hover:text-gray-100 text-gray-300 font-medium rounded-md transition-colors text-sm">Download</button>
                                </div>
                                
                                <div class="border border-gray-700 rounded-lg p-4">
                                    <h3 class="font-semibold mb-2 text-white">Fleet Handbook</h3>
                                    <p class="text-sm text-gray-400 mb-3">
                                        Ship specifications and maintenance guides
                                    </p>
                                    <button class="h-9 px-4 py-2 border border-gray-600 bg-transparent hover:bg-gray-700 hover:text-gray-100 text-gray-300 font-medium rounded-md transition-colors text-sm">Download</button>
                                </div>
                                
                                <div class="border border-gray-700 rounded-lg p-4">
                                    <h3 class="font-semibold mb-2 text-white">Navigation Charts</h3>
                                    <p class="text-sm text-gray-400 mb-3">
                                        Current star maps and jump point data
                                    </p>
                                    <button class="h-9 px-4 py-2 border border-gray-600 bg-transparent hover:bg-gray-700 hover:text-gray-100 text-gray-300 font-medium rounded-md transition-colors text-sm">Access</button>
                                </div>
                                
                                <div class="border border-gray-700 rounded-lg p-4">
                                    <h3 class="font-semibold mb-2 text-white">Communication Protocols</h3>
                                    <p class="text-sm text-gray-400 mb-3">
                                        Secure channel procedures and encryption keys
                                    </p>
                                    <button class="h-9 px-4 py-2 border border-gray-600 bg-transparent hover:bg-gray-700 hover:text-gray-100 text-gray-300 font-medium rounded-md transition-colors text-sm">View</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <script>
        // Initialize Lucide icons
        lucide.createIcons();
        
        // Mobile menu toggle
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });
        
        // Tab functionality
        function showTab(tabName) {
            // Hide all tab contents
            document.querySelectorAll('.tab-content').forEach(content => {
                content.classList.add('hidden');
            });
            
            // Remove active state from all buttons
            document.querySelectorAll('.tab-button').forEach(button => {
                button.setAttribute('data-state', '');
                button.classList.remove('bg-gray-700', 'text-white');
                button.classList.add('text-gray-400');
            });
            
            // Show selected tab content
            document.getElementById(tabName).classList.remove('hidden');
            
            // Add active state to clicked button
            event.target.setAttribute('data-state', 'active');
            event.target.classList.add('bg-gray-700', 'text-white');
            event.target.classList.remove('text-gray-400');
        }
    </script>

</x-layouts.main>

