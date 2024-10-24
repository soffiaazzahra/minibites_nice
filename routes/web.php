<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LandingPageController;
use App\Models\Product;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/template', function () {
    return view('template.master');
});

Route::get('/landing', function () {
    return view('landing.page');
});

// // Route untuk menampilkan halaman tambah produk
// Route::get('/menu/create', [MenuController::class, 'create'])->name('menu.create');

// // Route untuk menyimpan produk
// Route::post('/menu/store', [MenuController::class, 'store'])->name('menu.store');

// Rute untuk dashboard admin
// Route untuk dashboard admin
Route::prefix('admin')->group(function () {
    Route::get('/products', [ProductController::class, 'index'])->name('admin.product.index');
    Route::get('/products/create', [ProductController::class, 'create'])->name('admin.product.create');
    Route::post('/products', [ProductController::class, 'store'])->name('admin.product.store');
    Route::delete('/admin/product/{id}', [ProductController::class, 'destroy'])->name('admin.product.destroy');
    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('admin.product.edit');
    Route::put('/products/{product}', [ProductController::class, 'update'])->name('admin.product.update');
    // Tambahkan rute untuk edit dan destroy jika diperlukan
});
// Route untuk halaman landing
Route::get('/landing', [LandingPageController::class, 'index'])->name('landing.page');