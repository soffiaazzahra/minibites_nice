<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Http\Controllers\{
    AuthController,
    RegisterPageController,
    // DashboardController,
    ProductController,
    LandingPageController,
    UserController,
    AdminController,
};
// use App\Http\Controllers\ProductController;
// use App\Http\Controllers\LandingPageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/landing', function () {
    return view('landing.page');
});

Route::middleware(['guest'])->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('/login', 'login')->name('auth.login');
        Route::post('/authenticate', 'authenticate')->name('auth.authenticate');
    });

    Route::controller(RegisterPageController::class)->group(function () {
        Route::get('/register', 'create')->name('register.create');
        Route::post('/register', 'store')->name('register.store');
    });
});

Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout')->middleware(['auth']);

Route::middleware(['can:isUser'])->group(function () {
    Route::get('/user', [UserController::class, 'user'])->name('user.page');
});

Route::middleware(['can:isAdmin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'admin'])->name('admin.page');
});


// // Route untuk menampilkan halaman tambah produk
// Route::get('/menu/create', [MenuController::class, 'create'])->name('menu.create');

// // Route untuk menyimpan produk
// Route::post('/menu/store', [MenuController::class, 'store'])->name('menu.store');

// Rute untuk dashboard admin
// Route untuk dashboard admin

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'admin'])->name('admin.page');
    Route::get('/products', [ProductController::class, 'index'])->name('admin.product.index');
    Route::get('/products/create', [ProductController::class, 'create'])->name('admin.product.create');
    Route::post('/products', [ProductController::class, 'store'])->name('admin.product.store');
    Route::delete('/admin/product/{id}', [ProductController::class, 'destroy'])->name('admin.product.destroy');
    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('admin.product.edit');
    Route::put('/products/{product}', [ProductController::class, 'update'])->name('admin.product.update');
    // Tambahkan rute untuk edit dan destroy jika diperlukan
});

Route::prefix('user')->group(function () {
    Route::get('/', [UserController::class, 'user'])->name('user.page');
});

// Route untuk halaman landing
Route::get('/landing', [LandingPageController::class, 'index'])->name('landing.page');
