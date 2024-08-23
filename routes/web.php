<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Middleware\MustBeLoginUser;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'home']);
Route::get('/blogs', [BlogController::class, 'index']);
Route::get('/products', [ProductController::class, 'index'])->middleware(MustBeLoginUser::class);
Route::get('/products/{product:slug}', [ProductController::class, 'show']);
Route::get('/categories/{category:name}', [CategoryController::class, 'index']);
Route::get('/checkout', [CheckoutController::class, 'index'])
    ->middleware(MustBeLoginUser::class);
Route::post('/add-to-cart/{product}', [CartController::class, 'store'])->middleware(MustBeLoginUser::class);
Route::post("/cart_items/{cart_item}/delete", [CartController::class, 'destroy'])->middleware(MustBeLoginUser::class);
Route::get('/register', [RegisterController::class, 'create']); // user create
Route::post('/register', [RegisterController::class, 'store']); // user create
Route::post('/orders/store', [OrderController::class, 'store']); // order create
Route::get('/login', [LoginController::class, 'create']); // user logout
Route::post('/login', [LoginController::class, 'store']); //
Route::post('/logout', [LogoutController::class, 'destroy']); // user logout
Route::get('/locales/{locale}', function ($locale) {
    session()->put('locale', $locale);
    return back();
}); // user logout

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/orders', [AdminController::class, 'orders']);
Route::get('/admin/products', [ProductController::class, 'admin_products']);
Route::post('/admin/products', [ProductController::class, 'store']);
Route::get('/admin/products/create', [ProductController::class, 'create']);
Route::delete('/admin/orders/{order}/delete', [OrderController::class, 'destroy']);
Route::delete('/admin/products/{product}/delete', [ProductController::class, 'destroy']);
