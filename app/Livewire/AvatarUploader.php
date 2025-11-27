<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class AvatarUploader extends Component
{
    use WithFileUploads;

    #[Validate('image|max:10240')] // 10MB Max    
    public $photo;

    public function render()
    {
        return view('livewire.avatar-uploader');
    }

    public function removePhoto()
    {
        $this->photo->delete();
        $this->photo = null;
    }
    public function save()
    {
        $this->photo->store(path: 'photos');
        return $this->redirect('...');
    }
}
