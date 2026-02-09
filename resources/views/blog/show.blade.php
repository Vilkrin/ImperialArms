<x-layouts.main :title="__('Blog')">

  <!-- Hero Section -->
  <div class="bg-slate-900/80 pt-24 pb-10 border-b border-slate-800">
    <div class="container mx-auto px-4">
          <div class="max-w-3xl mx-auto">
        <a href="blog.html" class="inline-flex items-center text-sm text-slate-400 hover:text-amber-400 transition-colors">
          <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
          </svg>
          Back to Blog
        </a>
        <div class="mt-6">
          <span class="inline-flex items-center rounded-full bg-amber-400/10 text-amber-300 px-3 py-1 text-xs font-semibold uppercase tracking-wide">
            Technology
          </span>
          <h1 class="text-3xl md:text-4xl lg:text-5xl font-orbitron font-bold mt-4 mb-4">
            The Future of Deep Space Exploration
          </h1>
          <div class="flex flex-wrap items-center gap-4 text-slate-400 text-sm">
            <div class="flex items-center gap-2">
              <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.655 6.879 1.804M15 11a3 3 0 10-6 0 3 3 0 006 0z"/>
              </svg>
              <span>Captain Sarah Chen</span>
            </div>
            <div class="flex items-center gap-2">
              <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3M4 11h16M5 19h14a2 2 0 002-2v-7H3v7a2 2 0 002 2z"/>
              </svg>
              <span>March 15, 2024</span>
            </div>
            <div class="flex items-center gap-2">
              <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3"/>
              </svg>
              <span>5 min read</span>
            </div>
          </div>
              <!-- Social Share (static version of SocialShare component) -->
              <div class="mt-6 flex flex-wrap items-center gap-3">
                <span class="text-xs uppercase tracking-wide text-slate-500 font-semibold">
                  Share this post
                </span>
                <div class="flex items-center gap-2">
                  <button class="inline-flex items-center gap-1 rounded-md border border-slate-700 bg-slate-900/80 px-3 py-1.5 text-xs font-medium text-slate-100 hover:bg-slate-800 hover:border-amber-400/60 hover:text-amber-300 transition">
                    <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 24 24">
                      <path d="M22.46 6c-.77.35-1.6.58-2.46.69a4.23 4.23 0 001.85-2.33 8.37 8.37 0 01-2.68 1.03 4.19 4.19 0 00-7.14 3.82A11.88 11.88 0 013 4.79a4.18 4.18 0 001.3 5.59 4.17 4.17 0 01-1.9-.53v.05a4.2 4.2 0 003.36 4.11 4.24 4.24 0 01-1.89.07 4.2 4.2 0 003.92 2.91A8.41 8.41 0 012 19.54 11.86 11.86 0 008.29 21.5c7.55 0 11.68-6.26 11.68-11.68 0-.18 0-.36-.01-.54A8.3 8.3 0 0022.46 6z" />
                    </svg>
                    <span>Twitter</span>
                  </button>
                  <button class="inline-flex items-center gap-1 rounded-md border border-slate-700 bg-slate-900/80 px-3 py-1.5 text-xs font-medium text-slate-100 hover:bg-slate-800 hover:border-amber-400/60 hover:text-amber-300 transition">
                    <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 24 24">
                      <path d="M22 12a10 10 0 10-11.5 9.87v-7h-2.1V12h2.1v-2.3c0-2.07 1.23-3.22 3.12-3.22.9 0 1.84.16 1.84.16v2.02h-1.04c-1.03 0-1.35.64-1.35 1.3V12h2.3l-.37 2.87h-1.93v7A10 10 0 0022 12z" />
                    </svg>
                    <span>Facebook</span>
                  </button>
                  <button class="inline-flex items-center gap-1 rounded-md border border-slate-700 bg-slate-900/80 px-3 py-1.5 text-xs font-medium text-slate-100 hover:bg-slate-800 hover:border-amber-400/60 hover:text-amber-300 transition">
                    <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 24 24">
                      <path d="M12 2a10 10 0 00-3.16 19.49c.5.09.68-.22.68-.48v-1.69c-2.78.61-3.37-1.34-3.37-1.34a2.66 2.66 0 00-1.11-1.47c-.91-.62.07-.61.07-.61a2.1 2.1 0 011.54 1.04 2.13 2.13 0 002.91.83 2.14 2.14 0 01.63-1.34c-2.22-.25-4.56-1.11-4.56-4.95a3.88 3.88 0 011.03-2.69 3.6 3.6 0 01.1-2.65s.84-.27 2.75 1.02a9.46 9.46 0 015 0c1.9-1.29 2.74-1.02 2.74-1.02a3.6 3.6 0 01.1 2.65 3.88 3.88 0 011.03 2.69c0 3.85-2.34 4.7-4.57 4.95a2.4 2.4 0 01.69 1.87v2.77c0 .27.18.58.69.48A10 10 0 0012 2z" />
                    </svg>
                    <span>GitHub</span>
                  </button>
                </div>
              </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Featured Image -->
  <div class="container mx-auto px-4 py-8">
    <div class="max-w-4xl mx-auto">
      <div class="aspect-[21/9] rounded-lg overflow-hidden bg-slate-900 border border-slate-800">
        <div class="w-full h-full bg-gradient-to-r from-amber-400/20 via-amber-500/10 to-slate-900/60"></div>
      </div>
    </div>
  </div>

  <main class="container mx-auto px-4 py-12">
    <div class="max-w-3xl mx-auto">
      <!-- Article Content -->
      <article class="prose prose-invert prose-slate max-w-none space-y-4">
        <p class="text-slate-300 leading-relaxed">
          The vastness of space has always called to humanity, beckoning us to explore beyond our terrestrial boundaries. Today, we stand at the precipice of a new era in deep space exploration, one defined by revolutionary propulsion technologies that promise to shrink the cosmic distances that have long separated us from the stars.
        </p>

        <h2 class="text-2xl font-orbitron font-semibold mt-8 mb-3 text-slate-100">
          The Challenge of Distance
        </h2>
        <p class="text-slate-300 leading-relaxed">
          Traditional chemical rockets, while reliable, are simply too slow for meaningful interstellar travel. Even reaching our nearest neighboring star system, Alpha Centauri, would take tens of thousands of years with current technology. This fundamental limitation has driven scientists and engineers to develop entirely new approaches to space propulsion.
        </p>

        <h2 class="text-2xl font-orbitron font-semibold mt-8 mb-3 text-slate-100">
          Ion Propulsion: The Current Frontier
        </h2>
        <p class="text-slate-300 leading-relaxed">
          Ion engines represent one of the most mature advanced propulsion technologies. By accelerating ions through electric fields, these engines achieve exhaust velocities far exceeding chemical rockets. While the thrust is low, the efficiency is remarkable, allowing spacecraft to achieve incredible speeds over extended acceleration periods.
        </p>

        <h2 class="text-2xl font-orbitron font-semibold mt-8 mb-3 text-slate-100">
          Nuclear Thermal Propulsion
        </h2>
        <p class="text-slate-300 leading-relaxed">
          Nuclear thermal rockets offer another promising avenue. By heating propellant with a nuclear reactor, these systems can achieve specific impulses roughly twice that of chemical engines. Organizations across the 'verse are actively developing this technology for missions to distant worlds and beyond.
        </p>

        <h2 class="text-2xl font-orbitron font-semibold mt-8 mb-3 text-slate-100">
          The Promise of Fusion
        </h2>
        <p class="text-slate-300 leading-relaxed">
          Perhaps the most exciting prospect lies in fusion propulsion. If we can harness the same reactions that power the stars, we could potentially reduce travel time to the outer planets from years to months. Several theoretical designs exist, though significant engineering challenges remain before fusion drives become a reality.
        </p>

        <h2 class="text-2xl font-orbitron font-semibold mt-8 mb-3 text-slate-100">
          Looking Ahead
        </h2>
        <p class="text-slate-300 leading-relaxed">
          As we continue to push the boundaries of what's possible, the dream of sending crews to other star systems grows ever closer to reality. The next century may well see the first interstellar probes, powered by technologies we're only beginning to understand today. The stars await—and for the first time in human history, they're within our reach.
        </p>
      </article>

      <!-- Comments Section (static version of BlogComments with reply thread) -->
      <section class="mt-12">
        <h2 class="text-2xl font-orbitron font-semibold mb-6 flex items-center gap-2 text-slate-100">
          <svg class="h-6 w-6 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v7a2 2 0 01-2 2h-2M7 8H5a2 2 0 00-2 2v7a2 2 0 002 2h2m2-5h6M9 5h6a2 2 0 012 2v8a2 2 0 01-2 2H9a2 2 0 01-2-2V7a2 2 0 012-2z"/>
          </svg>
          Comments
        </h2>

        <!-- Comment Form -->
        <div class="bg-slate-900/60 border border-slate-800 rounded-lg mb-8">
          <div class="p-6 border-b border-slate-800">
            <h3 class="text-lg font-orbitron font-semibold text-slate-100">Leave a Comment</h3>
            <p class="mt-1 text-sm text-slate-400">
              Share your thoughts about this article.
            </p>
          </div>
          <div class="p-6">
            <form class="space-y-4">
              <div class="space-y-2">
                <label for="comment-name" class="block text-sm font-medium text-slate-200">Name</label>
                <input id="comment-name" type="text" placeholder="Your name" class="h-10 w-full rounded-md border border-slate-700 bg-slate-950/80 px-3 text-sm text-slate-100 placeholder:text-slate-500 focus:outline-none focus:ring-2 focus:ring-amber-400 focus:ring-offset-2 focus:ring-offset-slate-950" />
              </div>
              <div class="space-y-2">
                <label for="comment-content" class="block text-sm font-medium text-slate-200">Comment</label>
                <textarea id="comment-content" rows="4" placeholder="Share your thoughts..." class="w-full rounded-md border border-slate-700 bg-slate-950/80 px-3 py-2 text-sm text-slate-100 placeholder:text-slate-500 focus:outline-none focus:ring-2 focus:ring-amber-400 focus:ring-offset-2 focus:ring-offset-slate-950"></textarea>
              </div>
              <button type="button" class="inline-flex items-center rounded-md bg-amber-400 text-slate-900 px-4 py-2 text-sm font-medium hover:bg-amber-300 transition">
                Post Comment
              </button>
            </form>
          </div>
        </div>

        <!-- Comments List with reply -->
        <div class="space-y-6">
          <!-- Comment 1 with reply -->
          <div class="bg-slate-900/60 border border-slate-800 rounded-lg">
            <div class="p-6">
              <div class="flex gap-4">
                <div class="w-10 h-10 rounded-full bg-amber-400/15 flex items-center justify-center flex-shrink-0">
                  <svg class="h-5 w-5 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.655 6.879 1.804M15 11a3 3 0 10-6 0 3 3 0 006 0z"/>
                  </svg>
                </div>
                <div class="flex-1 min-w-0">
                  <div class="flex items-center gap-2 mb-1">
                    <span class="font-semibold text-slate-100">Alex Thompson</span>
                    <span class="text-xs text-slate-500">
                      March 16, 2024
                    </span>
                  </div>
                  <p class="text-sm text-slate-300 mb-3">
                    Great article! The section on ion propulsion really helped me understand the current state of space travel technology.
                  </p>
                  <div class="flex items-center gap-4 text-xs">
                    <button class="inline-flex items-center h-8 px-2 rounded-md text-slate-400 hover:text-amber-300 hover:bg-slate-800 transition">
                      <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 9l-3 3m0 0l-3-3m3 3V4m0 8a4 4 0 100 8h4a4 4 0 000-8h-1" />
                      </svg>
                      12
                    </button>
                    <button class="inline-flex items-center h-8 px-2 rounded-md text-slate-400 hover:text-amber-300 hover:bg-slate-800 transition">
                      <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h7l-1-2m1 2l-1 2m10-2h-7m7 0l-1-2m1 2l-1 2" />
                      </svg>
                      Reply
                    </button>
                  </div>

                  <!-- Reply thread -->
                  <div class="mt-4 pl-4 border-l-2 border-slate-800 space-y-4">
                    <div class="flex gap-3">
                      <div class="w-8 h-8 rounded-full bg-amber-400/15 flex items-center justify-center flex-shrink-0">
                        <svg class="h-4 w-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.655 6.879 1.804M15 11a3 3 0 10-6 0 3 3 0 006 0z"/>
                        </svg>
                      </div>
                      <div class="flex-1 min-w-0">
                        <div class="flex items-center gap-2 mb-1">
                          <span class="font-semibold text-sm text-slate-100">Captain Sarah Chen</span>
                          <span class="text-xs text-slate-500">
                            March 16, 2024
                          </span>
                        </div>
                        <p class="text-sm text-slate-300 mb-2">
                          Thank you, Alex! Ion propulsion is indeed fascinating – we're seeing rapid improvements in thrust efficiency every year.
                        </p>
                        <button class="inline-flex items-center h-6 px-2 rounded-md text-xs text-slate-400 hover:text-amber-300 hover:bg-slate-800 transition">
                          <svg class="h-3 w-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 9l-3 3m0 0l-3-3m3 3V4m0 8a4 4 0 100 8h4a4 4 0 000-8h-1" />
                          </svg>
                          5
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Comment 2 -->
          <div class="bg-slate-900/60 border border-slate-800 rounded-lg">
            <div class="p-6">
              <div class="flex gap-4">
                <div class="w-10 h-10 rounded-full bg-amber-400/15 flex items-center justify-center flex-shrink-0">
                  <svg class="h-5 w-5 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.655 6.879 1.804M15 11a3 3 0 10-6 0 3 3 0 006 0z"/>
                  </svg>
                </div>
                <div class="flex-1 min-w-0">
                  <div class="flex items-center gap-2 mb-1">
                    <span class="font-semibold text-slate-100">Maria Santos</span>
                    <span class="text-xs text-slate-500">
                      March 17, 2024
                    </span>
                  </div>
                  <p class="text-sm text-slate-300 mb-3">
                    I'd love to see a follow-up article specifically about fusion propulsion research. Are there any projects currently in development?
                  </p>
                  <div class="flex items-center gap-4 text-xs">
                    <button class="inline-flex items-center h-8 px-2 rounded-md text-slate-400 hover:text-amber-300 hover:bg-slate-800 transition">
                      <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 9l-3 3m0 0l-3-3m3 3V4m0 8a4 4 0 100 8h4a4 4 0 000-8h-1" />
                      </svg>
                      8
                    </button>
                    <button class="inline-flex items-center h-8 px-2 rounded-md text-slate-400 hover:text-amber-300 hover:bg-slate-800 transition">
                      <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h7l-1-2m1 2l-1 2m10-2h-7m7 0l-1-2m1 2l-1 2" />
                      </svg>
                      Reply
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Author Card -->
      <section class="mt-12 bg-slate-900/60 border border-slate-800 rounded-lg">
        <div class="p-6 flex items-center gap-4">
          <div class="w-16 h-16 rounded-full bg-amber-400/20 flex items-center justify-center">
            <svg class="h-8 w-8 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.655 6.879 1.804M15 11a3 3 0 10-6 0 3 3 0 006 0z"/>
            </svg>
          </div>
          <div>
            <h3 class="font-semibold text-lg text-slate-100">Captain Sarah Chen</h3>
            <p class="text-sm text-slate-400">
              Contributing writer at Imperial Arms Fleet. Specialist in deep space exploration and advanced propulsion systems.
            </p>
          </div>
        </div>
      </section>

      <!-- Related Posts -->
      <section class="mt-12">
        <h2 class="text-2xl font-orbitron font-semibold mb-6 text-slate-100">Related Posts</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <!-- Related Post 1 -->
          <article class="bg-slate-900/60 border border-slate-800 rounded-lg overflow-hidden">
            <div class="aspect-video bg-slate-900">
              <div class="w-full h-full bg-gradient-to-br from-amber-400/15 to-transparent"></div>
            </div>
            <div class="p-5">
              <div class="text-sm text-slate-400 mb-2">
                March 12, 2024
              </div>
              <h3 class="text-lg font-semibold mb-1">
                Fleet Tactics: Coordinated Strike Operations
              </h3>
              <a href="blog-post.html" class="inline-flex items-center text-sm text-amber-400 hover:text-amber-300 transition">
                Read article
                <svg class="h-4 w-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
              </a>
            </div>
          </article>

          <!-- Related Post 2 -->
          <article class="bg-slate-900/60 border border-slate-800 rounded-lg overflow-hidden">
            <div class="aspect-video bg-slate-900">
              <div class="w-full h-full bg-gradient-to-br from-amber-400/15 to-transparent"></div>
            </div>
            <div class="p-5">
              <div class="text-sm text-slate-400 mb-2">
                March 10, 2024
              </div>
              <h3 class="text-lg font-semibold mb-1">
                Behind the Scenes: Ship Maintenance
              </h3>
              <a href="blog-post.html" class="inline-flex items-center text-sm text-amber-400 hover:text-amber-300 transition">
                Read article
                <svg class="h-4 w-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
              </a>
            </div>
          </article>
        </div>
      </section>

      <!-- Back to Blog -->
      <div class="mt-12 text-center">
        <a href="blog.html" class="inline-flex items-center justify-center rounded-md border border-slate-700 bg-slate-900/70 px-4 py-2 text-sm font-medium text-slate-100 hover:bg-slate-800 hover:border-amber-400/60 hover:text-amber-300 transition">
          <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
          </svg>
          Back to All Posts
        </a>
      </div>
    </div>
  </main>

</x-layouts.main>