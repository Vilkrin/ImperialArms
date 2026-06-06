<x-layouts.main :title="__('Forum')">

  <div class="pt-20 pb-16">
    <div class="container mx-auto px-4">
      <div class="mb-6 flex items-center gap-2 text-sm text-slate-400 font-exo flex-wrap">
        <a href="{{ route('home') }}" class="hover:text-amber-400">Home</a>
        <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        <a href="{{ route('forum.index') }}" class="hover:text-amber-400">Forum</a>
        <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        <span class="text-slate-100">General Discussion</span>
      </div>

      <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-6">
        <div>
          <h1 class="font-orbitron text-2xl md:text-3xl font-bold">General Discussion</h1>
          <p class="text-slate-400 font-exo text-sm mt-1">Chat about anything related to Imperial Arms and the verse.</p>
        </div>
        <div class="flex gap-3">
          <div class="relative">
            <svg class="absolute left-3 top-1/2 -translate-y-1/2 h-4 w-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
            <input id="topicSearch" type="search" placeholder="Search topics..." class="pl-10 font-exo w-56 h-10 rounded-md border border-slate-700 bg-slate-900/50 px-3 text-sm focus:outline-none focus:ring-1 focus:ring-amber-400" />
          </div>
          <a href="{{ route('forum.new-thread') }}" class="inline-flex items-center justify-center h-10 px-4 bg-amber-400 text-slate-900 rounded-md text-sm font-exo font-medium hover:bg-amber-300 transition-colors">
            <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v12m6-6H6"/></svg>
            New Topic
          </a>
        </div>
      </div>

      <!-- Pinned -->
      <div class="mb-4 bg-slate-900/50 border border-slate-700 rounded-lg overflow-hidden">
        <div class="hidden sm:grid grid-cols-[minmax(0,1fr)_4rem_4rem_10rem] gap-4 px-4 py-2 border-b border-slate-700 bg-slate-800/30 text-xs font-exo font-semibold text-slate-400 uppercase tracking-wider">
          <span>📌 Pinned Topics</span><span class="text-center">Replies</span><span class="text-center">Views</span><span class="text-right">Last Post</span>
        </div>
        <div class="divide-y divide-slate-700">
          <!-- t1 announcement -->
          <div class="topic-row group hover:bg-slate-800/30 transition-colors" data-search="welcome to the new forums announcement welcome">
            <div class="grid items-center gap-4 px-4 py-3 sm:grid-cols-[minmax(0,1fr)_4rem_4rem_10rem]">
              <a href="{{ route('forum.thread') }}" class="min-w-0">
                <div class="flex items-center gap-2 mb-1 flex-wrap">
                  <svg class="h-3 w-3 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/></svg>
                  <svg class="h-3 w-3 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"/></svg>
                  <h3 class="font-exo text-sm font-medium truncate">Welcome to the new forums!</h3>
                  <span class="inline-flex items-center px-1.5 py-0 rounded text-[9px] bg-amber-500/20 text-amber-300 border border-amber-500/40">Announcement</span>
                  <span class="inline-flex items-center px-1.5 py-0 rounded text-[9px] bg-amber-400/20 text-amber-400 border border-amber-400/30">Sticky</span>
                </div>
                <div class="flex items-center gap-2 flex-wrap">
                  <span class="text-xs text-slate-400">by <span class="text-amber-400">Captain Sarah Chen</span></span>
                  <span class="inline-flex px-1.5 py-0 rounded text-[10px] border border-red-500/30 bg-red-500/20 text-red-400 capitalize">admin</span>
                  <span class="text-xs text-slate-400">· Mar 18</span>
                  <span class="inline-flex px-1.5 py-0 rounded text-[10px] bg-slate-800 text-slate-300">announcement</span>
                  <span class="inline-flex px-1.5 py-0 rounded text-[10px] bg-slate-800 text-slate-300">welcome</span>
                </div>
              </a>
              <div class="hidden sm:block text-center text-sm"><div class="font-semibold">12</div><div class="text-[10px] text-slate-400">Replies</div></div>
              <div class="hidden sm:block text-center text-sm"><div class="font-semibold">245</div><div class="text-[10px] text-slate-400">Views</div></div>
              <div class="hidden sm:block text-right text-xs text-slate-400"><div class="flex items-center gap-1 justify-end"><svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Mar 18</div><div>by Jake Rivera</div></div>
            </div>
          </div>
          <!-- t2 locked rules -->
          <div class="topic-row group hover:bg-slate-800/30 transition-colors" data-search="community guidelines rules pinned">
            <div class="grid items-center gap-4 px-4 py-3 sm:grid-cols-[minmax(0,1fr)_4rem_4rem_10rem]">
              <a href="forum-thread.html?id=t2" class="min-w-0">
                <div class="flex items-center gap-2 mb-1 flex-wrap">
                  <svg class="h-3 w-3 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"/></svg>
                  <svg class="h-3 w-3 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                  <h3 class="font-exo text-sm font-medium truncate">Community Guidelines &amp; Rules</h3>
                  <span class="inline-flex items-center px-1.5 py-0 rounded text-[9px] bg-amber-400/20 text-amber-400 border border-amber-400/30">Sticky</span>
                  <span class="inline-flex items-center px-1.5 py-0 rounded text-[9px] bg-slate-800 text-slate-300 border border-slate-600">Locked</span>
                </div>
                <div class="flex items-center gap-2 flex-wrap">
                  <span class="text-xs text-slate-400">by <span class="text-amber-400">Captain Sarah Chen</span></span>
                  <span class="inline-flex px-1.5 py-0 rounded text-[10px] border border-red-500/30 bg-red-500/20 text-red-400 capitalize">admin</span>
                  <span class="text-xs text-slate-400">· Mar 15</span>
                  <span class="inline-flex px-1.5 py-0 rounded text-[10px] bg-slate-800 text-slate-300">rules</span>
                </div>
              </a>
              <div class="hidden sm:block text-center text-sm"><div class="font-semibold">3</div></div>
              <div class="hidden sm:block text-center text-sm"><div class="font-semibold">189</div></div>
              <div class="hidden sm:block text-right text-xs text-slate-400"><div>Mar 15</div><div>by Commander Voss</div></div>
            </div>
          </div>
        </div>
      </div>

      <!-- Regular topics -->
      <div class="bg-slate-900/50 border border-slate-700 rounded-lg overflow-hidden">
        <div class="hidden sm:grid grid-cols-[minmax(0,1fr)_4rem_4rem_10rem] gap-4 px-4 py-2 border-b border-slate-700 bg-slate-800/30 text-xs font-exo font-semibold text-slate-400 uppercase tracking-wider">
          <span>Topics</span><span class="text-center">Replies</span><span class="text-center">Views</span><span class="text-right">Last Post</span>
        </div>
        <div id="topicList" class="divide-y divide-slate-700">
          <div class="topic-row group hover:bg-slate-800/30 transition-colors" data-search="upcoming 3.24 patch excited patch discussion">
            <div class="grid items-center gap-4 px-4 py-3 sm:grid-cols-[minmax(0,1fr)_4rem_4rem_10rem]">
              <a href="forum-thread.html?id=t3" class="min-w-0">
                <div class="flex items-center gap-2 mb-1 flex-wrap">
                  <span class="h-2 w-2 rounded-full bg-amber-400 flex-shrink-0"></span>
                  <h3 class="font-exo text-sm font-bold truncate">Upcoming 3.24 patch — what are you most excited about?</h3>
                </div>
                <div class="flex items-center gap-2 flex-wrap">
                  <span class="text-xs text-slate-400">by <span class="text-amber-400">Alex Thompson</span></span>
                  <span class="inline-flex px-1.5 py-0 rounded text-[10px] bg-slate-800 text-slate-400 capitalize">member</span>
                  <span class="text-xs text-slate-400">· Mar 17</span>
                  <span class="inline-flex px-1.5 py-0 rounded text-[10px] bg-slate-800 text-slate-300">patch</span>
                  <span class="inline-flex px-1.5 py-0 rounded text-[10px] bg-slate-800 text-slate-300">discussion</span>
                </div>
              </a>
              <div class="hidden sm:block text-center text-sm"><div class="font-semibold">18</div></div>
              <div class="hidden sm:block text-center text-sm"><div class="font-semibold">156</div></div>
              <div class="hidden sm:block text-right text-xs text-slate-400"><div>Mar 18</div><div>by Maria Santos</div></div>
            </div>
          </div>
        </div>
        <div id="noTopics" class="hidden p-8 text-center text-slate-400 font-exo">No topics found.</div>
      </div>
    </div>
  </div>

</x-layouts.main>