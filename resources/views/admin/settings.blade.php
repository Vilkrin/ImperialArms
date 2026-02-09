<x-layouts.admin :title="__('Settings')">

                  <div class="max-w-4xl space-y-6">
                    <!-- Tab Navigation -->
                    <div class="flex space-x-1 bg-slate-800/50 p-1 rounded-lg w-fit">
                        <button id="seoTab" class="flex items-center gap-2 px-4 py-2 bg-amber-400 text-slate-900 rounded-md font-medium transition-colors">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                            SEO
                        </button>
                        <button id="socialTab" class="flex items-center gap-2 px-4 py-2 text-slate-300 hover:bg-slate-700/50 rounded-md font-medium transition-colors">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/>
                            </svg>
                            Social Media
                        </button>
                        <button id="generalTab" class="flex items-center gap-2 px-4 py-2 text-slate-300 hover:bg-slate-700/50 rounded-md font-medium transition-colors">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            General
                        </button>
                    </div>

                    <!-- SEO Tab Content -->
                    <div id="seoContent" class="space-y-6">
                        <div class="bg-slate-900/50 border border-slate-700 rounded-lg backdrop-blur-sm shadow-sm">
                            <div class="p-6">
                                <h3 class="text-2xl font-semibold text-slate-100 flex items-center gap-2 mb-2">
                                    <svg class="h-5 w-5 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                    </svg>
                                    SEO Settings
                                </h3>
                                <p class="text-sm text-slate-400 mb-6">Configure meta tags and search engine optimization</p>
                                
                                <div class="space-y-4">
                                    <div>
                                        <label class="text-sm font-medium text-slate-300 mb-2 block">Site Title *</label>
                                        <input 
                                            type="text"
                                            value="Imperial Arms - Elite Star Citizen Organization"
                                            class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm placeholder:text-slate-400 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400"
                                        />
                                    </div>
                                    
                                    <div>
                                        <label class="text-sm font-medium text-slate-300 mb-2 block">Meta Description</label>
                                        <textarea 
                                            rows="3"
                                            placeholder="Brief description that appears in search results"
                                            class="flex w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm placeholder:text-slate-400 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400"
                                        >Join Imperial Arms, an elite Star Citizen organization focused on exploration, combat, and trading in the universe.</textarea>
                                    </div>
                                    
                                    <div>
                                        <label class="text-sm font-medium text-slate-300 mb-2 block">Meta Keywords</label>
                                        <textarea 
                                            rows="2"
                                            placeholder="Comma-separated keywords"
                                            class="flex w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm placeholder:text-slate-400 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400"
                                        >Star Citizen, organization, gaming, space simulation, MMO</textarea>
                                    </div>
                                    
                                    <div>
                                        <label class="text-sm font-medium text-slate-300 mb-2 block">Open Graph Image</label>
                                        <input 
                                            type="file"
                                            accept="image/*"
                                            class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm placeholder:text-slate-400 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex justify-end">
                            <button class="inline-flex items-center gap-2 px-4 py-2 bg-amber-400 text-slate-900 rounded-md font-medium hover:bg-amber-300 transition-colors">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"/>
                                </svg>
                                Save SEO Settings
                            </button>
                        </div>
                    </div>

                    <!-- Social Media Tab Content -->
                    <div id="socialContent" class="hidden space-y-6">
                        <div class="bg-slate-900/50 border border-slate-700 rounded-lg backdrop-blur-sm shadow-sm">
                            <div class="p-6">
                                <h3 class="text-2xl font-semibold text-slate-100 flex items-center gap-2 mb-2">
                                    <svg class="h-5 w-5 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/>
                                    </svg>
                                    Social Media Links
                                </h3>
                                <p class="text-sm text-slate-400 mb-6">Configure your social media presence</p>
                                
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label class="text-sm font-medium text-slate-300 mb-2 block">Facebook URL</label>
                                        <input 
                                            type="text"
                                            placeholder="https://facebook.com/yourpage"
                                            class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm placeholder:text-slate-400 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400"
                                        />
                                    </div>
                                    
                                    <div>
                                        <label class="text-sm font-medium text-slate-300 mb-2 block">Twitter/X URL</label>
                                        <input 
                                            type="text"
                                            placeholder="https://twitter.com/yourhandle"
                                            class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm placeholder:text-slate-400 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400"
                                        />
                                    </div>
                                    
                                    <div>
                                        <label class="text-sm font-medium text-slate-300 mb-2 block">Instagram URL</label>
                                        <input 
                                            type="text"
                                            placeholder="https://instagram.com/yourhandle"
                                            class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm placeholder:text-slate-400 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400"
                                        />
                                    </div>
                                    
                                    <div>
                                        <label class="text-sm font-medium text-slate-300 mb-2 block">Discord Server</label>
                                        <input 
                                            type="text"
                                            placeholder="https://discord.gg/yourserver"
                                            class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm placeholder:text-slate-400 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex justify-end">
                            <button class="inline-flex items-center gap-2 px-4 py-2 bg-amber-400 text-slate-900 rounded-md font-medium hover:bg-amber-300 transition-colors">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"/>
                                </svg>
                                Save Social Media Settings
                            </button>
                        </div>
                    </div>

                    <!-- General Tab Content -->
                    <div id="generalContent" class="hidden space-y-6">
                        <div class="bg-slate-900/50 border border-slate-700 rounded-lg backdrop-blur-sm shadow-sm">
                            <div class="p-6">
                                <h3 class="text-2xl font-semibold text-slate-100 flex items-center gap-2 mb-2">
                                    <svg class="h-5 w-5 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    General Settings
                                </h3>
                                <p class="text-sm text-slate-400 mb-6">Basic site configuration and contact information</p>
                                
                                <div class="space-y-4">
                                    <div>
                                        <label class="text-sm font-medium text-slate-300 mb-2 block">Contact Email *</label>
                                        <input 
                                            type="email"
                                            placeholder="contact@imperialarms.com"
                                            class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm placeholder:text-slate-400 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400"
                                        />
                                    </div>
                                    
                                    <div>
                                        <label class="text-sm font-medium text-slate-300 mb-2 block">Contact Phone</label>
                                        <input 
                                            type="tel"
                                            placeholder="+1 (555) 123-4567"
                                            class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm placeholder:text-slate-400 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400"
                                        />
                                    </div>
                                    
                                    <div>
                                        <label class="text-sm font-medium text-slate-300 mb-2 block">Footer Text</label>
                                        <input 
                                            type="text"
                                            value="© 2024 Imperial Arms. All rights reserved."
                                            class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm placeholder:text-slate-400 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400"
                                        />
                                    </div>
                                    
                                    <div class="flex items-center justify-between p-4 border border-slate-700 rounded-lg">
                                        <div class="space-y-0.5">
                                            <label class="text-sm font-medium text-slate-300">Maintenance Mode</label>
                                            <p class="text-sm text-slate-400">Enable site-wide maintenance mode</p>
                                        </div>
                                        <button type="button" role="switch" class="group inline-flex h-6 w-11 items-center rounded-full border-2 border-slate-700 bg-slate-900/50 transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-amber-400 focus-visible:ring-offset-2">
                                            <span class="pointer-events-none block h-4 w-4 rounded-full bg-slate-400 shadow-lg ring-0 transition-transform translate-x-0.5"></span>
                                        </button>
                                    </div>
                                    
                                    <div>
                                        <label class="text-sm font-medium text-slate-300 mb-2 block">Default Language *</label>
                                        <select class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400">
                                            <option value="English">English</option>
                                            <option value="Spanish">Spanish</option>
                                            <option value="French">French</option>
                                            <option value="German">German</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex justify-end">
                            <button class="inline-flex items-center gap-2 px-4 py-2 bg-amber-400 text-slate-900 rounded-md font-medium hover:bg-amber-300 transition-colors">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"/>
                                </svg>
                                Save General Settings
                            </button>
                        </div>
                    </div>
                </div>

</x-layouts.admin>