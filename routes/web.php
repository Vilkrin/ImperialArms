<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\FleetController;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/fleet', [FleetController::class, 'index'])->name('fleet.index');

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
    Route::get('/security', [ProfileController::class, 'security'])->name('security');
    Route::get('/ships', function () {
        return view('profile.ships');
    })->name('ships');
    Route::get('/{slug}', [ProfileController::class, 'show'])->name('show');
});

Route::prefix('forum')->name('forum.')->middleware('auth', 'verified')->group(function () {

    Route::get('/', function () {
        return view('forum.index');
    })->name('index');

    // Route::get('/{slug}', function ($slug) {
    //     return view('forum.show', ['slug' => $slug]);
    // })->name('show');
});

// Org Services
Route::prefix('services')->name('services.')->middleware('auth', 'verified')->group(function () {

    // Freight Services
    Route::get('/freight', function () {
        return view('services.freight');
    })->name('freight');

    // Other services to be added here
});

// Members Area
Route::prefix('members')->name('members.')->middleware('auth', 'verified', 'permission:view.member.dashboard')->group(function () {

    // Main Page
    Route::get('/', function () {
        return view('members.dashboard');
    })->name('dashboard');
    // Route::get('/', [OrgController::class, 'index'])->name('index');
});

// Admin Area
Route::prefix('admin')->name('admin.')->middleware('auth', 'verified', 'permission:access.admin.panel')->group(function () {

    // Dashboard Route
    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');

    // User Management
    Route::resource('users', UserController::class);
    // User Management - Roles & Permissions
    Route::get('/roles', function () {
        return view('admin.roles.index');
    })->name('roles.index');
    // Ship Management
    Route::get('/ships', function () {
        return view('admin.ships.index');
    })->name('ships.index');
    // Fleet Management
    Route::get('/fleet', function () {
        return view('admin.fleet.index');
    })->name('fleet.index');

    // Content Management
    // Blog Posts
    Route::prefix('posts')->name('posts.')->group(function () {
        Route::view('/', 'admin.blog.index')
            ->name('index');
        Route::view('/create', 'admin.blog.create')
            ->name('create');
        Route::view('/{post}/edit', 'admin.blog.edit')
            ->name('edit');
        Route::view('/{post}', 'admin.blog.show')
            ->name('show');
    });
    // Pages
    Route::resource('pages', PageController::class);
    // Menus
    Route::get('/menus', function () {
        return view('admin.menus.index');
    })->name('menus.index');


    // Services
    Route::get('/services', function () {
        return view('admin.services.index');
    })->name('services.index');
    Route::get('/services/show', function () {
        return view('admin.services.show');
    })->name('services.show');

    // Recruitment
    Route::get('/recruitment', function () {
        return view('admin.recruitment.index');
    })->name('recruitment.index');
    Route::get('/recruitment/application', function () {
        return view('admin.recruitment.show');
    })->name('recruitment.show');

    // Chat
    Route::get('/chat', function () {
        return view('admin.chat.index');
    })->name('chat.index');

    // Settings
    Route::get('/settings', function () {
        return view('admin.settings.settingspage');
    })->name('settings');
});
