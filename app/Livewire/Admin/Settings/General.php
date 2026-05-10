<?php

namespace App\Livewire\Admin\Settings;

use Livewire\Component;
use App\Models\GeneralSetting;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\View;

class General extends Component
{

    use WithFileUploads;

    #[Validate('nullable|image|max:10240')]
    public $logoUpload = null;

    public GeneralSetting $settings;
    public ?string $site_name = null;
    public ?string $site_tagline = null;
    public ?string $footer_text = null;

    public function mount(): void
    {
        $this->settings = view()->shared('generalSettings')
            ?? GeneralSetting::firstOrCreate([]);

        $this->site_name = $this->settings->site_name;
        $this->site_tagline = $this->settings->site_tagline;
        $this->footer_text = $this->settings->footer_text;
    }

    public function removeLogo(): void
    {
        $this->settings->clearMediaCollection('logos');
    }

    public function removeUploadPreview(): void
    {
        $this->logoUpload = null;
    }

    public function saveGeneralSettings(): void
    {
        $this->settings->update([
            'site_name' => $this->site_name,
            'site_tagline' => $this->site_tagline,
            'footer_text' => $this->footer_text,
        ]);
    }

    public function saveLogo(): void
    {
        $this->validateOnly('logoUpload');

        if (! $this->logoUpload) {
            return;
        }

        $this->settings->clearMediaCollection('logos');

        $this->settings
            ->addMedia($this->logoUpload->getRealPath())
            ->usingFileName('site-logo.' . $this->logoUpload->getClientOriginalExtension())
            ->toMediaCollection('logos');

        $this->logoUpload = null;
    }

    public function render()
    {
        return view('livewire.admin.settings.general');
    }
}
