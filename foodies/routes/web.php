<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;


// Public routes
Route::get('/', [HomeController::class, 'index'])->name('home'); // Home page
Route::get('/products', [ProductController::class, 'index'])->name('products'); // Product listing

// Authentication & protected routes
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard'); // default Jetstream dashboard
    })->name('dashboard');

    // Cart routes
    Route::get('/cart', [CartController::class, 'index'])->name('cart'); // Show cart
    Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add'); // Add product to cart
    Route::post('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove'); // Remove product from cart
    Route::post('/cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout'); // Checkout

    // Orders
    Route::get('/orders', [OrderController::class, 'index'])->name('orders'); // Show order history
    Route::get('/orders/{id}', [OrderController::class, 'show'])->name('orders.show'); // Show single order details

    // Profile
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile'); // User profile
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update'); // Update profile
});
