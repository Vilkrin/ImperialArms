<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\FleetController;
use App\Models\Post;


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

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/sitemap-test', function () {
    return [
        'exists' => file_exists(public_path('sitemap.xml')),
        'path' => public_path('sitemap.xml'),
    ];
});

Route::get('/user/{slug}', [ProfileController::class, 'show'])->name('users.show');

Route::prefix('profile')->name('profile.')->middleware(['auth'])->group(function () {

    Route::get('/', [ProfileController::class, 'index'])->name('index');
    Route::patch('/', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/security', [ProfileController::class, 'security'])->name('security');
    Route::get('/ships', function () {
        return view('profile.ships');
    })->name('ships');
});

Route::prefix('forum')->name('forum.')->group(function () {

    Route::get('/', function () {
        return view('forum.index');
    })->name('index');

    Route::get('/category', function () {
        return view('forum.category');
    })->name('category');

    Route::get('/thread', function () {
        return view('forum.thread');
    })->name('thread');

    Route::get('/new-thread', function () {
        return view('forum.new-thread');
    })->name('new-thread');
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
    Route::resource('users', UserController::class)
        ->middleware('permission:view.users');
    // User Management - Roles & Permissions
    Route::get('/roles', function () {
        return view('admin.roles.index');
    })->name('roles.index')
        ->middleware('permission:manage.roles');
    // Ship Management
    Route::get('/ships', function () {
        return view('admin.ships.index');
    })->name('ships.index')
        ->middleware('permission:manage.ships');
    // Fleet Management
    Route::get('/fleet', function () {
        return view('admin.fleet.index');
    })->name('fleet.index')
        ->middleware('permission:view.fleet');

    // Content Management
    // Blog Posts
    Route::prefix('posts')->name('posts.')->middleware('permission:view.posts')->group(function () {
        Route::view('/', 'admin.blog.index')
            ->name('index');
        Route::view('/create', 'admin.blog.create')
            ->name('create');
        Route::get('/{post}/edit', function (Post $post) {
            return view('admin.blog.edit', compact('post'));
        })->name('edit');
        Route::get('/{post}', function (Post $post) {
            return view('admin.blog.show', compact('post'));
        })->name('show');
    });

    // Pages
    Route::resource('pages', PageController::class)->middleware('permission:view.pages');

    // Menus
    Route::get('/menus', function () {
        return view('admin.menus.index');
    })->name('menus.index')
        ->middleware('permission:manage.menus');

    // Services
    Route::get('/services', function () {
        return view('admin.services.index');
    })
        ->name('services.index')
        ->middleware('permission:manage.services');

    Route::get('/services/show', function () {
        return view('admin.services.show');
    })
        ->name('services.show')
        ->middleware('permission:manage.services');

    // Recruitment
    Route::get('/recruitment', function () {
        return view('admin.recruitment.index');
    })
        ->name('recruitment.index')
        ->middleware('permission:manage.recruitment');

    Route::get('/recruitment/application', function () {
        return view('admin.recruitment.show');
    })
        ->name('recruitment.show')
        ->middleware('permission:manage.recruitment');

    // Settings
    Route::get('/settings', function () {
        return view('admin.settings.settingspage');
    })->name('settings')
        ->middleware('permission:manage.site.settings');
});
