<x-layouts.main :title="__('Forum')">

  <div class="pt-20 pb-16">
    <div class="container mx-auto px-4 max-w-5xl">
      <div class="mb-6 flex items-center gap-2 text-sm text-slate-400 flex-wrap">
        <a href="{{ route('home') }}" class="hover:text-amber-400">Home</a><span>›</span>
        <a href="{{ route('forum.index') }}" class="hover:text-amber-400">Forum</a><span>›</span>
        <a href="{{ route('forum.category') }}" class="hover:text-amber-400">General Discussion</a><span>›</span>
        <span class="text-slate-100 truncate max-w-[200px]">Welcome to the new forums!</span>
      </div>

      <div class="mb-6">
        <div class="flex items-center gap-2 mb-2 flex-wrap">
          <span class="inline-flex items-center px-2 py-0.5 rounded text-xs bg-amber-500/20 text-amber-300 border border-amber-500/40">
            <svg class="h-3 w-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/></svg>
            Announcement
          </span>
          <span class="inline-flex items-center px-2 py-0.5 rounded text-xs bg-amber-400/20 text-amber-400 border border-amber-400/30">
            <svg class="h-3 w-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"/></svg>
            Pinned
          </span>
          <span class="inline-flex items-center px-2 py-0.5 rounded text-xs border border-slate-600 text-slate-300">announcement</span>
          <span class="inline-flex items-center px-2 py-0.5 rounded text-xs border border-slate-600 text-slate-300">welcome</span>
        </div>
        <h1 class="font-orbitron text-2xl md:text-3xl font-bold mb-2">Welcome to the new forums!</h1>
        <div class="flex items-center gap-4 text-sm text-slate-400 flex-wrap">
          <span class="flex items-center gap-1"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>245 views</span>
          <span class="flex items-center gap-1"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>4 replies</span>
          <span class="flex items-center gap-1"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>March 18, 2024</span>
        </div>
      </div>

      <!-- Original post -->
      <article class="mb-4 bg-slate-900/40 border border-amber-500/30 rounded-lg overflow-hidden">
        <div class="flex flex-col sm:flex-row">
          <aside class="sm:w-52 flex-shrink-0 p-4 sm:border-r border-slate-700 bg-slate-900/60 flex sm:flex-col items-center gap-3 sm:py-5">
            <a href="user-profile.html">
              <div class="h-16 w-16 rounded-full border border-amber-500/30 bg-amber-500/10 flex items-center justify-center font-orbitron text-lg text-amber-400">CS</div>
            </a>
            <div class="sm:text-center min-w-0">
              <a href="user-profile.html" class="font-orbitron font-bold text-sm hover:text-amber-400 block truncate">Captain Sarah Chen</a>
              <div class="mt-1 flex sm:justify-center"><span class="inline-flex px-1.5 py-0 rounded text-[10px] border border-red-500/30 bg-red-500/20 text-red-400 capitalize">admin</span></div>
              <div class="mt-2 flex items-center justify-center gap-1 text-xs">
                <svg class="h-3 w-3 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg>
                <span class="text-amber-400 font-exo font-semibold">Imperator</span>
              </div>
              <div class="mt-2 flex flex-wrap gap-1 justify-center">
                <span class="inline-flex px-1 py-0 rounded text-[9px] border border-amber-500/30 text-amber-300 bg-amber-500/5">Founder</span>
                <span class="inline-flex px-1 py-0 rounded text-[9px] border border-amber-500/30 text-amber-300 bg-amber-500/5">Combat Ace</span>
              </div>
              <div class="mt-3 pt-3 border-t border-slate-700 space-y-0.5 text-[11px] text-slate-400">
                <div><span class="text-slate-200 font-semibold">842</span> posts</div>
                <div>Joined Apr 2022</div>
              </div>
            </div>
          </aside>
          <div class="flex-1 p-4 sm:p-5 min-w-0">
            <div class="flex items-center justify-between mb-3">
              <span class="text-xs text-slate-400 flex items-center gap-1"><svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg> March 18, 2024</span>
            </div>
            <div class="text-slate-200 font-exo text-sm leading-relaxed whitespace-pre-line mb-4">Welcome everyone to the brand new Imperial Arms community forums! This is the place to discuss all things related to our organization, plan operations, share builds, and connect with fellow members.

Please take a moment to read the community guidelines pinned below. We want this to be a welcoming and productive space for everyone.

Fly safe, citizens. o7</div>
            <hr class="border-slate-700 mb-3" />
            <div class="flex items-center gap-1 flex-wrap text-xs">
              <button class="inline-flex items-center h-7 px-2 rounded hover:bg-slate-800 text-slate-300" onclick="likePost(this)"><svg class="h-3 w-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"/></svg><span class="like-count">0</span></button>
              <button class="inline-flex items-center h-7 px-2 rounded hover:bg-slate-800 text-slate-300" onclick="quoteReply('Captain Sarah Chen')"><svg class="h-3 w-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg> Quote</button>
              <button class="inline-flex items-center h-7 px-2 rounded hover:bg-slate-800 text-slate-300">Edit</button>
              <button class="inline-flex items-center h-7 px-2 rounded hover:bg-slate-800 text-slate-300">Report</button>
            </div>
          </div>
        </div>
      </article>

      <!-- Replies -->
      <div class="space-y-4 mb-8">
        <h2 class="font-exo text-sm font-semibold text-slate-400 uppercase tracking-wider">Replies (4)</h2>

        <article class="bg-slate-900/40 border border-slate-700 rounded-lg overflow-hidden">
          <div class="flex flex-col sm:flex-row">
            <aside class="sm:w-52 p-4 sm:border-r border-slate-700 bg-slate-900/60 flex sm:flex-col items-center gap-3 sm:py-5">
              <div class="h-16 w-16 rounded-full border border-amber-500/30 bg-amber-500/10 flex items-center justify-center font-orbitron text-lg text-amber-400">CV</div>
              <div class="sm:text-center">
                <div class="font-orbitron font-bold text-sm">Commander Voss</div>
                <span class="inline-flex mt-1 px-1.5 py-0 rounded text-[10px] border border-amber-400/30 bg-amber-400/20 text-amber-400 capitalize">moderator</span>
                <div class="mt-2 text-xs text-amber-400 font-semibold">Commander</div>
                <div class="mt-3 pt-3 border-t border-slate-700 text-[11px] text-slate-400"><span class="text-slate-200 font-semibold">521</span> posts</div>
              </div>
            </aside>
            <div class="flex-1 p-4 sm:p-5">
              <span class="text-xs text-slate-400">March 18, 2024</span>
              <p class="text-slate-200 text-sm leading-relaxed mt-3 mb-4">Great to see the forums up and running! Looking forward to better coordination here.</p>
              <hr class="border-slate-700 mb-3" />
              <button class="inline-flex items-center h-7 px-2 rounded hover:bg-slate-800 text-slate-300 text-xs" onclick="likePost(this)"><svg class="h-3 w-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"/></svg><span class="like-count">8</span></button>
            </div>
          </div>
        </article>

        <article class="bg-slate-900/40 border border-slate-700 rounded-lg overflow-hidden">
          <div class="flex flex-col sm:flex-row">
            <aside class="sm:w-52 p-4 sm:border-r border-slate-700 bg-slate-900/60 flex sm:flex-col items-center gap-3 sm:py-5">
              <div class="h-16 w-16 rounded-full border border-amber-500/30 bg-amber-500/10 flex items-center justify-center font-orbitron text-lg text-amber-400">AT</div>
              <div class="sm:text-center">
                <div class="font-orbitron font-bold text-sm">Alex Thompson</div>
                <span class="inline-flex mt-1 px-1.5 py-0 rounded text-[10px] bg-slate-800 text-slate-400 capitalize">member</span>
                <div class="mt-2 text-xs text-amber-400 font-semibold">Veteran Pilot</div>
              </div>
            </aside>
            <div class="flex-1 p-4 sm:p-5">
              <span class="text-xs text-slate-400">March 18, 2024</span>
              <p class="text-slate-200 text-sm leading-relaxed mt-3 mb-4">Finally! This is going to be so much better than Discord for longer discussions. Thanks for setting this up.</p>
              <hr class="border-slate-700 mb-3" />
              <button class="inline-flex items-center h-7 px-2 rounded hover:bg-slate-800 text-slate-300 text-xs" onclick="likePost(this)"><svg class="h-3 w-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"/></svg><span class="like-count">5</span></button>
            </div>
          </div>
        </article>

        <article class="bg-slate-900/40 border border-slate-700 rounded-lg overflow-hidden">
          <div class="flex flex-col sm:flex-row">
            <aside class="sm:w-52 p-4 sm:border-r border-slate-700 bg-slate-900/60 flex sm:flex-col items-center gap-3 sm:py-5">
              <div class="h-16 w-16 rounded-full border border-amber-500/30 bg-amber-500/10 flex items-center justify-center font-orbitron text-lg text-amber-400">MS</div>
              <div class="sm:text-center">
                <div class="font-orbitron font-bold text-sm">Maria Santos</div>
                <span class="inline-flex mt-1 px-1.5 py-0 rounded text-[10px] bg-slate-800 text-slate-400 capitalize">member</span>
                <div class="mt-2 text-xs text-amber-400 font-semibold">Veteran Pilot</div>
              </div>
            </aside>
            <div class="flex-1 p-4 sm:p-5">
              <span class="text-xs text-slate-400">March 18, 2024</span>
              <p class="text-slate-200 text-sm leading-relaxed mt-3 mb-4">Love it! Can we get a dedicated trading subforum too?</p>
              <hr class="border-slate-700 mb-3" />
              <button class="inline-flex items-center h-7 px-2 rounded hover:bg-slate-800 text-slate-300 text-xs" onclick="likePost(this)"><svg class="h-3 w-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"/></svg><span class="like-count">3</span></button>
            </div>
          </div>
        </article>

        <article class="bg-slate-900/40 border border-slate-700 rounded-lg overflow-hidden">
          <div class="flex flex-col sm:flex-row">
            <aside class="sm:w-52 p-4 sm:border-r border-slate-700 bg-slate-900/60 flex sm:flex-col items-center gap-3 sm:py-5">
              <div class="h-16 w-16 rounded-full border border-amber-500/30 bg-amber-500/10 flex items-center justify-center font-orbitron text-lg text-amber-400">JR</div>
              <div class="sm:text-center">
                <div class="font-orbitron font-bold text-sm">Jake Rivera</div>
                <span class="inline-flex mt-1 px-1.5 py-0 rounded text-[10px] bg-slate-800 text-slate-400 capitalize">member</span>
                <div class="mt-2 text-xs text-amber-400 font-semibold">Recruit</div>
              </div>
            </aside>
            <div class="flex-1 p-4 sm:p-5">
              <span class="text-xs text-slate-400">March 18, 2024</span>
              <p class="text-slate-200 text-sm leading-relaxed mt-3 mb-4">New member here — this place looks awesome! o7</p>
              <hr class="border-slate-700 mb-3" />
              <button class="inline-flex items-center h-7 px-2 rounded hover:bg-slate-800 text-slate-300 text-xs" onclick="likePost(this)"><svg class="h-3 w-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"/></svg><span class="like-count">6</span></button>
            </div>
          </div>
        </article>
      </div>

      <!-- Reply form -->
      <div class="bg-slate-900/50 border border-slate-700 rounded-lg p-6">
        <h3 class="font-orbitron font-semibold mb-3">Post a Reply</h3>
        <textarea id="replyContent" rows="5" placeholder="Write your reply..." maxlength="2000" class="w-full font-exo mb-3 rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-amber-400"></textarea>
        <button onclick="postReply()" class="inline-flex items-center px-4 py-2 bg-amber-400 text-slate-900 rounded-md text-sm font-exo font-medium hover:bg-amber-300">
          <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
          Post Reply
        </button>
      </div>
    </div>
  </div>

  <script>
    function likePost(btn) {
      if (btn.dataset.liked) return;
      btn.dataset.liked = '1';
      const count = btn.querySelector('.like-count');
      count.textContent = String(parseInt(count.textContent || '0', 10) + 1);
      btn.classList.add('text-amber-400');
    }
    function quoteReply(author) {
      const ta = document.getElementById('replyContent');
      ta.value = `[quote="${author}"]...[/quote]\n\n` + ta.value;
      ta.focus();
    }
    function postReply() {
      const ta = document.getElementById('replyContent');
      if (!ta.value.trim()) { alert('Empty reply'); return; }
      alert('Reply posted!');
      ta.value = '';
    }
  </script>

</x-layouts.main>