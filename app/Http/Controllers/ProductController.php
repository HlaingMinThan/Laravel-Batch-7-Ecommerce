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
            "products" => Product::with('category')->paginate(8), //eager or lazy ?
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

    public function create()
    {
        return view('admin.products.create', [
            'categories' => Category::all()
        ]);
    }

    public function store()
    {
        //enctype="multipart/form-data" -> obj , if not, file name string
        request()->validate([
            'name' => 'required',
            'image' => ['required', 'image', 'max:2048'],
            'price' => 'required',
            'slug' => 'required',
            'category_id' => 'required',
            'discount_percentage' => ['required', 'max:2'],
        ]);
        $image = request('image'); //file
        $product = new Product();
        $product->name = request('name');
        $product->image = '/storage/' . $image->store('products');
        $product->price = request('price');
        $product->slug = request('slug');
        $product->category_id = request('category_id');
        $product->discount_percentage = request('discount_percentage');
        $product->save();
        return redirect('/admin/products');
    }

    public function admin_products()
    {
        $products = Product::latest()->paginate();
        return view('admin.products', [
            'products' => $products
        ]);
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return back();
    }
}
