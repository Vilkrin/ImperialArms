<x-layouts.main :title="__('Home')">

        <section class="py-20">
            <div class="container mx-auto px-4">
                <div class="text-center mb-16">
                    <h1 class="font-orbitron text-4xl md:text-5xl font-bold mb-6">
                        <span class="bg-gradient-to-br from-amber-400 to-amber-500 bg-clip-text text-transparent">Freight Transport</span>
                        <span class="text-slate-100"> Services</span>
                    </h1>
                    <div class="w-24 h-1 bg-amber-400 mx-auto mb-6"></div>
                    <p class="text-xl text-slate-400 max-w-3xl mx-auto font-exo">
                        Secure, reliable cargo transport across the galaxy with Imperial Arms fleet. Professional freight services with military-grade security protocols.
                    </p>
                </div>

                <!-- Service Features -->
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
                    <!-- Secure Transport -->
                    <div class="card-imperial text-center hover:shadow-lg transition-shadow">
                        <div class="p-6">
                            <svg class="h-12 w-12 mx-auto text-amber-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                            <h3 class="font-orbitron font-bold mb-2">Secure Transport</h3>
                            <p class="text-slate-400 text-sm font-exo">Military-grade security and escort services</p>
                        </div>
                    </div>

                    <!-- Fast Delivery -->
                    <div class="card-imperial text-center hover:shadow-lg transition-shadow">
                        <div class="p-6">
                            <svg class="h-12 w-12 mx-auto text-amber-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <h3 class="font-orbitron font-bold mb-2">Fast Delivery</h3>
                            <p class="text-slate-400 text-sm font-exo">Express shipping across the galaxy</p>
                        </div>
                    </div>

                    <!-- Heavy Cargo -->
                    <div class="card-imperial text-center hover:shadow-lg transition-shadow">
                        <div class="p-6">
                            <svg class="h-12 w-12 mx-auto text-amber-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                            </svg>
                            <h3 class="font-orbitron font-bold mb-2">Heavy Cargo</h3>
                            <p class="text-slate-400 text-sm font-exo">Specialized ships for large freight</p>
                        </div>
                    </div>

                    <!-- Reliable Service -->
                    <div class="card-imperial text-center hover:shadow-lg transition-shadow">
                        <div class="p-6">
                            <svg class="h-12 w-12 mx-auto text-amber-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                            </svg>
                            <h3 class="font-orbitron font-bold mb-2">Reliable Service</h3>
                            <p class="text-slate-400 text-sm font-exo">99.8% on-time delivery rate</p>
                        </div>
                    </div>
                </div>

                <!-- Transport Request Form -->
                <div class="max-w-4xl mx-auto">
                    <div class="bg-slate-900/50 border border-slate-700 rounded-lg p-6 backdrop-blur shadow-xl">
                        <div class="flex items-center justify-center gap-3 mb-6">
                            <svg class="h-8 w-8 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                            </svg>
                            <h2 class="font-orbitron text-2xl font-bold bg-gradient-to-br from-amber-400 to-amber-500 bg-clip-text text-transparent">Request Freight Transport</h2>
                        </div>
                        <p class="text-slate-400 font-exo text-center mb-8">
                            Fill out the details below and our logistics team will provide you with a competitive quote within 24 hours.
                        </p>
                        
                        <form id="transport-form" class="space-y-6">
                            <div class="grid md:grid-cols-2 gap-6">
                                <!-- Cargo Type -->
                                <div>
                                    <label for="cargoType" class="text-slate-100 font-exo block text-sm font-medium mb-2">Cargo Type</label>
                                    <select id="cargoType" name="cargoType" required class="w-full p-2 rounded bg-slate-900 border border-slate-700 focus:border-amber-400 text-slate-100">
                                        <option value="">Select cargo type</option>
                                        <option value="general">General Cargo</option>
                                        <option value="hazardous">Hazardous Materials</option>
                                        <option value="luxury">Luxury Goods</option>
                                        <option value="military">Military Equipment</option>
                                        <option value="medical">Medical Supplies</option>
                                        <option value="research">Research Materials</option>
                                    </select>
                                </div>

                                <!-- Origin -->
                                <div>
                                    <label for="origin" class="text-slate-100 font-exo block text-sm font-medium mb-2">Origin</label>
                                    <input
                                        id="origin"
                                        name="origin"
                                        type="text"
                                        placeholder="e.g., Area18, ArcCorp"
                                        required
                                        class="w-full p-2 rounded bg-slate-900 border border-slate-700 focus:border-amber-400 text-slate-100"
                                    />
                                </div>

                                <!-- Destination -->
                                <div>
                                    <label for="destination" class="text-slate-100 font-exo block text-sm font-medium mb-2">Destination</label>
                                    <input
                                        id="destination"
                                        name="destination"
                                        type="text"
                                        placeholder="e.g., Lorville, Hurston"
                                        required
                                        class="w-full p-2 rounded bg-slate-900 border border-slate-700 focus:border-amber-400 text-slate-100"
                                    />
                                </div>

                                <!-- Weight -->
                                <div>
                                    <label for="weight" class="text-slate-100 font-exo block text-sm font-medium mb-2">Weight (SCU)</label>
                                    <input
                                        id="weight"
                                        name="weight"
                                        type="number"
                                        placeholder="e.g., 100"
                                        min="1"
                                        required
                                        class="w-full p-2 rounded bg-slate-900 border border-slate-700 focus:border-amber-400 text-slate-100"
                                    />
                                </div>

                                <!-- Volume -->
                                <div>
                                    <label for="volume" class="text-slate-100 font-exo block text-sm font-medium mb-2">Volume (m³)</label>
                                    <input
                                        id="volume"
                                        name="volume"
                                        type="number"
                                        placeholder="e.g., 50"
                                        min="1"
                                        required
                                        class="w-full p-2 rounded bg-slate-900 border border-slate-700 focus:border-amber-400 text-slate-100"
                                    />
                                </div>

                                <!-- Budget -->
                                <div>
                                    <label for="budget" class="text-slate-100 font-exo block text-sm font-medium mb-2">Budget (aUEC)</label>
                                    <input
                                        id="budget"
                                        name="budget"
                                        type="number"
                                        placeholder="e.g., 50000"
                                        min="1000"
                                        required
                                        class="w-full p-2 rounded bg-slate-900 border border-slate-700 focus:border-amber-400 text-slate-100"
                                    />
                                </div>
                            </div>

                            <!-- Description -->
                            <div>
                                <label for="description" class="text-slate-100 font-exo block text-sm font-medium mb-2">Additional Information</label>
                                <textarea
                                    id="description"
                                    name="description"
                                    placeholder="Special handling requirements, deadlines, security needs, etc."
                                    class="w-full p-2 rounded bg-slate-900 border border-slate-700 focus:border-amber-400 text-slate-100 min-h-[100px] resize-none"
                                ></textarea>
                            </div>

                            <div class="flex items-center justify-between">
                                <button type="submit" class="inline-flex items-center rounded-md bg-gradient-to-br from-amber-400 to-amber-500 text-slate-900 px-4 py-2 text-sm font-orbitron font-medium transition hover:-translate-y-0.5 shadow-[0_0_20px_rgba(251,191,36,0.3)]">
                                    SUBMIT REQUEST
                                </button>
                                <a href="contact.html" class="text-amber-400 hover:text-amber-300 font-exo transition-colors">
                                    Need Help? Contact Support →
                                </a>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Service Information -->
                <div class="grid md:grid-cols-3 gap-6 mt-16">
                    <!-- Response Time -->
                    <div class="card-imperial text-center">
                        <div class="p-6">
                            <svg class="h-12 w-12 mx-auto text-amber-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <h3 class="font-orbitron text-xl font-bold mb-2">Response Time</h3>
                            <div class="text-2xl font-orbitron font-bold text-amber-400 mb-2">< 24hrs</div>
                            <p class="text-slate-400 text-sm font-exo">Quote and confirmation within one business day</p>
                        </div>
                    </div>

                    <!-- Insurance Coverage -->
                    <div class="card-imperial text-center">
                        <div class="p-6">
                            <svg class="h-12 w-12 mx-auto text-amber-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                            <h3 class="font-orbitron text-xl font-bold mb-2">Insurance Coverage</h3>
                            <div class="text-2xl font-orbitron font-bold text-amber-400 mb-2">100%</div>
                            <p class="text-slate-400 text-sm font-exo">Full cargo value protection on all shipments</p>
                        </div>
                    </div>

                    <!-- Fleet Rating -->
                    <div class="card-imperial text-center">
                        <div class="p-6">
                            <svg class="h-12 w-12 mx-auto text-amber-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                            </svg>
                            <h3 class="font-orbitron text-xl font-bold mb-2">Fleet Rating</h3>
                            <div class="text-2xl font-orbitron font-bold text-amber-400 mb-2">A+</div>
                            <p class="text-slate-400 text-sm font-exo">Military-grade vessels and experienced pilots</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

</x-layouts.main>