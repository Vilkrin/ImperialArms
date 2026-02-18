<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Livewire\Admin\Settings\SettingsPage;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/fleet', function () {
    return view('fleet');
})->name('fleet');

Route::get('/recruitment', function () {
    return view('recruitment');
})->name('recruitment');

// Blog
Route::get('/blog', [PostController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [PostController::class, 'show'])->name('blog.show');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

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

    // Other services can be added here
});

// Members Area
Route::prefix('members')->name('members.')->middleware('auth', 'verified', 'permission:view.member.dashboard')->group(function () {

    // Main Page
    // Route::get('/', [OrgController::class, 'index'])->name('index');

});

// Admin Area
Route::prefix('admin')->name('admin.')->middleware('auth', 'verified', 'permission:access.admin.panel')->group(function () {

    // Dashboard Route
    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');

    // User Management
    Route::resource('users', UserController::class);
    // User Management - Roles & Permissions
    // Route::resource('roles', RoleController::class);

    // Settings
    Route::get('/settings', function () {
        return view('admin.settings.settingspage');
    })->name('settings');
});

require __DIR__ . '/auth.php';
