<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/fleet', function () {
    return view('fleet');
})->name('fleet');

Route::get('/mission-board', function () {
    return view('mission-board');
})->name('mission-board');

Route::get('/recruitment', function () {
    return view('recruitment');
})->name('recruitment');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

// Admin Dashboard - Grouping routes under 'admin' middleware and prefix for organization
Route::prefix('admin')->name('admin.')->middleware('auth', 'verified', 'permission:access.admin.panel')->group(function () {

    // Dashboard Route
    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');

    // URL Shortener
    // Route::get('/url-shortener', [URLShortener::class, 'index'])->name('url.short');

    // URL Redirect
    // Route::get('/url-redirect', [URLRedirect::class, 'index'])->name('url.redirect');

    // User Management
    // Route::resource('users', UserController::class);
    // User Management - Roles & Permissions
    // Route::resource('roles', RoleController::class);
});

require __DIR__ . '/auth.php';
