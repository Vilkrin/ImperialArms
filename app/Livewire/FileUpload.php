<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class FileUpload extends Component
{
    use WithFileUploads;

    #[Validate(['files.*' => 'image|max:1024'])]
    public $files = [];

    public function render()
    {
        return view('livewire.file-upload');
    }

    public function removePhoto($index)
    {
        $file = $this->filess[$index];
        $file->delete();
        unset($this->files[$index]);
        $this->files = array_values($this->files);
    }
    public function save()
    {
        foreach ($this->files as $file) {
            $file->store(path: 'files');
        }
        return $this->redirect('...');
    }
}
