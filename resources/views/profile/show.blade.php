<x-layouts.main :title='Profile'>

<div class="bg-slate-950 text-slate-200">
    <div class="mx-auto max-w-[1420px] px-6 py-8">

        {{-- Connected Profile Shell --}}
        <div class="overflow-hidden rounded-lg border border-slate-700/70 bg-slate-950/90 shadow-2xl">

            {{-- Breadcrumb --}}
            <div class="border-b border-slate-800/80 px-8 py-4 text-xs uppercase tracking-wide text-slate-400">
                <div class="flex items-center gap-2">
                    <a href="{{ route('home') }}" class="hover:text-amber-400">Home</a>
                    <span>›</span>
                    <a href="#" class="hover:text-amber-400">Members</a>
                    <span>›</span>
                    <span class="text-amber-400">Darth_Vexor</span>
                </div>
            </div>

            {{-- Hero --}}
            <section
                class="relative min-h-[340px] bg-cover bg-center"
                style="background-image:
                    linear-gradient(to right, rgba(2,6,23,.98) 0%, rgba(2,6,23,.90) 34%, rgba(2,6,23,.55) 58%, rgba(2,6,23,.15) 100%),
                    url('{{ asset("images/mockups/profile/banner.jpg") }}');"
            >
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-transparent to-transparent"></div>

                <div class="relative z-10 flex min-h-[340px] items-center px-8 py-8">
                    <div class="flex items-center gap-10">

                        <div class="relative shrink-0">
                            <img
                                src="{{ asset("images/mockups/profile/avatar.jpg") }}"
                                alt="Darth_Vexor"
                                class="h-52 w-52 rounded-md border border-amber-400/70 bg-slate-900 object-cover shadow-[0_0_35px_rgba(251,191,36,0.18)]"
                            >

                            <div class="absolute -bottom-3 -left-3 flex h-12 w-12 items-center justify-center rounded-full border border-amber-400/60 bg-slate-950 shadow-lg">
                                <span class="text-lg text-amber-400">✦</span>
                            </div>
                        </div>

                        <div class="max-w-2xl">
                            <div class="flex items-center gap-3">
                                <h1 class="text-4xl font-bold tracking-tight text-white">Darth_Vexor</h1>
                                <span class="rounded-full bg-amber-400 px-2 py-1 text-xs font-bold text-slate-950">✓</span>
                            </div>

                            <p class="mt-2 text-xl text-amber-400">Imperial Admiral</p>

                            <div class="mt-4 flex flex-wrap gap-5 text-sm text-slate-400">
                                <span>Member since May 14, 2022</span>
                                <span class="text-green-400">● Last seen 2 hours ago</span>
                            </div>

                            <p class="mt-6 max-w-xl italic text-slate-300">
                                “Through order, we bring strength. Through strength, we secure the verse.”
                            </p>

                            <div class="mt-7 flex gap-3">
                                <button class="rounded-md bg-gradient-to-br from-amber-300 to-amber-500 px-7 py-3 text-sm font-semibold uppercase text-slate-950 shadow-lg shadow-amber-950/30">
                                    Send Message
                                </button>

                                <button class="rounded-md border border-slate-600/90 bg-slate-950/40 px-7 py-3 text-sm font-semibold uppercase text-slate-200 hover:border-amber-400 hover:text-amber-400">
                                    Follow
                                </button>

                                <button class="rounded-md border border-slate-600/90 bg-slate-950/40 px-4 py-3 text-slate-200 hover:border-amber-400 hover:text-amber-400">
                                    ...
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            {{-- Tabs --}}
            <div class="flex border-y border-slate-800 bg-slate-950/95 px-8">
                @foreach (['Overview', 'Ships', 'Blogs', 'Activity', 'Medals', 'Friends'] as $tab)
                    <button class="border-b-2 px-8 py-5 text-sm uppercase tracking-wide transition
                        {{ $loop->first ? 'border-amber-400 text-amber-400' : 'border-transparent text-slate-400 hover:text-amber-400' }}">
                        {{ $tab }}
                    </button>
                @endforeach
            </div>

            {{-- Content Background --}}
            <div class="bg-slate-950/95 p-6">
                <div class="grid gap-6 lg:grid-cols-[minmax(0,1fr)_360px]">

                    {{-- Main Column --}}
                    <main class="space-y-6">

                        {{-- About --}}
                        <section class="overflow-hidden rounded-lg border border-slate-700/70 bg-slate-900/60">
                            <div class="border-b border-slate-800 px-6 py-4">
                                <h2 class="text-sm font-semibold uppercase tracking-wide text-white">
                                    About Darth_Vexor
                                </h2>
                            </div>

                            <div class="relative min-h-[300px] p-6">
                                <div class="pointer-events-none absolute bottom-4 right-10 text-[260px] leading-none text-amber-400/5">
                                    ✦
                                </div>

                                <p class="relative max-w-2xl text-sm leading-7 text-slate-300">
                                    Veteran of countless campaigns and a strategist of the highest order.
                                    Loyal to Imperial Arms and dedicated to its eternal dominance across the stars.
                                </p>

                                <div class="relative mt-10 grid max-w-3xl gap-x-20 gap-y-7 text-sm sm:grid-cols-2">
                                    <div>
                                        <p class="text-xs uppercase tracking-wide text-slate-500">Location</p>
                                        <p class="mt-1 text-white">Bastion, Stanton System</p>
                                    </div>

                                    <div>
                                        <p class="text-xs uppercase tracking-wide text-slate-500">Company</p>
                                        <p class="mt-1 text-white">The Black Cohort</p>
                                    </div>

                                    <div>
                                        <p class="text-xs uppercase tracking-wide text-slate-500">Role</p>
                                        <p class="mt-1 text-white">Strategist</p>
                                    </div>

                                    <div>
                                        <p class="text-xs uppercase tracking-wide text-slate-500">Interests</p>
                                        <p class="mt-1 text-white">Fleet Command, PvP, Lore, Exploration</p>
                                    </div>
                                </div>
                            </div>
                        </section>

                        {{-- Ships --}}
                        <section class="rounded-lg border border-slate-700/70 bg-slate-900/60 p-6">
                            <div class="mb-5 flex items-center justify-between">
                                <h2 class="text-sm font-semibold uppercase tracking-wide text-white">Ships</h2>
                                <a href="#" class="text-xs uppercase text-amber-400 hover:text-amber-300">View All Ships →</a>
                            </div>

                            <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                                @foreach ([
                                    ['Aegis Idris-P', 'Corvette', 'Flagship', 'idris.jpg'],
                                    ['Anvil F7C-M', 'Super Hornet Mk II', 'Personal', 'hornet.jpg'],
                                    ['Drake Vulture', 'Salvage Ship', 'Personal', 'vulture.jpg'],
                                    ['RSI Polaris', 'Corvette', 'Org Hangar', 'polaris.jpg'],
                                ] as $ship)
                                    <article class="overflow-hidden rounded-md border border-slate-700 bg-slate-950/70 transition hover:border-amber-400/60">
                                        <img src="{{ asset("images/mockups/ships/" . $ship[3]) }}" alt="{{ $ship[0] }}" class="h-40 w-full object-cover">

                                        <div class="p-4">
                                            <h3 class="text-sm font-semibold uppercase text-white">{{ $ship[0] }}</h3>
                                            <p class="mt-1 text-sm text-slate-400">{{ $ship[1] }}</p>
                                            <p class="mt-3 text-xs uppercase text-slate-500">{{ $ship[2] }}</p>
                                        </div>
                                    </article>
                                @endforeach
                            </div>
                        </section>

                        {{-- Blogs --}}
                        <section class="rounded-lg border border-slate-700/70 bg-slate-900/60 p-6">
                            <div class="mb-5 flex items-center justify-between">
                                <h2 class="text-sm font-semibold uppercase tracking-wide text-white">Blog Posts</h2>
                                <a href="#" class="text-xs uppercase text-amber-400 hover:text-amber-300">View All Blogs →</a>
                            </div>

                            <div class="space-y-5">
                                @foreach ([
                                    ['Operation: Pyro Shield', 'A recap of our defensive operations in Pyro. Against all odds, Imperial Arms held the line.', 'May 10, 2024', 'pyro-shield.jpg'],
                                    ['Fleet Tactics: Breaking the Line', 'Insight into formation breaking maneuvers and overwhelming the enemy through superior coordination.', 'Apr 28, 2024', 'fleet-tactics.jpg'],
                                    ['Training the Next Generation', 'Building our members into elite pilots and leaders. Investment in training is investment in victory.', 'Mar 15, 2024', 'training.jpg'],
                                ] as $post)
                                    <article class="grid gap-5 border-b border-slate-800 pb-5 last:border-0 md:grid-cols-[200px_1fr]">
                                        <img src="{{ asset("images/mockups/blogs/" . $post[3]) }}" alt="{{ $post[0] }}" class="h-28 w-full rounded-md object-cover">

                                        <div>
                                            <h3 class="text-lg font-semibold text-white">{{ $post[0] }}</h3>
                                            <p class="mt-2 text-sm leading-6 text-slate-400">{{ $post[1] }}</p>

                                            <div class="mt-3 flex items-center justify-between text-xs text-slate-500">
                                                <span>{{ $post[2] }}</span>
                                                <span>👁 2.1K &nbsp; 💬 142</span>
                                            </div>
                                        </div>
                                    </article>
                                @endforeach
                            </div>

                            <button class="mt-4 w-full rounded-md border border-slate-700 py-3 text-xs font-semibold uppercase text-amber-400 hover:border-amber-400">
                                View All Blog Posts →
                            </button>
                        </section>

                    </main>

                    {{-- Sidebar --}}
                    <aside class="space-y-6">
                        <section class="rounded-lg border border-slate-700/70 bg-slate-900/60">
                            <div class="border-b border-slate-800 px-6 py-4">
                                <h2 class="text-sm font-semibold uppercase tracking-wide text-white">Stats Overview</h2>
                            </div>

                            <div class="divide-y divide-slate-800 px-6 py-3 text-sm">
                                @foreach ([
                                    ['Total Ships', '24'],
                                    ['Blog Posts', '18'],
                                    ['Forum Posts', '1,247'],
                                    ['Reactions Received', '3,892'],
                                    ['Medals Earned', '32'],
                                    ['Rank', '#128'],
                                ] as $stat)
                                    <div class="flex items-center justify-between py-4">
                                        <span class="uppercase text-slate-400">{{ $stat[0] }}</span>
                                        <span class="text-lg text-amber-400">{{ $stat[1] }}</span>
                                    </div>
                                @endforeach

                                <p class="pb-4 text-xs text-slate-500">Top 1% of Imperial Arms</p>
                            </div>
                        </section>

                        <section class="rounded-lg border border-slate-700/70 bg-slate-900/60 p-6">
                            <div class="mb-5 flex items-center justify-between">
                                <h2 class="text-sm font-semibold uppercase tracking-wide text-white">Medals</h2>
                                <a href="#" class="text-xs uppercase text-amber-400">View All →</a>
                            </div>

                            <div class="grid grid-cols-3 gap-5">
                                @foreach (range(1, 6) as $medal)
                                    <img src="{{ asset("images/mockups/medals/medal-" . $medal . ".png") }}" alt="Medal" class="aspect-square rounded object-cover">
                                @endforeach
                            </div>
                        </section>

                        <section class="rounded-lg border border-slate-700/70 bg-slate-900/60 p-6">
                            <h2 class="mb-5 text-sm font-semibold uppercase tracking-wide text-white">Company</h2>

                            <div class="flex items-center gap-4">
                                <img src="{{ asset("images/mockups/company/black-cohort.png") }}" alt="The Black Cohort" class="h-20 w-20 rounded-full border border-red-500/50 object-cover">

                                <div>
                                    <h3 class="font-semibold text-white">The Black Cohort</h3>
                                    <p class="text-sm text-amber-400">Executor</p>
                                </div>
                            </div>

                            <div class="mt-6 grid grid-cols-3 text-center">
                                <div><p class="text-lg text-amber-400">142</p><p class="text-xs text-slate-500">Members</p></div>
                                <div><p class="text-lg text-amber-400">87</p><p class="text-xs text-slate-500">Ships</p></div>
                                <div><p class="text-lg text-amber-400">#7</p><p class="text-xs text-slate-500">Rank</p></div>
                            </div>

                            <a href="#" class="mt-6 block rounded-md border border-slate-700 py-3 text-center text-xs font-semibold uppercase text-amber-400 hover:border-amber-400">
                                View Company →
                            </a>
                        </section>

                        <section class="rounded-lg border border-slate-700/70 bg-slate-900/60 p-6">
                            <h2 class="mb-5 text-sm font-semibold uppercase tracking-wide text-white">Recent Activity</h2>

                            <div class="space-y-5 text-sm">
                                @foreach ([
                                    ['Posted in forum:', 'Fleet Tactics Discussion', '2 hours ago'],
                                    ['Published a new blog post:', 'Operation: Pyro Shield', '1 day ago'],
                                    ['Updated ship:', 'Aegis Idris-P', '2 days ago'],
                                    ['Earned medal:', 'Strategic Commander', '3 days ago'],
                                ] as $activity)
                                    <div>
                                        <p class="text-slate-300">
                                            {{ $activity[0] }}
                                            <span class="text-amber-400">{{ $activity[1] }}</span>
                                        </p>
                                        <p class="mt-1 text-xs text-slate-500">{{ $activity[2] }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </section>
                    </aside>

                </div>
            </div>

        </div>
    </div>
</div>

</x-layouts.main>