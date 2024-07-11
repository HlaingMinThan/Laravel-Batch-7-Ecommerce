<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "products" => Product::all()
    ]);
});
Route::get('/products/{product}', function ($product) {
    return view('product', [
        'product' => Product::findOrFail($product)
    ]);
});
