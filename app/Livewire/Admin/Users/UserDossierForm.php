<?php

namespace App\Livewire\Admin\Users;

use Livewire\Component;
use Flux\Flux;

class UserDossierForm extends Component
{
    public function mount(User $user): void
    {
        abort_unless(
            auth()->user()->can('manage.user.dossier'),
            403
        );

        $this->user = $user;
    }

    public function saveDossier(): void
    {
        // This is a placeholder for the dossier saving logic

        Flux::toast('Dossier updated successfully.', variant: 'success');
    }

    public function render()
    {
        return view('livewire.admin.users.user-dossier-form');
    }
}
