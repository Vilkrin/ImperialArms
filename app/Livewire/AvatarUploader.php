<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

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
        $user = Auth::user();

        $user->clearMediaCollection('avatars');

        $this->photo = null;
    }
    public function save()
    {
        $user = Auth::user();

        $extension = $this->photo->getClientOriginalExtension();
        $fileName = $user->username . '_avatar.' . $extension;


        $user->addMedia($this->photo->getRealPath())
            ->usingFileName($fileName)
            ->toMediaCollection('avatars');

        $this->photo = null;
    }
}
