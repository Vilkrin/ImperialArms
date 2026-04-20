<div>
    @if($showBanner)
        <div class="fixed bottom-4 right-4 z-[100] w-full max-w-sm rounded-2xl border border-slate-700 bg-slate-900/95 shadow-2xl backdrop-blur">
            <div class="p-5">
                <h3 class="text-sm font-semibold text-white">
                    We use cookies
                </h3>

                <p class="mt-2 text-sm leading-6 text-slate-300">
                    We use cookies to improve your experience, analyse site traffic, and support core site functionality.
                </p>

                <div class="mt-4 space-y-2">
                    <button
                        type="button"
                        wire:click="acceptAll"
                        class="w-full rounded-lg bg-slate-700 px-4 py-2 text-sm font-medium text-white transition hover:bg-slate-600"
                    >
                        Accept
                    </button>

                    <button
                        type="button"
                        wire:click="rejectAll"
                        class="w-full rounded-lg bg-slate-800 px-4 py-2 text-sm font-medium text-slate-200 ring-1 ring-slate-600 transition hover:bg-slate-700"
                    >
                        Reject
                    </button>

                    <button
                        type="button"
                        wire:click="openPreferences"
                        class="w-full rounded-lg bg-slate-100 px-4 py-2 text-sm font-medium text-slate-900 transition hover:bg-white"
                    >
                        Manage preferences
                    </button>
                </div>
            </div>
        </div>
    @endif

    @if($showPreferences)
        <div class="fixed inset-0 z-[110] flex items-center justify-center bg-slate-950/70 p-4 backdrop-blur-sm">
            <div class="w-full max-w-2xl rounded-2xl border border-slate-700 bg-white shadow-2xl">
                <div class="flex items-center justify-between border-b border-slate-200 px-6 py-4">
                    <h2 class="text-base font-semibold text-slate-900">
                        Cookie preferences
                    </h2>

                    <button
                        type="button"
                        wire:click="closePreferences"
                        class="rounded-md p-2 text-slate-500 transition hover:bg-slate-100 hover:text-slate-900"
                    >
                        ✕
                    </button>
                </div>

                <div class="space-y-6 px-6 py-5">
                    <div class="border-b border-slate-200 pb-4">
                        <div class="flex items-start justify-between gap-4">
                            <div>
                                <h3 class="text-sm font-medium text-slate-900">Necessary cookies</h3>
                                <p class="mt-1 text-sm text-slate-600">
                                    These are required for the website to function properly.
                                </p>
                            </div>

                            <div class="shrink-0 rounded-full bg-slate-200 px-3 py-1 text-xs font-medium text-slate-700">
                                Always active
                            </div>
                        </div>
                    </div>

                    <div class="border-b border-slate-200 pb-4">
                        <div class="flex items-start justify-between gap-4">
                            <div>
                                <h3 class="text-sm font-medium text-slate-900">Analytics cookies</h3>
                                <p class="mt-1 text-sm text-slate-600">
                                    These help us understand how visitors use the website.
                                </p>
                            </div>

                            <label class="relative inline-flex cursor-pointer items-center">
                                <input
                                    type="checkbox"
                                    wire:model.live="preferences.analytics"
                                    class="peer sr-only"
                                >
                                <div class="h-6 w-11 rounded-full bg-slate-300 transition peer-checked:bg-slate-800 after:absolute after:left-[2px] after:top-[2px] after:h-5 after:w-5 after:rounded-full after:bg-white after:transition-all peer-checked:after:translate-x-full"></div>
                            </label>
                        </div>
                    </div>

                    <div>
                        <div class="flex items-start justify-between gap-4">
                            <div>
                                <h3 class="text-sm font-medium text-slate-900">Marketing cookies</h3>
                                <p class="mt-1 text-sm text-slate-600">
                                    These are used for advertising, embeds, and third-party tracking.
                                </p>
                            </div>

                            <label class="relative inline-flex cursor-pointer items-center">
                                <input
                                    type="checkbox"
                                    wire:model.live="preferences.marketing"
                                    class="peer sr-only"
                                >
                                <div class="h-6 w-11 rounded-full bg-slate-300 transition peer-checked:bg-slate-800 after:absolute after:left-[2px] after:top-[2px] after:h-5 after:w-5 after:rounded-full after:bg-white after:transition-all peer-checked:after:translate-x-full"></div>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-between gap-3 border-t border-slate-200 px-6 py-4">
                    <div class="flex gap-3">
                        <button
                            type="button"
                            wire:click="acceptAll"
                            class="rounded-lg bg-slate-800 px-4 py-2 text-sm font-medium text-white transition hover:bg-slate-700"
                        >
                            Accept
                        </button>

                        <button
                            type="button"
                            wire:click="rejectAll"
                            class="rounded-lg border border-slate-300 bg-white px-4 py-2 text-sm font-medium text-slate-700 transition hover:bg-slate-50"
                        >
                            Reject
                        </button>
                    </div>

                    <button
                        type="button"
                        wire:click="savePreferences"
                        class="rounded-lg bg-slate-100 px-4 py-2 text-sm font-medium text-slate-900 transition hover:bg-slate-200"
                    >
                        Save preferences
                    </button>
                </div>
            </div>
        </div>
    @endif
</div>