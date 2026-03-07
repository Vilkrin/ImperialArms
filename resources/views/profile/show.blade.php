<x-layouts.main :title="__('Profile')">

    <!-- Hero -->
  <div class="bg-slate-900/80 pt-24 pb-10 border-b border-slate-800">
    <div class="container mx-auto px-4">
      <div class="max-w-5xl mx-auto">
        <a href="members.html" class="inline-flex items-center text-sm text-slate-400 hover:text-amber-400 transition-colors">
          <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
          </svg>
          Back to Members
        </a>

        <div class="mt-6 flex flex-col sm:flex-row sm:items-center gap-6">
          <!-- Avatar -->
          <div class="h-24 w-24 rounded-full bg-amber-400/20 border border-amber-400/40 flex items-center justify-center text-2xl font-bold text-amber-300 font-orbitron">
            SC
          </div>

          <div class="flex-1">
            <h1 class="text-3xl md:text-4xl font-orbitron font-bold">Captain Sarah Chen</h1>

            <div class="flex flex-wrap items-center gap-3 mt-3">
              <span class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold border-slate-700 bg-slate-800 text-amber-400">
                <svg class="h-3 w-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l7 4v6c0 5-3 9-7 10C8 21 5 17 5 12V6l7-4z"/>
                </svg>
                Captain
              </span>
              <span class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold border-slate-700 bg-slate-900 text-slate-200">
                Exploration Lead
              </span>
            </div>

            <div class="mt-3 text-sm text-slate-300 flex flex-wrap items-center gap-x-6 gap-y-2">
              <span class="flex items-center gap-2">
                <svg class="h-4 w-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3M4 11h16M5 19h14a2 2 0 002-2v-7H3v7a2 2 0 002 2z"/>
                </svg>
                Joined 2023-06-15
              </span>
              <span class="flex items-center gap-2">
                <svg class="h-4 w-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                1,247 flight hours
              </span>
            </div>
          </div>
        </div>

        <p class="mt-5 text-sm text-slate-300 font-mono">
          <span class="text-slate-400">Call Sign:</span> AEGIS-7
        </p>
        <p class="mt-3 text-slate-200/90 max-w-3xl">
          Veteran pilot specializing in deep-space reconnaissance and long-range fleet coordination. Leads exploration sorties and mentors new flight crews across the 'verse.
        </p>
      </div>
    </div>
  </div>

  <main class="container mx-auto px-4 py-12">
    <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
      <!-- Ships -->
      <section class="bg-slate-900/50 border border-slate-800 rounded-lg shadow-sm">
        <div class="flex flex-col space-y-1.5 p-6 border-b border-slate-800">
          <h2 class="text-xl font-semibold flex items-center gap-2">
            <svg class="h-5 w-5 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
            </svg>
            Ships
          </h2>
          <p class="text-sm text-slate-400">Captain Sarah Chen's registered vessels</p>
        </div>

        <div class="p-6 pt-4">
          <div class="space-y-4">
            <div class="flex items-center justify-between gap-4 p-4 border border-slate-800 rounded-lg bg-slate-950/30 hover:border-amber-400/30 transition-colors">
              <div>
                <div class="font-semibold text-slate-100">UEE Pathfinder</div>
                <div class="text-sm text-slate-400">Anvil Carrack</div>
              </div>
              <span class="shrink-0 inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold border-amber-400/20 bg-amber-400/10 text-amber-300">
                Active
              </span>
            </div>

            <div class="flex items-center justify-between gap-4 p-4 border border-slate-800 rounded-lg bg-slate-950/30 hover:border-amber-400/30 transition-colors">
              <div>
                <div class="font-semibold text-slate-100">Silent Meridian</div>
                <div class="text-sm text-slate-400">Origin 600i Explorer</div>
              </div>
              <span class="shrink-0 inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold border-slate-700 bg-slate-900 text-slate-300">
                Docked
              </span>
            </div>

            <div class="flex items-center justify-between gap-4 p-4 border border-slate-800 rounded-lg bg-slate-950/30 hover:border-amber-400/30 transition-colors">
              <div>
                <div class="font-semibold text-slate-100">Star Lance</div>
                <div class="text-sm text-slate-400">Aegis Vanguard Warden</div>
              </div>
              <span class="shrink-0 inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold border-slate-700 bg-slate-900 text-slate-300">
                Maintenance
              </span>
            </div>
          </div>
        </div>
      </section>

      <!-- Blog Posts -->
      <section class="bg-slate-900/50 border border-slate-800 rounded-lg shadow-sm">
        <div class="flex flex-col space-y-1.5 p-6 border-b border-slate-800">
          <h2 class="text-xl font-semibold flex items-center gap-2">
            <svg class="h-5 w-5 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6l-2 4h4l-2 4"/>
            </svg>
            Blog Posts
          </h2>
          <p class="text-sm text-slate-400">Articles written by Captain Sarah Chen</p>
        </div>

        <div class="p-6 pt-4">
          <div class="space-y-4">
            <a href="blog-post.html" class="flex items-center justify-between gap-4 p-4 border border-slate-800 rounded-lg bg-slate-950/30 hover:border-amber-400/30 hover:bg-slate-950/40 transition-colors group">
              <div class="min-w-0">
                <div class="font-semibold text-slate-100 group-hover:text-amber-300 transition-colors truncate">
                  The Future of Deep Space Exploration
                </div>
                <div class="text-sm text-slate-400 flex flex-wrap items-center gap-x-3 gap-y-1 mt-1">
                  <span>March 15, 2024</span>
                  <span class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold border-amber-400/20 bg-amber-400/10 text-amber-300">
                    Technology
                  </span>
                  <span class="text-slate-500">•</span>
                  <span>5 min read</span>
                </div>
              </div>
              <svg class="h-4 w-4 text-slate-400 group-hover:text-amber-300 transition-colors shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
              </svg>
            </a>
          </div>
        </div>
      </section>
    </div>
  </main>
  
</x-layouts.main>