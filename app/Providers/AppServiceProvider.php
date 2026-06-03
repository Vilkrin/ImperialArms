<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Schema;
use App\Models\GeneralSetting;
use App\Models\SocialLink;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Share general settings & social links with all views, but only if the table exists
        View::share('generalSettings', null);
        View::share('socialLinks', collect());

        if (Schema::hasTable('general_settings')) {
            View::share('generalSettings', GeneralSetting::first());
        }

        if (Schema::hasTable('social_links')) {
            View::share(
                'socialLinks',
                SocialLink::where('is_active', true)
                    ->orderBy('sort_order')
                    ->get()
            );
        }

        // Implicitly grant "Super Admin" role all permissions
        // This works in the app by using gate-related functions like auth()->user->can() and @can()
        Gate::before(function ($user, $ability) {
            return $user->hasRole('Super Admin') ? true : null;
        });
    }
}
