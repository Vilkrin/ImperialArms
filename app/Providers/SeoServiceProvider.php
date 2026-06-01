<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\SeoSetting;
use Illuminate\Support\Facades\View;

class SeoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer([
            'components.layouts.main',
            'components.layouts.admin',
        ], function ($view) {
            $seoSettings = SeoSetting::first();

            $siteName = $seoSettings?->meta_title ?: config('app.name', 'Laravel');

            $robots = $seoSettings?->allow_search_indexing
                ? 'index, follow'
                : 'noindex, nofollow';

            $view->with([
                'seoSettings' => $seoSettings,
                'siteName' => $siteName,
                'robots' => $robots,
            ]);
        });
    }
}
