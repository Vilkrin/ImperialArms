<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class PhotoUpload extends Component
{
    use WithFileUploads;


    public function render()
    {
        return view('livewire.photo-upload');
    }
}
