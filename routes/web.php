<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Middleware\MustBeLoginUser;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'home']);
Route::get('/blogs', [BlogController::class, 'index']);
Route::get('/products', [ProductController::class, 'index'])->middleware(MustBeLoginUser::class);
Route::get('/products/{product:slug}', [ProductController::class, 'show']);
Route::get('/categories/{category:name}', [CategoryController::class, 'index']);
Route::get('/checkout', [CheckoutController::class, 'index']);
Route::get('/register', [RegisterController::class, 'create']); // user create
Route::post('/register', [RegisterController::class, 'store']); // user create
Route::get('/login', [LoginController::class, 'create']); // user logout 
Route::post('/login', [LoginController::class, 'store']); //
Route::post('/logout', [LogoutController::class, 'destroy']); // user logout 
Route::get('/locales/{locale}', function ($locale) {
    session()->put('locale', $locale);
    return back();
});// user logout 
