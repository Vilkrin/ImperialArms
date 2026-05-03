<div class="grid grid-cols-1 md:grid-cols-[auto_1fr] gap-10 items-start">

    {{-- Current Avatar --}}
    <div class="flex flex-col items-center gap-3">
        <div
            class="relative flex items-center justify-center h-24 w-24 rounded-full transition-colors cursor-pointer overflow-hidden
            border border-amber-400/40 hover:border-amber-400/60
            bg-amber-400/20 hover:bg-amber-400/30
            dark:border-amber-400/20 dark:hover:border-amber-400/40
            dark:bg-amber-400/10 dark:hover:bg-amber-400/20"
        >
            @if ($photo)
                <img src="{{ $photo->temporaryUrl() }}" class="h-full w-full object-cover rounded-full" />
            @elseif ($user->getFirstMediaUrl('avatars'))
                <img src="{{ $user->getFirstMediaUrl('avatars') }}"
                     alt="{{ $user->name }}"
                     class="h-full w-full object-cover rounded-full" />
            @else
                <div class="h-full w-full flex items-center justify-center text-2xl font-bold text-amber-300">
                    <flux:icon name="user" variant="solid" class="text-zinc-500 dark:text-zinc-400" />
                </div>
            @endif
        </div>

    @if ($user->getFirstMediaUrl('avatars'))
        <button
            type="button"
            wire:click="removePhoto"
            class="cursor-pointer inline-flex items-center justify-center rounded-md border border-red-500/40 px-3 py-1.5 text-sm text-red-300 hover:bg-red-500/10 hover:border-red-500/60 transition-colors"
        >
            Remove avatar
        </button>
    @endif
    </div>

    {{-- Upload Section --}}
    <form wire:submit="save" class="w-full space-y-5">
        <flux:file-upload wire:model="photo" label="Upload Avatar">
            <flux:file-upload.dropzone
                heading="Drop avatar here or click to browse"
                text="JPG, PNG, GIF up to 10MB"
                with-progress
            />
        </flux:file-upload>

        <div class="mt-3 flex flex-col gap-2">
            @if ($photo)
                <flux:file-item
                    :heading="$photo->getClientOriginalName()"
                    :image="$photo->temporaryUrl()"
                    :size="$photo->getSize()"
                >
                <x-slot name="actions">
                    <flux:file-item.remove wire:click="removeUploadPreview" aria-label="{{ 'Remove file: ' . $photo->getClientOriginalName() }}" />
                </x-slot>
                </flux:file-item>
            @endif
        </div>

        @if ($photo)
            <div class="pt-4 flex justify-end">
                <flux:button
                    type="submit"
                    class="cursor-pointer px-6 py-2.5"
                >
                    Save Avatar
                </flux:button>
            </div>
        @endif
    </form>
</div>