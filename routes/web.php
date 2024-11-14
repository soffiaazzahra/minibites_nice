<?php

use Illuminate\Support\Facades\Route;
// use App\Models\Product;
use App\Http\Controllers\{
    AuthController,
    RegisterPageController,
    ProductController,
    LandingPageController,
    UserController,
    AdminController,
    CartController,
    WishlistController,
    ContactController,
};



Route::get('/landing', function () {
    return view('landing.page');
});

// Route untuk halaman landing
Route::prefix('landing')->group(function(){
    Route::get('/', [LandingPageController::class, 'index'])->name('landing.page');
    Route::get('/menu', [LandingPageController::class, 'menu'])->name('landing.menu');
    Route::get('/about', [LandingPageController::class, 'about'])->name('landing.about');
});
// Route::get('/landing', [LandingPageController::class, 'index'])->name('landing.page');

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

Route::prefix('admin')->group(function(){
    Route::get('/', [AdminController::class, 'admin'])->name('admin.page');
    Route::get('/products', [ProductController::class, 'index'])->name('admin.product.index');
    Route::get('/products/create', [ProductController::class, 'create'])->name('admin.product.create');
    Route::post('/products', [ProductController::class, 'store'])->name('admin.product.store');
    Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('admin.product.destroy');
    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('admin.product.edit');
    Route::put('/products/{product}', [ProductController::class, 'update'])->name('admin.product.update');

    // Route untuk melihat detail produk (Show)
    Route::get('/products/{product}', [ProductController::class, 'show'])->name('admin.product.show');
});

Route::get('/admin/contact', [ContactController::class, 'index'])->name('admin.contact.index');

Route::prefix('user')->group(function () {
    // Route untuk navbar home pada halaman cart
    Route::get('/', [UserController::class, 'user'])->name('user.page');
    // Route untuk Cart
    Route::post('/add-to-cart/{id}', [CartController::class, 'addToCart'])->name('cart.add');
    Route::get('/cart', [CartController::class, 'viewCart'])->name('cart.view');
    // Route untuk menghapus produk dari keranjang
    Route::get('/cart/remove/{id}', [CartController::class, 'destroy'])->name('cart.remove');

    Route::get('/wishlist', [WishlistController::class, 'viewWishlist'])->name('view.wishlist');
    Route::post('/wishlist/toggle/{product}', [WishlistController::class, 'toggle'])->name('wishlist.toggle');
    Route::get('/wishlist/add/{productId}', [WishlistController::class, 'add'])->name('wishlist.add');
    Route::get('/wishlist/remove/{productId}', [WishlistController::class, 'remove'])->name('wishlist.remove');

    Route::post('/contact/submit', [ContactController::class, 'store'])->name('contact.submit');

    Route::get('/menu', [UserController::class, 'menu'])->name('user.menu');
    Route::get('/about', [UserController::class, 'about'])->name('user.about');
    Route::get('/contact', [UserController::class, 'contact'])->name('user.contact');
});





