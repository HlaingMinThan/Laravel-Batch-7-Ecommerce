<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'home']);
Route::get('/blogs', [BlogController::class, 'index']);
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{product:slug}', [ProductController::class, 'show']);
Route::get('/categories/{category:name}', [CategoryController::class, 'index']);
Route::get('/checkout', [CheckoutController::class, 'index']);
Route::get('/register', [RegisterController::class, 'create']); // user create
Route::post('/register', [RegisterController::class, 'store']);// user create
