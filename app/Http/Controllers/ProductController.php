<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function home()
    {
        $latestDiscountProduct = Product::where("discount_percentage", ">", 0)
            ->orderBy("id", "asc")->first(); //1 2 3
        $mostSoldProducts = Product::where("most_sell", true)->get();
        return view('home', [
            "products" => Product::paginate(8),
            "categories" => Category::all(),
            "latestDiscountProduct" => $latestDiscountProduct,
            "mostSoldProducts" => $mostSoldProducts
        ]);
    }

    public function index()
    {
        $products = Product::where("name", "LIKE", "%" . request('search') . "%")->get();

        return view('products', [
            "products" => $products
        ]);
    }

    public function show(Product $product)
    {
        return view('product', [
            'product' => $product
        ]);
    }
}
