<div>
   
    <!-- Blade view: -->
    <form wire:submit="save">
        <flux:file-upload wire:model="photos" label="Upload files" multiple>
            <flux:file-upload.dropzone heading="Drop files here or click to browse" text="JPG, PNG, GIF up to 10MB" />
        </flux:file-upload>

        <div class="mt-3 flex flex-col gap-2">
            @foreach ($photos as $index => $photo)
                <flux:file-item
                    :heading="$photo->getClientOriginalName()"
                    :image="$photo->temporaryUrl()"
                    :size="$photo->getSize()"
                >
                    <x-slot name="actions">
                        <flux:file-item.remove wire:click="removePhoto({{ $index }})" aria-label="{{ 'Remove file: ' . $photo->getClientOriginalName() }}" />
                    </x-slot>
                </flux:file-item>
            @endforeach
        </div>

        <flux:button type="submit">Save</flux:button>
    </form>

</div>
