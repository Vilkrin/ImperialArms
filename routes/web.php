<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\UserController;

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

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

Route::prefix('profile')->name('profile.')->middleware(['auth'])->group(function () {

    Route::get('/', [ProfileController::class, 'index'])->name('index');
    Route::patch('/', [ProfileController::class, 'update'])->name('profile.update');
});

// Org Services
Route::prefix('services')->name('services.')->middleware('auth', 'verified')->group(function () {

    // Freight Services
    Route::get('/freight', function () {
        return view('services.freight');
    })->name('freight');

    // Then Whatever Other Servies You Want

});

// Members Area
Route::prefix('members')->name('members.')->middleware('auth', 'verified', 'permission:view.member.dashboard')->group(function () {

    // Main Page
    // Route::get('/', [OrgController::class, 'index'])->name('index');

});

// Admin Dashboard - Grouping routes under 'admin' middleware and prefix for organization
Route::prefix('admin')->name('admin.')->middleware('auth', 'verified', 'permission:access.admin.panel')->group(function () {

    // Dashboard Route
    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');

    // User Management
    Route::resource('users', UserController::class);
    // User Management - Roles & Permissions
    // Route::resource('roles', RoleController::class);


});

require __DIR__ . '/auth.php';
