<div>
    @if($showBanner)
        <div class="fixed bottom-4 right-4 z-[100] w-[calc(100%-2rem)] max-w-sm">
            <div class="overflow-hidden rounded-2xl border border-slate-700/80 bg-slate-900/95 shadow-2xl backdrop-blur-md">
                <div class="p-5">
                    <h3 class="text-sm font-semibold text-white">
                        We use cookies
                    </h3>

                    <p class="mt-3 text-sm leading-6 text-slate-300">
                        We use cookies to support core site functionality, improve performance, and understand how visitors use the website.
                    </p>

                    <div class="mt-5 space-y-2">
                        <button
                            type="button"
                            wire:click="acceptAll"
                            class="cursor-pointer inline-flex w-full items-center justify-center rounded-lg bg-slate-700 px-4 py-2.5 text-sm font-medium text-white transition hover:bg-slate-600"
                        >
                            Accept
                        </button>

                        <button
                            type="button"
                            wire:click="rejectAll"
                            class="cursor-pointer inline-flex w-full items-center justify-center rounded-lg bg-slate-800 px-4 py-2.5 text-sm font-medium text-slate-200 ring-1 ring-inset ring-slate-600 transition hover:bg-slate-700"
                        >
                            Reject
                        </button>

                        <button
                            type="button"
                            wire:click="openPreferences"
                            class="cursor-pointer inline-flex w-full items-center justify-center rounded-lg bg-slate-200 px-4 py-2.5 text-sm font-medium text-slate-900 transition hover:bg-white"
                        >
                            Manage preferences
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if($showPreferences)
        <div class="fixed inset-0 z-[110] flex items-center justify-center bg-slate-950/70 p-4 backdrop-blur-sm">
            <div class="w-full max-w-2xl overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-2xl">
                <div class="flex items-center justify-between border-b border-slate-200 px-6 py-4">
                    <h2 class="text-sm font-semibold text-slate-900">
                        Cookie preferences
                    </h2>

                    <button
                        type="button"
                        wire:click="closePreferences"
                        class="cursor-pointer inline-flex h-8 w-8 items-center justify-center rounded-md text-slate-500 transition hover:bg-slate-100 hover:text-slate-900"
                        aria-label="Close cookie preferences"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>

                <div class="px-6 py-5">
                    <div class="space-y-6">
                        <div>
                            <div class="flex items-start justify-between gap-4">
                                <div class="pr-4">
                                    <h3 class="text-sm font-medium text-slate-900">
                                        Necessary cookies
                                    </h3>

                                    <p class="mt-2 text-sm leading-6 text-slate-600">
                                        These are required for the website to function properly, including login sessions, security protection, saved cookie preferences, and essential system monitoring such as Laravel Nightwatch.
                                    </p>
                                </div>

                                <div class="shrink-0">
                                    <span class="inline-flex items-center rounded-full bg-slate-200 px-3 py-1 text-xs font-medium text-slate-700">
                                        Always active
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="border-t border-slate-200 pt-6">
                            <div class="flex items-start justify-between gap-4">
                                <div class="pr-4">
                                    <h3 class="text-sm font-medium text-slate-900">
                                        Analytics cookies
                                    </h3>

                                    <p class="mt-2 text-sm leading-6 text-slate-600">
                                        These help us understand how visitors interact with the website so we can improve performance and usability.
                                    </p>
                                </div>

                                <label class="relative inline-flex shrink-0 cursor-pointer items-center">
                                    <input
                                        type="checkbox"
                                        wire:model.live="preferences.analytics"
                                        class="peer sr-only"
                                    >
                                    <div class="h-6 w-11 rounded-full bg-slate-300 transition peer-checked:bg-slate-800"></div>
                                    <div class="pointer-events-none absolute left-[2px] top-[2px] h-5 w-5 rounded-full bg-white shadow-sm transition-transform peer-checked:translate-x-5"></div>
                                </label>
                            </div>
                        </div>

                        <div class="border-t border-slate-200 pt-6">
                            <div class="flex items-start justify-between gap-4">
                                <div class="pr-4">
                                    <h3 class="text-sm font-medium text-slate-900">
                                        Marketing cookies
                                    </h3>

                                    <p class="mt-2 text-sm leading-6 text-slate-600">
                                        These are used for third-party embeds, advertising, and any future marketing-related tracking.
                                    </p>
                                </div>

                                <label class="relative inline-flex shrink-0 cursor-pointer items-center">
                                    <input
                                        type="checkbox"
                                        wire:model.live="preferences.marketing"
                                        class="peer sr-only"
                                    >
                                    <div class="h-6 w-11 rounded-full bg-slate-300 transition peer-checked:bg-slate-800"></div>
                                    <div class="pointer-events-none absolute left-[2px] top-[2px] h-5 w-5 rounded-full bg-white shadow-sm transition-transform peer-checked:translate-x-5"></div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col gap-3 border-t border-slate-200 px-6 py-4 sm:flex-row sm:items-center sm:justify-between">
                    <div class="flex flex-wrap gap-3">
                        <button
                            type="button"
                            wire:click="acceptAll"
                            class="cursor-pointer inline-flex items-center justify-center rounded-lg bg-slate-800 px-4 py-2.5 text-sm font-medium text-white transition hover:bg-slate-700"
                        >
                            Accept
                        </button>

                        <button
                            type="button"
                            wire:click="rejectAll"
                            class="cursor-pointer inline-flex items-center justify-center rounded-lg border border-slate-300 bg-white px-4 py-2.5 text-sm font-medium text-slate-700 transition hover:bg-slate-50"
                        >
                            Reject
                        </button>
                    </div>

                    <button
                        type="button"
                        wire:click="savePreferences"
                        class="cursor-pointer inline-flex items-center justify-center rounded-lg bg-slate-100 px-4 py-2.5 text-sm font-medium text-slate-900 transition hover:bg-slate-200"
                    >
                        Save preferences
                    </button>
                </div>
            </div>
        </div>
    @endif
</div>