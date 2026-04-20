<?php

namespace App\Livewire;

use Livewire\Component;

class CookieConsent extends Component
{
    public bool $showBanner = true;
    public bool $showPreferences = false;

    public array $preferences = [
        'necessary' => true,
        'analytics' => false,
        'marketing' => false,
    ];

    public function mount(): void
    {
        $saved = request()->cookie('cookie_consent');

        if ($saved) {
            $decoded = json_decode($saved, true);

            if (is_array($decoded)) {
                $this->preferences = array_merge($this->preferences, $decoded);
                $this->showBanner = false;
            }
        }
    }

    public function acceptAll(): void
    {
        $this->preferences = [
            'necessary' => true,
            'analytics' => true,
            'marketing' => true,
        ];

        $this->saveConsent();
    }

    public function rejectAll(): void
    {
        $this->preferences = [
            'necessary' => true,
            'analytics' => false,
            'marketing' => false,
        ];

        $this->saveConsent();
    }

    public function savePreferences(): void
    {
        $this->preferences['necessary'] = true;

        $this->saveConsent();
    }

    protected function saveConsent(): void
    {
        cookie()->queue(
            cookie(
                'cookie_consent',
                json_encode($this->preferences),
                60 * 24 * 365
            )
        );

        $this->showBanner = false;
        $this->showPreferences = false;

        $this->dispatch('cookie-consent-updated', preferences: $this->preferences);
    }

    public function openPreferences(): void
    {
        $this->showPreferences = true;
    }

    public function closePreferences(): void
    {
        $this->showPreferences = false;
    }

    public function render()
    {
        return view('livewire.cookie-consent');
    }
}
