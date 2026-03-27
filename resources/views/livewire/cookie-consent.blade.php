<div>
@if($showBanner)
<div 
    class="fixed bottom-0 inset-x-0 z-50 p-4"
    x-data
>
    <div class="max-w-4xl mx-auto bg-gray-900 text-white rounded-2xl shadow-lg p-6 flex flex-col md:flex-row items-center justify-between gap-4">

        <div class="text-sm">
            <p>
                We use cookies to ensure the website functions properly and to improve your experience.
                See our <a href="/cookie-policy" class="underline">Cookie Policy</a>.
            </p>
        </div>

        <div class="flex gap-2">
            <button 
                wire:click="reject"
                class="px-4 py-2 text-sm bg-gray-700 rounded-lg hover:bg-gray-600"
            >
                Reject
            </button>

            <button 
                wire:click="accept"
                class="px-4 py-2 text-sm bg-blue-600 rounded-lg hover:bg-blue-500"
            >
                Accept
            </button>
        </div>

    </div>
</div>
@endif
</div>