<x-layouts.main :title="__('Forum')">

  <div class="pt-20 pb-16">
    <div class="container mx-auto px-4">
      <!-- Breadcrumb -->
      <div class="mb-6 flex items-center gap-2 text-sm text-slate-400 font-exo">
        <a href="{{ route('home') }}" class="hover:text-amber-400 transition-colors">Home</a>
        <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        <span class="text-slate-100">Forum</span>
      </div>

      <!-- Header -->
      <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8">
        <div>
          <h1 class="font-orbitron text-3xl md:text-4xl font-bold bg-gradient-to-br from-amber-400 to-amber-500 bg-clip-text text-transparent mb-2">Community Forum</h1>
          <p class="text-slate-400 font-exo">Discuss, plan, and connect with fellow Imperial Arms members.</p>
        </div>
        <div class="relative">
          <svg class="absolute left-3 top-1/2 -translate-y-1/2 h-4 w-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
          <input type="search" placeholder="Search forums..." class="pl-10 font-exo w-full md:w-56 h-10 rounded-md border border-slate-700 bg-slate-900/50 px-3 text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-amber-400" />
        </div>
      </div>

      <!-- Stats -->
      <div class="flex gap-4 mb-8 flex-wrap">
        <div class="bg-slate-900/50 border border-slate-700 rounded-lg px-4 py-3 flex items-center gap-2">
          <svg class="h-4 w-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
          <span class="text-sm font-exo"><strong>246</strong> Topics</span>
        </div>
        <div class="bg-slate-900/50 border border-slate-700 rounded-lg px-4 py-3 flex items-center gap-2">
          <svg class="h-4 w-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
          <span class="text-sm font-exo"><strong>1,702</strong> Posts</span>
        </div>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
        <!-- Main -->
        <div class="lg:col-span-3 space-y-8">
          <!-- Community -->
          <section>
            <div class="mb-3">
              <h2 class="font-orbitron text-lg font-bold text-slate-100">Community</h2>
              <p class="text-xs text-slate-400 font-exo mt-0.5">General discussion areas for all members.</p>
            </div>
            <div class="bg-slate-900/50 border border-slate-700 rounded-lg overflow-hidden">
              <div class="hidden sm:grid grid-cols-[minmax(0,1fr)_5rem_5rem_12rem] gap-4 px-4 py-2 border-b border-slate-700 bg-slate-800/30 text-xs font-exo font-semibold text-slate-400 uppercase tracking-wider">
                <span>Forum</span><span class="text-center">Topics</span><span class="text-center">Posts</span><span class="text-right">Last Post</span>
              </div>
              <div class="divide-y divide-slate-700">
                <a href="{{ route('forum.category') }}" class="block hover:bg-slate-800/30 transition-colors">
                  <div class="grid items-center gap-4 px-4 py-3 sm:grid-cols-[minmax(0,1fr)_5rem_5rem_12rem]">
                    <div class="flex items-center gap-3 min-w-0">
                      <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-amber-400/10 flex-shrink-0">
                        <svg class="h-5 w-5 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                      </div>
                      <div class="min-w-0">
                        <h3 class="font-exo font-semibold text-slate-100 text-sm">General Discussion</h3>
                        <p class="text-xs text-slate-400 line-clamp-1">Chat about anything related to Imperial Arms and the verse.</p>
                      </div>
                    </div>
                    <div class="hidden sm:block text-center"><div class="font-semibold text-slate-100">42</div></div>
                    <div class="hidden sm:block text-center"><div class="font-semibold text-slate-100">318</div></div>
                    <div class="hidden sm:block text-right text-xs text-slate-400">
                      <div class="truncate font-medium text-slate-200">Welcome to the new forums!</div>
                      <div>by Captain Sarah Chen · Mar 18</div>
                    </div>
                  </div>
                </a>
                <a href="{{ route('forum.category') }}"" class="block hover:bg-slate-800/30 transition-colors">
                  <div class="grid items-center gap-4 px-4 py-3 sm:grid-cols-[minmax(0,1fr)_5rem_5rem_12rem]">
                    <div class="flex items-center gap-3 min-w-0">
                      <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-amber-400/10 flex-shrink-0">
                        <svg class="h-5 w-5 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/></svg>
                      </div>
                      <div class="min-w-0">
                        <h3 class="font-exo font-semibold text-slate-100 text-sm">Introductions &amp; Recruitment</h3>
                        <p class="text-xs text-slate-400 line-clamp-1">Introduce yourself and find new members for your division.</p>
                      </div>
                    </div>
                    <div class="hidden sm:block text-center"><div class="font-semibold text-slate-100">34</div></div>
                    <div class="hidden sm:block text-center"><div class="font-semibold text-slate-100">156</div></div>
                    <div class="hidden sm:block text-right text-xs text-slate-400">
                      <div class="truncate font-medium text-slate-200">New pilot checking in!</div>
                      <div>by Jake Rivera · Mar 18</div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </section>

          <!-- Operations & Fleet -->
          <section>
            <div class="mb-3">
              <h2 class="font-orbitron text-lg font-bold text-slate-100">Operations &amp; Fleet</h2>
              <p class="text-xs text-slate-400 font-exo mt-0.5">Mission planning, fleet coordination, and strategy.</p>
            </div>
            <div class="bg-slate-900/50 border border-slate-700 rounded-lg overflow-hidden">
              <div class="hidden sm:grid grid-cols-[minmax(0,1fr)_5rem_5rem_12rem] gap-4 px-4 py-2 border-b border-slate-700 bg-slate-800/30 text-xs font-exo font-semibold text-slate-400 uppercase tracking-wider">
                <span>Forum</span><span class="text-center">Topics</span><span class="text-center">Posts</span><span class="text-right">Last Post</span>
              </div>
              <div class="divide-y divide-slate-700">
                <a href="{{ route('forum.category') }}"" class="block hover:bg-slate-800/30 transition-colors">
                  <div class="grid items-center gap-4 px-4 py-3 sm:grid-cols-[minmax(0,1fr)_5rem_5rem_12rem]">
                    <div class="flex items-center gap-3 min-w-0">
                      <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-amber-400/10 flex-shrink-0">
                        <svg class="h-5 w-5 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"/></svg>
                      </div>
                      <div class="min-w-0">
                        <h3 class="font-exo font-semibold text-slate-100 text-sm">Fleet Operations</h3>
                        <p class="text-xs text-slate-400 line-clamp-1">Coordinate fleet missions, strategies, and operational planning.</p>
                      </div>
                    </div>
                    <div class="hidden sm:block text-center"><div class="font-semibold text-slate-100">28</div></div>
                    <div class="hidden sm:block text-center"><div class="font-semibold text-slate-100">195</div></div>
                    <div class="hidden sm:block text-right text-xs text-slate-400">
                      <div class="truncate font-medium text-slate-200">Operation Starfall debrief</div>
                      <div>by Commander Voss · Mar 17</div>
                    </div>
                  </div>
                </a>
                <a href="{{ route('forum.category') }}" class="block hover:bg-slate-800/30 transition-colors">
                  <div class="grid items-center gap-4 px-4 py-3 sm:grid-cols-[minmax(0,1fr)_5rem_5rem_12rem]">
                    <div class="flex items-center gap-3 min-w-0">
                      <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-amber-400/10 flex-shrink-0">
                        <svg class="h-5 w-5 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                      </div>
                      <div class="min-w-0">
                        <h3 class="font-exo font-semibold text-slate-100 text-sm">Ship Talk</h3>
                        <p class="text-xs text-slate-400 line-clamp-1">Discuss ship builds, loadouts, and performance tuning.</p>
                      </div>
                    </div>
                    <div class="hidden sm:block text-center"><div class="font-semibold text-slate-100">56</div></div>
                    <div class="hidden sm:block text-center"><div class="font-semibold text-slate-100">412</div></div>
                    <div class="hidden sm:block text-right text-xs text-slate-400">
                      <div class="truncate font-medium text-slate-200">Best Polaris loadout for PvE?</div>
                      <div>by Alex Thompson · Mar 18</div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </section>

          <!-- Marketplace -->
          <section>
            <div class="mb-3">
              <h2 class="font-orbitron text-lg font-bold text-slate-100">Marketplace &amp; Services</h2>
              <p class="text-xs text-slate-400 font-exo mt-0.5">Trading, hauling, and service discussion.</p>
            </div>
            <div class="bg-slate-900/50 border border-slate-700 rounded-lg overflow-hidden">
              <div class="divide-y divide-slate-700">
                <a href="forum-category.html?slug=trading" class="block hover:bg-slate-800/30 transition-colors">
                  <div class="grid items-center gap-4 px-4 py-3 sm:grid-cols-[minmax(0,1fr)_5rem_5rem_12rem]">
                    <div class="flex items-center gap-3 min-w-0">
                      <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-amber-400/10 flex-shrink-0">
                        <svg class="h-5 w-5 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                      </div>
                      <div class="min-w-0">
                        <h3 class="font-exo font-semibold text-slate-100 text-sm">Trading &amp; Commerce</h3>
                        <p class="text-xs text-slate-400 line-clamp-1">Trade routes, cargo hauling tips, and economic strategy.</p>
                      </div>
                    </div>
                    <div class="hidden sm:block text-center"><div class="font-semibold text-slate-100">19</div></div>
                    <div class="hidden sm:block text-center"><div class="font-semibold text-slate-100">87</div></div>
                    <div class="hidden sm:block text-right text-xs text-slate-400">
                      <div class="truncate font-medium text-slate-200">Pyro trade route profitability</div>
                      <div>by Maria Santos · Mar 16</div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </section>

          <!-- Off-Topic -->
          <section>
            <div class="mb-3">
              <h2 class="font-orbitron text-lg font-bold text-slate-100">Off-Topic</h2>
              <p class="text-xs text-slate-400 font-exo mt-0.5">Everything else — games, movies, tech, and life.</p>
            </div>
            <div class="bg-slate-900/50 border border-slate-700 rounded-lg overflow-hidden">
              <div class="divide-y divide-slate-700">
                <a href="forum-category.html?slug=off-topic" class="block hover:bg-slate-800/30 transition-colors">
                  <div class="grid items-center gap-4 px-4 py-3 sm:grid-cols-[minmax(0,1fr)_5rem_5rem_12rem]">
                    <div class="flex items-center gap-3 min-w-0">
                      <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-amber-400/10 flex-shrink-0">
                        <svg class="h-5 w-5 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/></svg>
                      </div>
                      <div class="min-w-0">
                        <h3 class="font-exo font-semibold text-slate-100 text-sm">Off-Topic</h3>
                        <p class="text-xs text-slate-400 line-clamp-1">Everything else — games, movies, tech, and life.</p>
                      </div>
                    </div>
                    <div class="hidden sm:block text-center"><div class="font-semibold text-slate-100">67</div></div>
                    <div class="hidden sm:block text-center"><div class="font-semibold text-slate-100">534</div></div>
                    <div class="hidden sm:block text-right text-xs text-slate-400">
                      <div class="truncate font-medium text-slate-200">What are you playing besides SC?</div>
                      <div>by Alex Thompson · Mar 17</div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </section>
        </div>

        <!-- Sidebar -->
        <aside class="space-y-6">
          <div>
            <h2 class="font-orbitron text-base font-semibold mb-3">Recent Activity</h2>
            <div class="space-y-2">
              <a href="forum-thread.html" class="block bg-slate-900/50 border border-slate-700 rounded-lg p-3 hover:border-amber-400/50 transition-colors">
                <div class="flex items-center gap-1.5 mb-1">
                  <h4 class="font-exo font-medium text-sm line-clamp-1">Welcome to the new forums!</h4>
                </div>
                <p class="text-xs text-slate-400">General Discussion · by Captain Sarah Chen · Mar 18</p>
              </a>
              <a href="forum-thread.html?id=t7" class="block bg-slate-900/50 border border-slate-700 rounded-lg p-3 hover:border-amber-400/50 transition-colors">
                <div class="flex items-center gap-1.5 mb-1">
                  <h4 class="font-exo font-medium text-sm line-clamp-1">New pilot checking in!</h4>
                </div>
                <p class="text-xs text-slate-400">Introductions · by Jake Rivera · Mar 18</p>
              </a>
              <a href="forum-thread.html?id=t5" class="block bg-slate-900/50 border border-slate-700 rounded-lg p-3 hover:border-amber-400/50 transition-colors">
                <div class="flex items-center gap-1.5 mb-1">
                  <span class="h-2 w-2 rounded-full bg-amber-400 flex-shrink-0"></span>
                  <h4 class="font-exo font-bold text-sm line-clamp-1">Best Polaris loadout for PvE?</h4>
                </div>
                <p class="text-xs text-slate-400">Ship Talk · by Alex Thompson · Mar 18</p>
              </a>
              <a href="forum-thread.html?id=t3" class="block bg-slate-900/50 border border-slate-700 rounded-lg p-3 hover:border-amber-400/50 transition-colors">
                <div class="flex items-center gap-1.5 mb-1">
                  <span class="h-2 w-2 rounded-full bg-amber-400 flex-shrink-0"></span>
                  <h4 class="font-exo font-bold text-sm line-clamp-1">Upcoming 3.24 patch — what are you most excited about?</h4>
                </div>
                <p class="text-xs text-slate-400">General Discussion · by Alex Thompson · Mar 17</p>
              </a>
              <a href="forum-thread.html?id=t4" class="block bg-slate-900/50 border border-slate-700 rounded-lg p-3 hover:border-amber-400/50 transition-colors">
                <div class="flex items-center gap-1.5 mb-1">
                  <span class="h-2 w-2 rounded-full bg-amber-400 flex-shrink-0"></span>
                  <h4 class="font-exo font-bold text-sm line-clamp-1">Operation Starfall debrief</h4>
                </div>
                <p class="text-xs text-slate-400">Fleet Operations · by Commander Voss · Mar 17</p>
              </a>
            </div>
          </div>

          <div class="bg-slate-900/50 border border-slate-700 rounded-lg p-4">
            <h3 class="font-orbitron text-sm font-semibold mb-3">Forum Statistics</h3>
            <div class="space-y-2 text-sm font-exo">
              <div class="flex justify-between"><span class="text-slate-400">Total Topics</span><span class="font-semibold">246</span></div>
              <div class="flex justify-between"><span class="text-slate-400">Total Posts</span><span class="font-semibold">1,702</span></div>
              <div class="flex justify-between"><span class="text-slate-400">Members</span><span class="font-semibold">128</span></div>
              <div class="flex justify-between"><span class="text-slate-400">Forums</span><span class="font-semibold">6</span></div>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </div>

  

</x-layouts.main>