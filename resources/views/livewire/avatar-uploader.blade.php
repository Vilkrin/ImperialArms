<!-- Blade view: -->

<form wire:submit="save">
    <flux:file-upload wire:model="photo">
    <!-- Custom avatar uploader -->
    <div class="
        relative flex items-center justify-center size-20 rounded-full transition-colors cursor-pointer
        border border-zinc-200 dark:border-white/10 hover:border-zinc-300 dark:hover:border-white/10
        bg-zinc-100 hover:bg-zinc-200 dark:bg-white/10 hover:dark:bg-white/15 in-data-dragging:dark:bg-white/15
    ">
        <!-- Show the uploaded file if it exists -->
        @if ($photo)
            <img src="{{ $photo?->temporaryUrl() }}" class="size-full object-cover rounded-full" />
        @else
            <!-- Show the default icon if no file is uploaded -->
            <flux:icon name="user" variant="solid" class="text-zinc-500 dark:text-zinc-400" />
        @endif

        <!-- Corner upload icon -->
        <div class="absolute bottom-0 right-0 bg-white dark:bg-zinc-800 rounded-full">
            <flux:icon name="arrow-up-circle" variant="solid" class="text-zinc-500 dark:text-zinc-400" />
        </div>
    </div>
    </flux:file-upload>

                          <flux:file-upload wire:model="photo">
                        
                        <div
                            class="relative flex items-center justify-center h-24 w-24 rounded-full transition-colors cursor-pointer
                            border border-amber-400/40 hover:border-amber-400/60
                            bg-amber-400/20 hover:bg-amber-400/30
                            dark:border-amber-400/20 dark:hover:border-amber-400/40
                            dark:bg-amber-400/10 dark:hover:bg-amber-400/20"
                        >
                            @if ($photo)
                                <!-- Preview uploaded avatar -->
                                <img src="{{ $photo->temporaryUrl() }}" class="h-full w-full object-cover rounded-full" />
                            @else
                                <!-- Your existing fallback -->
                                <div class="h-full w-full flex items-center justify-center rounded-full text-2xl font-bold text-amber-300">
                                    CS
                                </div>
                            @endif

                            <!-- Corner upload icon -->
                            <div
                                class="absolute bottom-0 right-0 bg-white dark:bg-zinc-800 p-1 rounded-full shadow
                                border border-zinc-200 dark:border-zinc-700"
                            >
                                <flux:icon name="arrow-up-circle" variant="solid" class="h-5 w-5 text-amber-500 dark:text-amber-400" />
                            </div>
                        </div>
                       </flux:file-upload>

    {{-- <flux:button type="submit">Save</flux:button> --}}
</form>

