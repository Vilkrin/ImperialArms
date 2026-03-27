<?php

namespace App\Livewire;

use Livewire\Component;

class CookieConsent extends Component
{
    public $showBanner = false;

    public function mount()
    {
        $this->showBanner = !request()->cookie('cookie_consent');
    }

    public function accept()
    {
        cookie()->queue('cookie_consent', 'accepted', 60 * 24 * 365);
        $this->showBanner = false;

        $this->dispatch('cookiesAccepted');
    }

    public function reject()
    {
        cookie()->queue('cookie_consent', 'rejected', 60 * 24 * 365);
        $this->showBanner = false;
    }

    public function render()
    {
        return view('livewire.cookie-consent');
    }
}
