<?php

namespace App\Livewire\Admin\Settings;

use Livewire\Component;
use App\Models\SeoSetting;
use Livewire\WithFileUploads;
use Flux\Flux;

class Seo extends Component
{
    use WithFileUploads;

    public $socialPreviewUpload = null;
    public $faviconUpload = null;
    public $appleTouchIconUpload = null;

    public SeoSetting $settings;

    public ?string $meta_title = null;
    public ?string $meta_description = null;
    public ?string $meta_author = null;
    public ?string $canonical_url = null;

    public bool $allow_search_indexing = true;
    public bool $allow_ai_search = true;
    public bool $allow_ai_training = false;

    public ?string $og_title = null;
    public ?string $og_description = null;
    public string $og_type = 'website';
    public ?string $og_url = null;
    public ?string $og_site_name = null;
    public string $og_locale = 'en_GB';

    public string $twitter_card = 'summary_large_image';
    public ?string $twitter_title = null;
    public ?string $twitter_description = null;
    public ?string $twitter_site = null;
    public ?string $twitter_creator = null;

    public string $theme_color = '#0f172a';

    public function mount(): void
    {
        $this->settings = SeoSetting::firstOrCreate([]);

        $this->fill($this->settings->only([
            'meta_title',
            'meta_description',
            'meta_author',
            'canonical_url',
            'allow_search_indexing',
            'allow_ai_search',
            'allow_ai_training',
            'og_title',
            'og_description',
            'og_type',
            'og_url',
            'og_site_name',
            'og_locale',
            'twitter_card',
            'twitter_title',
            'twitter_description',
            'twitter_site',
            'twitter_creator',
            'theme_color',
        ]));
    }

    public function removeSocialPreview(): void
    {
        $this->settings->clearMediaCollection('social_preview');

        Flux::toast(variant: 'success', text: 'Social preview image removed.');
    }

    public function removeFavicon(): void
    {
        $this->settings->clearMediaCollection('favicon');

        Flux::toast(variant: 'success', text: 'Favicon removed.');
    }

    public function removeAppleTouchIcon(): void
    {
        $this->settings->clearMediaCollection('apple_touch_icon');

        Flux::toast(variant: 'success', text: 'Apple touch icon removed.');
    }

    public function removeSocialPreviewUpload(): void
    {
        $this->socialPreviewUpload = null;
    }

    public function removeFaviconUpload(): void
    {
        $this->faviconUpload = null;
    }

    public function removeAppleTouchIconUpload(): void
    {
        $this->appleTouchIconUpload = null;
    }

    public function saveSeoSettings(): void
    {
        $data = $this->validate([
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_author' => 'nullable|string|max:255',
            'canonical_url' => 'nullable|string|max:255',

            'allow_search_indexing' => 'boolean',
            'allow_ai_search' => 'boolean',
            'allow_ai_training' => 'boolean',

            'og_title' => 'nullable|string|max:255',
            'og_description' => 'nullable|string',
            'og_type' => 'required|string|max:50',
            'og_url' => 'nullable|string|max:255',
            'og_site_name' => 'nullable|string|max:255',
            'og_locale' => 'required|string|max:20',

            'twitter_card' => 'required|string|max:100',
            'twitter_title' => 'nullable|string|max:255',
            'twitter_description' => 'nullable|string',
            'twitter_site' => 'nullable|string|max:255',
            'twitter_creator' => 'nullable|string|max:255',

            'socialPreviewUpload' => 'nullable|image|max:10240',
            'faviconUpload' => 'nullable|image|max:2048',
            'appleTouchIconUpload' => 'nullable|image|max:2048',

            'theme_color' => 'nullable|string|max:20',
        ]);

        $this->settings->update($data);

        if ($this->socialPreviewUpload) {
            $this->settings
                ->addMedia($this->socialPreviewUpload->getRealPath())
                ->usingFileName($this->socialPreviewUpload->getClientOriginalName())
                ->toMediaCollection('social_preview');
        }

        if ($this->faviconUpload) {
            $this->settings
                ->addMedia($this->faviconUpload->getRealPath())
                ->usingFileName($this->faviconUpload->getClientOriginalName())
                ->toMediaCollection('favicon');
        }

        if ($this->appleTouchIconUpload) {
            $this->settings
                ->addMedia($this->appleTouchIconUpload->getRealPath())
                ->usingFileName($this->appleTouchIconUpload->getClientOriginalName())
                ->toMediaCollection('apple_touch_icon');
        }

        $this->reset([
            'socialPreviewUpload',
            'faviconUpload',
            'appleTouchIconUpload',
        ]);

        Flux::toast(variant: 'success', text: 'SEO settings saved.');
    }

    public function render()
    {
        return view('livewire.admin.settings.seo');
    }
}
