<x-layouts.main :title="__('Home')">

        <!-- Recruitment Section -->
        <section id="recruitment" class="py-20 bg-slate-800/20">
            <div class="container mx-auto px-4">
                <div class="text-center mb-16">
                    <h2 class="font-orbitron text-4xl md:text-5xl font-bold mb-6">
                        <span class="bg-gradient-to-br from-amber-400 to-amber-500 bg-clip-text text-transparent">JOIN</span>
                        <span class="text-slate-100"> IMPERIAL ARMS</span>
                    </h2>
                    <div class="w-24 h-1 bg-amber-400 mx-auto mb-6"></div>
                    <p class="text-xl text-slate-400 max-w-3xl mx-auto font-exo">
                        Become part of the most professional and disciplined organization in the 'verse. 
                        Apply today and secure your place among the stars.
                    </p>
                </div>

                <!-- Available Roles -->
                <div class="mb-16">
                    <h3 class="font-orbitron text-3xl font-bold text-center mb-12 bg-gradient-to-br from-amber-400 to-amber-500 bg-clip-text text-transparent">
                        OPEN POSITIONS
                    </h3>
                    <div class="grid md:grid-cols-2 gap-6">
                        <!-- Combat Pilot -->
                        <div class="bg-slate-900/50 border border-slate-700 rounded-lg p-6 backdrop-blur group">
                            <div class="flex items-center space-x-4 mb-4">
                                <svg class="h-10 w-10 text-red-500 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.18-2.42l2.84-2.84A9.969 9.969 0 0119 12c0 1.933-.55 3.74-1.5 5.26l-2.84-2.84M9 12a3 3 0 113-3m-3 3a3 3 0 01-3-3"></path>
                                </svg>
                                <div>
                                    <h4 class="font-orbitron text-xl font-bold">Combat Pilot</h4>
                                    <p class="font-exo text-slate-400">Fighter and escort operations, fleet defense, and tactical combat missions.</p>
                                </div>
                            </div>
                            <div>
                                <span class="text-slate-400 text-sm font-medium">Requirements:</span>
                                <ul class="mt-2 space-y-1">
                                    <li class="flex items-center space-x-2 text-sm">
                                        <svg class="h-3 w-3 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span class="text-slate-300">Combat flight experience</span>
                                    </li>
                                    <li class="flex items-center space-x-2 text-sm">
                                        <svg class="h-3 w-3 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span class="text-slate-300">Fighter or heavy fighter ownership</span>
                                    </li>
                                    <li class="flex items-center space-x-2 text-sm">
                                        <svg class="h-3 w-3 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span class="text-slate-300">Tactical communication skills</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Logistics Coordinator -->
                        <div class="bg-slate-900/50 border border-slate-700 rounded-lg p-6 backdrop-blur group">
                            <div class="flex items-center space-x-4 mb-4">
                                <svg class="h-10 w-10 text-amber-400 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                </svg>
                                <div>
                                    <h4 class="font-orbitron text-xl font-bold">Logistics Coordinator</h4>
                                    <p class="font-exo text-slate-400">Cargo operations, supply chain management, and freight coordination.</p>
                                </div>
                            </div>
                            <div>
                                <span class="text-slate-400 text-sm font-medium">Requirements:</span>
                                <ul class="mt-2 space-y-1">
                                    <li class="flex items-center space-x-2 text-sm">
                                        <svg class="h-3 w-3 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span class="text-slate-300">Cargo ship ownership</span>
                                    </li>
                                    <li class="flex items-center space-x-2 text-sm">
                                        <svg class="h-3 w-3 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span class="text-slate-300">Trading experience</span>
                                    </li>
                                    <li class="flex items-center space-x-2 text-sm">
                                        <svg class="h-3 w-3 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span class="text-slate-300">Logistics planning</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Security Specialist -->
                        <div class="bg-slate-900/50 border border-slate-700 rounded-lg p-6 backdrop-blur group">
                            <div class="flex items-center space-x-4 mb-4">
                                <svg class="h-10 w-10 text-amber-400 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                                <div>
                                    <h4 class="font-orbitron text-xl font-bold">Security Specialist</h4>
                                    <p class="font-exo text-slate-400">Ground operations, boarding actions, and facility security.</p>
                                </div>
                            </div>
                            <div>
                                <span class="text-slate-400 text-sm font-medium">Requirements:</span>
                                <ul class="mt-2 space-y-1">
                                    <li class="flex items-center space-x-2 text-sm">
                                        <svg class="h-3 w-3 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span class="text-slate-300">FPS combat experience</span>
                                    </li>
                                    <li class="flex items-center space-x-2 text-sm">
                                        <svg class="h-3 w-3 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span class="text-slate-300">Team coordination</span>
                                    </li>
                                    <li class="flex items-center space-x-2 text-sm">
                                        <svg class="h-3 w-3 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span class="text-slate-300">Security protocols</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Fleet Operations -->
                        <div class="bg-slate-900/50 border border-slate-700 rounded-lg p-6 backdrop-blur group">
                            <div class="flex items-center space-x-4 mb-4">
                                <svg class="h-10 w-10 text-yellow-400 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                                <div>
                                    <h4 class="font-orbitron text-xl font-bold">Fleet Operations</h4>
                                    <p class="font-exo text-slate-400">Mission planning, fleet coordination, and operational support.</p>
                                </div>
                            </div>
                            <div>
                                <span class="text-slate-400 text-sm font-medium">Requirements:</span>
                                <ul class="mt-2 space-y-1">
                                    <li class="flex items-center space-x-2 text-sm">
                                        <svg class="h-3 w-3 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span class="text-slate-300">Leadership experience</span>
                                    </li>
                                    <li class="flex items-center space-x-2 text-sm">
                                        <svg class="h-3 w-3 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span class="text-slate-300">Strategic planning</span>
                                    </li>
                                    <li class="flex items-center space-x-2 text-sm">
                                        <svg class="h-3 w-3 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span class="text-slate-300">Multi-crew operations</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Benefits & Application -->
                <div class="grid lg:grid-cols-2 gap-12">
                    <!-- Benefits -->
                    <div>
                        <h3 class="font-orbitron text-2xl font-bold mb-8 bg-gradient-to-br from-amber-400 to-amber-500 bg-clip-text text-transparent">
                            MEMBER BENEFITS
                        </h3>
                        <div class="space-y-4">
                            <div class="flex items-center space-x-3">
                                <svg class="h-5 w-5 text-amber-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="text-slate-300 font-exo">Professional military-style organization</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <svg class="h-5 w-5 text-amber-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="text-slate-300 font-exo">Regular group operations and events</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <svg class="h-5 w-5 text-amber-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="text-slate-300 font-exo">Experienced leadership and training programs</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <svg class="h-5 w-5 text-amber-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="text-slate-300 font-exo">Access to group fleet and resources</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <svg class="h-5 w-5 text-amber-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="text-slate-300 font-exo">Competitive profit sharing on operations</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <svg class="h-5 w-5 text-amber-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="text-slate-300 font-exo">Active Discord community and support</span>
                            </div>
                        </div>

                        <div class="mt-8 bg-slate-900/50 border border-slate-700 rounded-lg p-6 backdrop-blur">
                            <h4 class="font-orbitron text-lg font-bold mb-4 text-amber-400">
                                Ready to Join?
                            </h4>
                            <p class="text-slate-400 font-exo mb-4">
                                Connect with us on Discord for immediate recruitment processing and to speak with our team.
                            </p>
                            <button class="inline-flex items-center justify-center rounded-md bg-gradient-to-br from-amber-400 to-amber-500 text-slate-900 px-4 py-2 font-orbitron font-medium transition hover:-translate-y-0.5 shadow-[0_0_20px_rgba(251,191,36,0.3)] group">
                                <svg class="mr-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                </svg>
                                JOIN DISCORD
                                <svg class="ml-2 h-4 w-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Application Form -->
                    <div class="bg-slate-900/50 border-2 border-amber-400/50 rounded-lg p-6 backdrop-blur">
                        <h3 class="font-orbitron text-2xl font-bold mb-6 bg-gradient-to-br from-amber-400 to-amber-500 bg-clip-text text-transparent">
                            APPLICATION FORM
                        </h3>
                        <form id="application-form" class="space-y-6">
                            <div class="grid md:grid-cols-2 gap-4">
                                <div>
                                    <label for="name" class="text-slate-100 font-exo block text-sm font-medium mb-2">Full Name</label>
                                    <input
                                        id="name"
                                        name="name"
                                        type="text"
                                        required
                                        class="w-full p-2 rounded bg-slate-900 border border-slate-700 focus:border-amber-400 text-slate-100"
                                    />
                                </div>
                                <div>
                                    <label for="handle" class="text-slate-100 font-exo block text-sm font-medium mb-2">Star Citizen Handle</label>
                                    <input
                                        id="handle"
                                        name="handle"
                                        type="text"
                                        required
                                        class="w-full p-2 rounded bg-slate-900 border border-slate-700 focus:border-amber-400 text-slate-100"
                                    />
                                </div>
                            </div>

                            <div>
                                <label for="email" class="text-slate-100 font-exo block text-sm font-medium mb-2">Email Address</label>
                                <input
                                    id="email"
                                    name="email"
                                    type="email"
                                    required
                                    class="w-full p-2 rounded bg-slate-900 border border-slate-700 focus:border-amber-400 text-slate-100"
                                />
                            </div>

                            <div>
                                <label for="role" class="text-slate-100 font-exo block text-sm font-medium mb-2">Preferred Role</label>
                                <select
                                    id="role"
                                    name="role"
                                    required
                                    class="w-full p-2 rounded bg-slate-900 border border-slate-700 focus:border-amber-400 text-slate-100"
                                >
                                    <option value="">Select a role...</option>
                                    <option value="Combat Pilot">Combat Pilot</option>
                                    <option value="Logistics Coordinator">Logistics Coordinator</option>
                                    <option value="Security Specialist">Security Specialist</option>
                                    <option value="Fleet Operations">Fleet Operations</option>
                                </select>
                            </div>

                            <div>
                                <label for="experience" class="text-slate-100 font-exo block text-sm font-medium mb-2">Star Citizen Experience</label>
                                <input
                                    id="experience"
                                    name="experience"
                                    type="text"
                                    placeholder="e.g., 2 years, Alpha backer, etc."
                                    class="w-full p-2 rounded bg-slate-900 border border-slate-700 focus:border-amber-400 text-slate-100"
                                />
                            </div>

                            <div>
                                <label for="message" class="text-slate-100 font-exo block text-sm font-medium mb-2">Additional Information</label>
                                <textarea
                                    id="message"
                                    name="message"
                                    placeholder="Tell us about your ships, experience, timezone, etc."
                                    class="w-full p-2 rounded bg-slate-900 border border-slate-700 focus:border-amber-400 text-slate-100 min-h-[100px] resize-none"
                                ></textarea>
                            </div>

                            <button type="submit" class="inline-flex items-center justify-center rounded-md bg-gradient-to-br from-amber-400 to-amber-500 text-slate-900 px-4 py-2 font-orbitron font-medium transition hover:-translate-y-0.5 shadow-[0_0_20px_rgba(251,191,36,0.3)] w-full">
                                <svg class="mr-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                                </svg>
                                SUBMIT APPLICATION
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

</x-layouts.main>