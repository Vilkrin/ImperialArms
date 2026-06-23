    <div class="container mx-auto px-4 pt-8 pb-8 2xl:max-w-[1500px]">
      <div class="rounded-xl border border-slate-800/70 bg-slate-950/50 backdrop-blur-sm shadow-[0_8px_28px_rgba(0,0,0,0.22)]">

        <!-- Hero band -->
        <div class="relative">
          <div class="absolute inset-0">
            <img src="{{ asset('assets/placeholder/hero-banner.png') }}" alt="" class="h-full w-full object-cover" />
            <div class="absolute inset-0 bg-gradient-to-r from-slate-950/80 via-slate-950/35 to-transparent"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/25 to-transparent"></div>
          </div>
          <div class="relative p-6 md:p-8 lg:p-10">
            <nav class="font-exo text-xs uppercase tracking-wider text-slate-400 flex flex-wrap items-center gap-2">
              <a href="{{ route('home') }}" class="hover:text-amber-400 transition-colors">Home</a>
              <span class="text-slate-600">&gt;</span>
              <a href="#" class="hover:text-amber-400 transition-colors">Users</a>
              <span class="text-slate-600">&gt;</span>
              <span class="text-slate-100">{{ $user->name }}</span>
            </nav>
            <div class="mt-6 h-px w-full bg-gradient-to-r from-slate-500/70 via-slate-600/35 to-transparent"></div>
            <div class="relative mt-6 flex flex-col md:flex-row gap-7 items-start">
              <div class="relative h-44 w-44 md:h-48 md:w-48 shrink-0 rounded-lg border border-amber-400/80 overflow-hidden shadow-[0_0_20px_rgba(251,191,36,0.15)]">
                <img
                    src="{{ $user->getFirstMediaUrl('avatars') ?: asset('assets/avatars/default-avatar.png') }}"
                    alt="{{ $user->name }} Avatar"
                    class="h-full w-full object-cover"
                />
              </div>
              <div class="flex-1 min-w-0">
                <div class="flex items-center gap-3">
                  <h1 class="font-orbitron text-4xl font-bold text-slate-100">{{ $user->name }}</h1>
                  <svg class="h-7 w-7 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <div class="text-amber-400 font-orbitron text-lg font-semibold mt-2">Exploration Vanguard</div>
                <div class="flex flex-wrap items-center gap-6 mt-4 pb-4 border-b border-slate-600/25 text-sm text-slate-400 font-exo">
                    <span class="flex items-center gap-1.5">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        Member since {{ $user->created_at->format('M j, Y') }}
                    </span>

                    <span class="flex items-center gap-1.5">
                        @if($user->is_online)
                            <span class="h-2.5 w-2.5 rounded-full bg-green-500 shadow-[0_0_6px_rgba(34,197,94,0.8)]"></span>
                            Online
                        @else
                            <span class="h-2.5 w-2.5 rounded-full bg-red-500 shadow-[0_0_6px_rgba(239,68,68,0.8)]"></span>
                            {{ $user->last_seen ? 'Last seen ' . $user->last_seen->diffForHumans() : 'Offline' }}
                        @endif
                    </span>
                </div>

                @if($user->profile->tagline)
                    <p class="mt-4 italic text-base leading-7 text-slate-200/80 font-exo max-w-3xl">
                        "{{ $user->profile->tagline }}"
                    </p>
                @else
                    <p class="mt-4 italic text-base leading-7 text-slate-500 font-exo max-w-3xl">
                        No tagline has been added yet.
                    </p>
                @endif

                <div class="flex flex-wrap items-center gap-4 mt-6">
                  <button class="inline-flex items-center h-12 px-8 bg-gradient-to-r from-amber-400 to-amber-600 text-slate-900 font-orbitron text-base rounded-md hover:opacity-90 transition-opacity">Send Message</button>
                  <button class="inline-flex items-center h-12 px-8 border border-amber-400/50 text-amber-400 font-orbitron text-base rounded-md hover:bg-amber-400/10 transition-colors">Follow</button>
                  <button class="inline-flex items-center justify-center h-12 w-12 border border-amber-400/40 text-amber-400 rounded-md hover:bg-amber-400/10 transition-colors" aria-label="More options"><svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01"/></svg></button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Tabs -->
        <div class="border-t border-b border-slate-700/40 bg-slate-950/25">
          <div class="px-6 sm:px-8 flex flex-wrap sm:flex-nowrap gap-4 sm:gap-6" id="profileTabs">
              <button class="profile-tab active px-5 py-4 font-orbitron text-sm uppercase tracking-wide border-b-2 border-amber-400 text-amber-400 bg-transparent flex items-center gap-2 -mb-px cursor-pointer" data-tab="overview"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.618 5.984A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>Overview</button>
              <button class="profile-tab px-5 py-4 font-orbitron text-sm uppercase tracking-wide border-b-2 border-transparent text-slate-400 hover:text-amber-400 flex items-center gap-2 -mb-px cursor-pointer" data-tab="ships"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>Ships</button>
              <button class="profile-tab px-5 py-4 font-orbitron text-sm uppercase tracking-wide border-b-2 border-transparent text-slate-400 hover:text-amber-400 flex items-center gap-2 -mb-px cursor-pointer" data-tab="blogs"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>Blogs</button>
              <button class="profile-tab px-5 py-4 font-orbitron text-sm uppercase tracking-wide border-b-2 border-transparent text-slate-400 hover:text-amber-400 flex items-center gap-2 -mb-px cursor-pointer" data-tab="activity"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>Activity</button>
              <button class="profile-tab px-5 py-4 font-orbitron text-sm uppercase tracking-wide border-b-2 border-transparent text-slate-400 hover:text-amber-400 flex items-center gap-2 -mb-px cursor-pointer" data-tab="medals"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg>Medals</button>
              <button class="profile-tab px-5 py-4 font-orbitron text-sm uppercase tracking-wide border-b-2 border-transparent text-slate-400 hover:text-amber-400 flex items-center gap-2 -mb-px cursor-pointer" data-tab="friends"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>Friends</button>
          </div>
        </div>

        <!-- Tab content -->
        <div class="px-6 sm:px-8 pb-8 pt-7">

          <!-- OVERVIEW TAB -->
          <div id="tab-overview" class="profile-panel">
            <div class="grid lg:grid-cols-[minmax(0,2.05fr)_minmax(360px,1fr)] gap-6">
              <div class="space-y-6">
                <!-- About -->
                <section class="rounded-lg border border-slate-800/80 bg-slate-950/70 relative overflow-hidden min-h-[410px]">
                  <img src="{{ asset('assets/placeholder/about-watermark.png') }}" alt="" aria-hidden="true" loading="lazy" class="pointer-events-none select-none absolute right-8 top-1/2 w-96 -translate-y-1/2 -translate-x-2 opacity-[0.08] invert md:right-12 md:-translate-x-4 md:w-[31rem]" />
                  <div class="flex items-center justify-between mb-0 px-6 pb-4 pt-6 border-b border-slate-600/30 md:px-8 md:pt-8 relative z-10">
                    <div class="flex items-center gap-3">
                      <svg class="h-4 w-4 text-amber-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l2.4 7.4H22l-6 4.6 2.3 7-6.3-4.6L5.7 21l2.3-7-6-4.6h7.6L12 2z"/></svg>
                      <h2 class="font-orbitron text-sm font-bold tracking-wider uppercase text-slate-100">About {{ $user->name }}</h2>
                    </div>
                  </div>
                  <div class="p-6 pt-5 md:p-8 relative z-10">
                    <div class="max-w-[58%] min-w-[280px] md:min-w-[460px] space-y-6 text-left">

                      @if($user->profile->bio)
                          <p class="text-lg text-slate-400 font-exo leading-8">
                              {{ $user->profile->bio }}
                          </p>
                      @else
                          <p class="text-lg text-slate-500 font-exo leading-8 italic">
                              No bio has been added yet.
                          </p>
                      @endif

                      <div class="space-y-5 text-base">
                        <div class="flex items-start gap-4"><svg class="h-5 w-5 text-amber-400 mt-1 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg><div><div class="text-sm uppercase tracking-wide text-slate-400">Location</div><div class="text-slate-100 leading-7">Terra, Sol System</div></div></div>
                        <div class="flex items-start gap-4"><svg class="h-5 w-5 text-amber-400 mt-1 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg><div><div class="text-sm uppercase tracking-wide text-slate-400">Company</div><div class="text-slate-100 leading-7">The Black Cohort</div></div></div>
                        <div class="flex items-start gap-4"><svg class="h-5 w-5 text-amber-400 mt-1 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.618 5.984A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg><div><div class="text-sm uppercase tracking-wide text-slate-400">Role</div><div class="text-slate-100 leading-7">Exploration Lead</div></div></div>
                        <div class="flex items-start gap-4"><svg class="h-5 w-5 text-amber-400 mt-1 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg><div><div class="text-sm uppercase tracking-wide text-slate-400">Interests</div><div class="text-slate-100 leading-7">Exploration, Cartography, Quantum Theory, Deep Space</div></div></div>
                      </div>
                    </div>
                  </div>
                </section>

                <!-- Ships (overview) -->
                <section class="rounded-lg border border-slate-800/80 bg-slate-950/70 overflow-hidden">
                    <div class="flex items-center justify-between mb-0 px-6 pb-4 pt-6 border-b border-slate-600/30 md:px-8 md:pt-8">
                        <div class="flex items-center gap-3">
                            <svg class="h-4 w-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                            <h2 class="font-orbitron text-sm font-bold tracking-wider uppercase text-slate-100">Ships</h2>
                        </div>

                        <button type="button" onclick="switchTab('ships')" class="text-xs font-orbitron uppercase tracking-wider text-amber-400 hover:opacity-80 inline-flex items-center gap-1 cursor-pointer">
                            View All Ships
                            <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </button>
                    </div>

                    <div class="p-6 pt-5 md:p-8">
                        @if($ships->count())
                            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 w-full">
                                @foreach($ships as $memberShip)
                                    <div class="rounded-md overflow-hidden border border-slate-800/80 bg-slate-950/60 group">
                                        <div class="relative h-36 overflow-hidden">
                                            <img
                                                src="{{ $memberShip->ship?->getFirstMediaUrl('ship_images') ?: asset('assets/placeholder/ship-placeholder.png') }}"
                                                alt="{{ $memberShip->ship?->manufacturer }} {{ $memberShip->ship?->model }}"
                                                class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                                            />

                                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"></div>
                                        </div>

                                        <div class="p-3">
                                            <div class="font-orbitron text-sm font-bold text-slate-100 truncate">
                                                {{ $memberShip->name ?: $memberShip->ship?->model }}
                                            </div>

                                            <div class="text-xs text-amber-400 truncate mt-1">
                                                {{ $memberShip->ship?->role ?? 'Unknown Role' }}
                                            </div>

                                            <div class="text-xs text-slate-500 mt-1">
                                                Crew: {{ $memberShip->ship?->crew_required ?? 'Unknown' }}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <p class="text-sm text-slate-500 font-exo italic">
                                No ships have been added yet.
                            </p>
                        @endif
                    </div>
                </section>

                  <!-- Blog (overview) -->
                  <section class="rounded-lg border border-slate-800/80 bg-slate-950/70 overflow-hidden flex flex-col">
                      <div class="flex items-center justify-between mb-0 px-6 pb-4 pt-6 border-b border-slate-600/30 md:px-8 md:pt-8">
                          <div class="flex items-center gap-3">
                              <svg class="h-4 w-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                              </svg>

                              <h2 class="font-orbitron text-sm font-bold tracking-wider uppercase text-slate-100">Blog Posts</h2>
                          </div>

                          <button type="button" onclick="switchTab('blogs')" class="text-xs font-orbitron uppercase tracking-wider text-amber-400 hover:opacity-80 inline-flex items-center gap-1 cursor-pointer">
                              View All Blogs
                              <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                              </svg>
                          </button>
                      </div>

                      <div class="p-6 pt-5 md:p-8 flex flex-col flex-1">
                          @if($posts->count())
                              <div class="space-y-6">
                                  @foreach($posts as $post)
                                      <a
                                          href="{{ route('blog.show', $post->slug) }}"
                                          class="group grid grid-cols-1 sm:grid-cols-[10rem_minmax(0,1fr)] gap-5 transition-colors {{ ! $loop->last ? 'border-b border-slate-600/25 pb-6' : '' }}"
                                      >
                                          <div class="relative h-32 sm:h-28 overflow-hidden rounded-md border border-slate-800/80">
                                              <img
                                                  src="{{ $this->postImage($post) ?: asset('assets/placeholder/blog-placeholder.png') }}"
                                                  alt="{{ $post->title }}"
                                                  class="h-full w-full object-cover opacity-75 group-hover:scale-105 transition-transform duration-500"
                                              />

                                              <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 to-transparent"></div>

                                              <div class="absolute bottom-2 left-2 font-orbitron text-[10px] uppercase tracking-wide text-amber-400">
                                                  {{ $post->categories->first()?->name ?? 'Blog' }}
                                              </div>
                                          </div>

                                          <div class="flex flex-col justify-center min-w-0">
                                              <div class="font-orbitron text-lg font-bold text-slate-100 group-hover:text-amber-400 transition-colors">
                                                  {{ $post->title }}
                                              </div>

                                              <p class="mt-2 text-sm text-slate-400 line-clamp-2">
                                                  {{ $this->postExcerpt($post) }}
                                              </p>

                                              <div class="mt-3 flex items-center justify-between text-xs text-slate-500">
                                                  <span>{{ $post->published_at?->format('F j, Y') ?? $post->created_at->format('F j, Y') }}</span>

                                                  <div class="flex gap-4">
                                                      <span>{{ number_format($post->view_count ?? 0) }} views</span>
                                                      <span>{{ number_format($post->comment_count ?? 0) }} comments</span>
                                                  </div>
                                              </div>
                                          </div>
                                      </a>
                                  @endforeach
                              </div>

                              <div class="mt-6 pt-6 border-t border-slate-600/30">
                                  <button
                                      type="button"
                                      onclick="switchTab('blogs')"
                                      class="w-full h-11 border border-amber-400/50 text-amber-400 hover:bg-amber-400/10 font-orbitron text-xs uppercase tracking-wider rounded-md flex items-center justify-center gap-2 cursor-pointer"
                                  >
                                      View All Blog Posts
                                      <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                      </svg>
                                  </button>
                              </div>
                          @else
                              <p class="text-sm text-slate-500 font-exo italic">
                                  No blog posts have been published yet.
                              </p>
                          @endif
                      </div>
                  </section>
              </div>

              <!-- Right column -->
              <div class="space-y-6">
                <section class="rounded-lg border border-slate-800/80 bg-slate-950/70 overflow-hidden">
                  <div class="flex items-center justify-between mb-0 px-6 pb-4 pt-6 border-b border-slate-600/30 md:px-8 md:pt-8"><div class="flex items-center gap-3"><svg class="h-4 w-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg><h2 class="font-orbitron text-sm font-bold tracking-wider uppercase text-slate-100">Stats Overview</h2></div></div>
                  <div class="p-6 pt-5 md:p-8">
                  <div class="space-y-4 text-base">
                    <div class="flex items-center justify-between"><span class="text-slate-400 font-exo">Total Ships</span><span class="font-orbitron text-lg font-bold text-amber-400">14</span></div>
                    <div class="flex items-center justify-between"><span class="text-slate-400 font-exo">Blog Posts</span><span class="font-orbitron text-lg font-bold text-amber-400">7</span></div>
                    <div class="flex items-center justify-between"><span class="text-slate-400 font-exo">Forum Posts</span><span class="font-orbitron text-lg font-bold text-amber-400">642</span></div>
                    <div class="flex items-center justify-between"><span class="text-slate-400 font-exo">Reactions Received</span><span class="font-orbitron text-lg font-bold text-amber-400">1,840</span></div>
                    <div class="flex items-center justify-between"><span class="text-slate-400 font-exo">Medals Earned</span><span class="font-orbitron text-lg font-bold text-amber-400">19</span></div>
                    <div class="border-t border-slate-600/30 pt-4 mt-2 flex items-center justify-between"><div><div class="text-base text-slate-400 font-exo">Rank</div><div class="text-sm text-slate-400">Top 5% of Imperial Arms</div></div><span class="font-orbitron font-bold text-amber-400 text-3xl">#212</span></div>
                  </div>
                  </div>
                </section>

                <section class="rounded-lg border border-slate-800/80 bg-slate-950/70 overflow-hidden">
                  <div class="flex items-center justify-between mb-0 px-6 pb-4 pt-6 border-b border-slate-600/30 md:px-8 md:pt-8">
                    <div class="flex items-center gap-3"><svg class="h-4 w-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg><h2 class="font-orbitron text-sm font-bold tracking-wider uppercase text-slate-100">Medals</h2></div>
                    <button type="button" onclick="switchTab('medals')" class="text-xs font-orbitron uppercase tracking-wider text-amber-400 hover:opacity-80 inline-flex items-center gap-1">View All <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></button>
                  </div>
                  <div class="p-6 pt-5 md:p-8">
                  <div class="grid grid-cols-3 gap-3">
                    <div class="flex flex-col items-center text-center gap-2 p-2" title="Charted 50+ new routes"><div class="h-16 w-16 rounded-full border border-amber-400/40 bg-amber-400/10 text-amber-400 flex items-center justify-center"><svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg></div><span class="text-[11px] leading-tight text-slate-400">Trailblazer</span></div>
                    <div class="flex flex-col items-center text-center gap-2 p-2" title="10,000 ly traveled"><div class="h-16 w-16 rounded-full border border-teal-400/40 bg-teal-400/10 text-teal-400 flex items-center justify-center"><svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg></div><span class="text-[11px] leading-tight text-slate-400">Long Haul</span></div>
                    <div class="flex flex-col items-center text-center gap-2 p-2" title="Discovered a derelict"><div class="h-16 w-16 rounded-full border border-slate-600 bg-slate-800 text-slate-400 flex items-center justify-center"><svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg></div><span class="text-[11px] leading-tight text-slate-400">First Contact</span></div>
                    <div class="flex flex-col items-center text-center gap-2 p-2" title="Flawless navigation record"><div class="h-16 w-16 rounded-full border border-amber-400/40 bg-amber-400/10 text-amber-400 flex items-center justify-center"><svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg></div><span class="text-[11px] leading-tight text-slate-400">Quantum Ace</span></div>
                    <div class="flex flex-col items-center text-center gap-2 p-2" title="Deep space veteran"><div class="h-16 w-16 rounded-full border border-teal-400/40 bg-teal-400/10 text-teal-400 flex items-center justify-center"><svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg></div><span class="text-[11px] leading-tight text-slate-400">Void Walker</span></div>
                    <div class="flex flex-col items-center text-center gap-2 p-2" title="Cartography excellence"><div class="h-16 w-16 rounded-full border border-red-400/40 bg-red-400/10 text-red-400 flex items-center justify-center"><svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg></div><span class="text-[11px] leading-tight text-slate-400">Cartographer</span></div>
                  </div>
                  </div>
                </section>

                <section class="rounded-lg border border-slate-800/80 bg-slate-950/70 overflow-hidden">
                  <div class="flex items-center justify-between mb-0 px-6 pb-4 pt-6 border-b border-slate-600/30 md:px-8 md:pt-8"><div class="flex items-center gap-3"><svg class="h-4 w-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg><h2 class="font-orbitron text-sm font-bold tracking-wider uppercase text-slate-100">Company</h2></div></div>
                  <div class="p-6 pt-5 md:p-8">
                  <div class="flex items-center gap-6">
                    <div class="h-20 w-20 rounded-full bg-red-500/15 border border-red-500/40 flex items-center justify-center shadow-[0_0_24px_rgba(239,68,68,0.18)]"><svg class="h-10 w-10 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.618 5.984A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div>
                    <div><div class="font-orbitron text-xl font-bold text-slate-100">The Black Cohort</div><div class="text-base text-slate-400 mt-1.5">Vanguard</div></div>
                  </div>
                  <div class="grid grid-cols-3 gap-2 mt-6 pt-4 border-t border-slate-600/30 text-center">
                    <div><div class="text-xs text-slate-400">Members</div><div class="font-orbitron text-lg font-bold text-slate-100 mt-1">142</div></div>
                    <div><div class="text-xs text-slate-400">Ships</div><div class="font-orbitron text-lg font-bold text-slate-100 mt-1">87</div></div>
                    <div><div class="text-xs text-slate-400">Rank</div><div class="font-orbitron text-lg font-bold text-slate-100 mt-1">#7</div></div>
                  </div>
                  <a href="members.html" class="w-full mt-6 h-10 border border-amber-400/50 text-amber-400 hover:bg-amber-400/10 font-orbitron text-xs uppercase tracking-wider rounded-md flex items-center justify-center gap-2">View Company <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></a>
                  </div>
                </section>

                <section class="rounded-lg border border-slate-800/80 bg-slate-950/70 overflow-hidden">
                  <div class="flex items-center justify-between mb-0 px-6 pb-4 pt-6 border-b border-slate-600/30 md:px-8 md:pt-8"><div class="flex items-center gap-3"><svg class="h-4 w-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg><h2 class="font-orbitron text-sm font-bold tracking-wider uppercase text-slate-100">Recent Activity</h2></div></div>
                  <div class="p-6 pt-5 md:p-8">
                  <div class="space-y-5">
                    <a href="blog-post.html" class="block hover:opacity-80 transition-opacity"><div class="flex gap-4"><div class="h-11 w-11 shrink-0 rounded-full bg-amber-400/10 border border-amber-400/40 flex items-center justify-center"><svg class="h-6 w-6 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg></div><div class="min-w-0"><p class="text-base leading-7 text-slate-100">Published a new blog post: <span class="text-amber-400 font-semibold">The Future of Deep Space Exploration</span></p><span class="text-sm text-slate-400">1 day ago</span></div></div></a>
                    <a href="forum.html" class="block hover:opacity-80 transition-opacity"><div class="flex gap-4"><div class="h-11 w-11 shrink-0 rounded-full bg-amber-400/10 border border-amber-400/40 flex items-center justify-center"><svg class="h-6 w-6 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg></div><div class="min-w-0"><p class="text-base leading-7 text-slate-100">Posted in forum: <span class="text-amber-400 font-semibold">Jump Point Discoveries</span></p><span class="text-sm text-slate-400">3 hours ago</span></div></div></a>
                    <div><div class="flex gap-4"><div class="h-11 w-11 shrink-0 rounded-full bg-amber-400/10 border border-amber-400/40 flex items-center justify-center"><svg class="h-6 w-6 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div><div class="min-w-0"><p class="text-base leading-7 text-slate-100">Updated ship: <span class="text-amber-400 font-semibold">Pathfinder</span></p><span class="text-sm text-slate-400">2 days ago</span></div></div></div>
                    <div><div class="flex gap-4"><div class="h-11 w-11 shrink-0 rounded-full bg-amber-400/10 border border-amber-400/40 flex items-center justify-center"><svg class="h-6 w-6 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg></div><div class="min-w-0"><p class="text-base leading-7 text-slate-100">Earned medal: <span class="text-amber-400 font-semibold">Trailblazer</span></p><span class="text-sm text-slate-400">5 days ago</span></div></div></div>
                  </div>
                  </div>
                </section>
              </div>
            </div>
          </div>

            <!-- SHIPS TAB -->
            <div id="tab-ships" class="profile-panel hidden">
                <section class="rounded-lg border border-slate-800/80 bg-slate-950/70 overflow-hidden">
                    <div class="flex items-center justify-between mb-0 px-6 pb-4 pt-6 border-b border-slate-600/30 md:px-8 md:pt-8">
                        <div class="flex items-center gap-3">
                            <svg class="h-4 w-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>

                            <h2 class="font-orbitron text-sm font-bold tracking-wider uppercase text-slate-100">Hangar</h2>
                        </div>
                    </div>

                    <div class="p-6 pt-5 md:p-8">
                        @if($paginatedShips->count())
                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                                @foreach($paginatedShips as $memberShip)
                                    <div class="rounded-md overflow-hidden border border-slate-800/80 bg-slate-950/60 group">
                                        <div class="relative h-40 overflow-hidden">
                                            <img
                                                src="{{ $memberShip->ship?->getFirstMediaUrl('ship_images') ?: asset('assets/placeholder/ship-placeholder.png') }}"
                                                alt="{{ $memberShip->ship?->manufacturer }} {{ $memberShip->ship?->model }}"
                                                class="h-full w-full object-cover group-hover:scale-105 transition-transform duration-500"
                                            />

                                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"></div>
                                        </div>

                                        <div class="p-3">
                                            <div class="font-orbitron text-sm font-bold text-slate-100 truncate">
                                                {{ $memberShip->name ?: $memberShip->ship?->model }}
                                            </div>

                                            <div class="text-xs text-amber-400 mt-1 truncate">
                                                {{ $memberShip->ship?->role ?? 'Unknown Role' }}
                                            </div>

                                            <div class="text-xs text-slate-500 mt-1">
                                                Crew: {{ $memberShip->ship?->crew_required ?? 'Unknown' }}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="mt-6">
                                {{ $paginatedShips->links() }}
                            </div>
                        @else
                            <p class="text-sm text-slate-500 font-exo italic">
                                No ships have been added yet.
                            </p>
                        @endif
                    </div>
                </section>
            </div>

              <!-- BLOGS TAB -->
              <div id="tab-blogs" class="profile-panel hidden">
                  <section class="rounded-lg border border-slate-800/80 bg-slate-950/70 overflow-hidden">
                      <div class="flex items-center justify-between mb-0 px-6 pb-4 pt-6 border-b border-slate-600/30 md:px-8 md:pt-8">
                          <div class="flex items-center gap-3">
                              <svg class="h-4 w-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                              </svg>

                              <h2 class="font-orbitron text-sm font-bold tracking-wider uppercase text-slate-100">
                                  Blog Posts
                              </h2>
                          </div>
                      </div>

                      <div class="p-6 pt-5 md:p-8">
                          @if($paginatedPosts->count())
                              <div class="space-y-6">
                                  @foreach($paginatedPosts as $post)
                                      <a
                                          href="{{ route('blog.show', $post->slug) }}"
                                          class="group grid grid-cols-1 sm:grid-cols-[12rem_minmax(0,1fr)] gap-5 {{ ! $loop->last ? 'border-b border-slate-600/25 pb-6' : '' }}"
                                      >
                                          <div class="relative h-32 rounded-md border border-slate-800/80 overflow-hidden">
                                              <img
                                                  src="{{ $this->postImage($post) ?: asset('assets/placeholder/blog-placeholder.png') }}"
                                                  alt="{{ $post->title }}"
                                                  class="h-full w-full object-cover opacity-75 group-hover:scale-105 transition-transform duration-500"
                                              />

                                              <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 to-transparent"></div>

                                              <div class="absolute bottom-2 left-2 font-orbitron text-[10px] uppercase text-amber-400">
                                                  {{ $post->categories->first()?->name ?? 'Blog' }}
                                              </div>
                                          </div>

                                          <div>
                                              <div class="font-orbitron text-xl font-bold text-slate-100 group-hover:text-amber-400 transition-colors">
                                                  {{ $post->title }}
                                              </div>

                                              <p class="mt-2 text-slate-400">
                                                  {{ $this->postExcerpt($post) }}
                                              </p>

                                              <div class="mt-4 flex justify-between text-sm text-slate-500">
                                                  <span>
                                                      {{ $post->published_at?->format('F j, Y') ?? $post->created_at->format('F j, Y') }}
                                                  </span>

                                                  <span>
                                                      {{ number_format($post->view_count ?? 0) }}
                                                      views ·
                                                      {{ number_format($post->comment_count ?? 0) }}
                                                      comments
                                                  </span>
                                              </div>
                                          </div>
                                      </a>
                                  @endforeach
                              </div>

                              <div class="mt-8">
                                  {{ $paginatedPosts->links() }}
                              </div>
                          @else
                              <p class="text-sm text-slate-500 font-exo italic">
                                  No blog posts have been published yet.
                              </p>
                          @endif
                      </div>
                  </section>
              </div>

          <!-- ACTIVITY TAB -->
          <div id="tab-activity" class="profile-panel hidden">
            <section class="rounded-lg border border-slate-800/80 bg-slate-950/70 overflow-hidden">
              <div class="flex items-center justify-between mb-0 px-6 pb-4 pt-6 border-b border-slate-600/30 md:px-8 md:pt-8"><div class="flex items-center gap-3"><svg class="h-4 w-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg><h2 class="font-orbitron text-sm font-bold tracking-wider uppercase text-slate-100">Recent Activity</h2></div></div>
              <div class="p-6 pt-5 md:p-8">
              <div class="space-y-5">
                <a href="blog-post.html" class="block hover:opacity-80"><div class="flex gap-4"><div class="h-11 w-11 rounded-full bg-amber-400/10 border border-amber-400/40 flex items-center justify-center"><svg class="h-6 w-6 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg></div><div><p class="text-slate-100">Published a new blog post: <span class="text-amber-400 font-semibold">The Future of Deep Space Exploration</span></p><span class="text-sm text-slate-400">1 day ago</span></div></div></a>
                <a href="forum.html" class="block hover:opacity-80"><div class="flex gap-4"><div class="h-11 w-11 rounded-full bg-amber-400/10 border border-amber-400/40 flex items-center justify-center"><svg class="h-6 w-6 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg></div><div><p class="text-slate-100">Posted in forum: <span class="text-amber-400 font-semibold">Jump Point Discoveries</span></p><span class="text-sm text-slate-400">3 hours ago</span></div></div></a>
                <div class="flex gap-4"><div class="h-11 w-11 rounded-full bg-amber-400/10 border border-amber-400/40 flex items-center justify-center"><svg class="h-6 w-6 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div><div><p class="text-slate-100">Updated ship: <span class="text-amber-400 font-semibold">Pathfinder</span></p><span class="text-sm text-slate-400">2 days ago</span></div></div>
                <div class="flex gap-4"><div class="h-11 w-11 rounded-full bg-amber-400/10 border border-amber-400/40 flex items-center justify-center"><svg class="h-6 w-6 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg></div><div><p class="text-slate-100">Earned medal: <span class="text-amber-400 font-semibold">Trailblazer</span></p><span class="text-sm text-slate-400">5 days ago</span></div></div>
              </div>
              </div>
            </section>
          </div>

          <!-- MEDALS TAB -->
          <div id="tab-medals" class="profile-panel hidden">
            <section class="rounded-lg border border-slate-800/80 bg-slate-950/70 overflow-hidden">
              <div class="flex items-center justify-between mb-0 px-6 pb-4 pt-6 border-b border-slate-600/30 md:px-8 md:pt-8"><div class="flex items-center gap-3"><svg class="h-4 w-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg><h2 class="font-orbitron text-sm font-bold tracking-wider uppercase text-slate-100">Medals &amp; Honors</h2></div></div>
              <div class="p-6 pt-5 md:p-8">
              <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="flex items-center gap-3 p-4 rounded-lg border border-slate-800/80 bg-slate-950/60"><div class="h-12 w-12 rounded-full border border-amber-400/40 bg-amber-400/10 text-amber-400 flex items-center justify-center shrink-0"><svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg></div><div><div class="font-orbitron text-sm font-bold text-slate-100">Trailblazer</div><div class="text-xs text-slate-400">Charted 50+ new routes</div></div></div>
                <div class="flex items-center gap-3 p-4 rounded-lg border border-slate-800/80 bg-slate-950/60"><div class="h-12 w-12 rounded-full border border-teal-400/40 bg-teal-400/10 text-teal-400 flex items-center justify-center shrink-0"><svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg></div><div><div class="font-orbitron text-sm font-bold text-slate-100">Long Haul</div><div class="text-xs text-slate-400">10,000 ly traveled</div></div></div>
                <div class="flex items-center gap-3 p-4 rounded-lg border border-slate-800/80 bg-slate-950/60"><div class="h-12 w-12 rounded-full border border-slate-600 bg-slate-800 text-slate-400 flex items-center justify-center shrink-0"><svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg></div><div><div class="font-orbitron text-sm font-bold text-slate-100">First Contact</div><div class="text-xs text-slate-400">Discovered a derelict</div></div></div>
                <div class="flex items-center gap-3 p-4 rounded-lg border border-slate-800/80 bg-slate-950/60"><div class="h-12 w-12 rounded-full border border-amber-400/40 bg-amber-400/10 text-amber-400 flex items-center justify-center shrink-0"><svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg></div><div><div class="font-orbitron text-sm font-bold text-slate-100">Quantum Ace</div><div class="text-xs text-slate-400">Flawless navigation record</div></div></div>
                <div class="flex items-center gap-3 p-4 rounded-lg border border-slate-800/80 bg-slate-950/60"><div class="h-12 w-12 rounded-full border border-teal-400/40 bg-teal-400/10 text-teal-400 flex items-center justify-center shrink-0"><svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg></div><div><div class="font-orbitron text-sm font-bold text-slate-100">Void Walker</div><div class="text-xs text-slate-400">Deep space veteran</div></div></div>
                <div class="flex items-center gap-3 p-4 rounded-lg border border-slate-800/80 bg-slate-950/60"><div class="h-12 w-12 rounded-full border border-red-400/40 bg-red-400/10 text-red-400 flex items-center justify-center shrink-0"><svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg></div><div><div class="font-orbitron text-sm font-bold text-slate-100">Cartographer</div><div class="text-xs text-slate-400">Cartography excellence</div></div></div>
              </div>
              </div>
            </section>
          </div>

          <!-- FRIENDS TAB -->
          <div id="tab-friends" class="profile-panel hidden">
            <section class="rounded-lg border border-slate-800/80 bg-slate-950/70 overflow-hidden">
              <div class="flex items-center justify-between mb-0 px-6 pb-4 pt-6 border-b border-slate-600/30 md:px-8 md:pt-8"><div class="flex items-center gap-3"><svg class="h-4 w-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg><h2 class="font-orbitron text-sm font-bold tracking-wider uppercase text-slate-100">Friends</h2></div></div>
              <div class="p-6 pt-5 md:p-8">
              <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-3">
                <a href="user-profile2.html" class="flex items-center gap-3 p-3 rounded-lg border border-slate-800/80 bg-slate-950/60 hover:border-amber-400/40 transition-colors"><div class="h-10 w-10 rounded-full border border-amber-400/30 bg-amber-400/10 text-amber-400 text-xs font-bold flex items-center justify-center shrink-0">JM</div><div class="min-w-0"><div class="font-orbitron text-sm font-bold text-slate-100 truncate">Commander Jake Morrison</div><div class="text-xs text-slate-400 truncate">Fleet Tactician</div></div></a>
                <a href="user-profile2.html" class="flex items-center gap-3 p-3 rounded-lg border border-slate-800/80 bg-slate-950/60 hover:border-amber-400/40 transition-colors"><div class="h-10 w-10 rounded-full border border-amber-400/30 bg-amber-400/10 text-amber-400 text-xs font-bold flex items-center justify-center shrink-0">ML</div><div class="min-w-0"><div class="font-orbitron text-sm font-bold text-slate-100 truncate">Chief Engineer Marcus Liu</div><div class="text-xs text-slate-400 truncate">Head of Maintenance</div></div></a>
                <a href="user-profile2.html" class="flex items-center gap-3 p-3 rounded-lg border border-slate-800/80 bg-slate-950/60 hover:border-amber-400/40 transition-colors"><div class="h-10 w-10 rounded-full border border-amber-400/30 bg-amber-400/10 text-amber-400 text-xs font-bold flex items-center justify-center shrink-0">EW</div><div class="min-w-0"><div class="font-orbitron text-sm font-bold text-slate-100 truncate">Lt. Commander Emma Watson</div><div class="text-xs text-slate-400 truncate">Recruitment Director</div></div></a>
              </div>
              </div>
            </section>
          </div>

        </div>
      </div>
    </div>

  <script>
    function switchTab(tabId) {
      document.querySelectorAll('.profile-panel').forEach(function (panel) {
        panel.classList.add('hidden');
      });
      var target = document.getElementById('tab-' + tabId);
      if (target) target.classList.remove('hidden');

      document.querySelectorAll('.profile-tab').forEach(function (btn) {
        var isActive = btn.dataset.tab === tabId;
        btn.classList.toggle('border-amber-400', isActive);
        btn.classList.toggle('text-amber-400', isActive);
        btn.classList.toggle('border-transparent', !isActive);
        btn.classList.toggle('text-slate-400', !isActive);
      });
    }

    document.querySelectorAll('.profile-tab').forEach(function (btn) {
      btn.addEventListener('click', function () {
        switchTab(btn.dataset.tab);
      });
    });
  </script>