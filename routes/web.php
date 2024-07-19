<?php

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $latestDiscountProduct = Product::where("discount_percentage", ">", 0)
        ->orderBy("id", "asc")->first(); //1 2 3
    $mostSoldProducts = Product::where("most_sell", true)->get();
    return view('home', [
        "products" => Product::all(),
        "categories" => Category::all(),
        "latestDiscountProduct" => $latestDiscountProduct,
        "mostSoldProducts" => $mostSoldProducts
    ]);
});
Route::get('/products', function () {
    $products = Product::where("name", "LIKE", "%" . request('search') . "%")->get();

    return view('products', [
        "products" => $products
    ]);
});

Route::get('/products/{product:slug}', function (Product $product) {
    return view('product', [
        'product' => $product
    ]);
});
Route::get('/checkout', function () {
    return view('checkout');
});
