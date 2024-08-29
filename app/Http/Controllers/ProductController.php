<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;

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
        $product->image = '/storage/' . $image->storeAs('products', $image->getClientOriginalName());
        $product->price = request('price');
        $product->slug = request('slug');
        $product->category_id = request('category_id');
        $product->discount_percentage = request('discount_percentage');
        $product->save();
        return redirect('/admin/products');
    }

    public function admin_products()
    {
        $products = Product::with('category')->latest()->paginate();
        return view('admin.products', [
            'products' => $products
        ]);
        
    }

    public function edit(Product $product)
    {
        return view('admin.products.edit', [
            'categories' => Category::all(),
            'product' => $product
        ]);
    }

    public function update(Product $product)
    {
        request()->validate([
            'name' => 'required',
            'image' => ['nullable', 'image'],
            'price' => 'required',
            'slug' => ['required', Rule::unique('products', 'slug')->ignore($product->id)],
            'category_id' => 'required',
            'discount_percentage' => ['required', 'max:2'],
        ]);

        if ($image = request('image')) {
            File::delete(public_path($product->image)); //public/
            $product->image = '/storage/' . $image->store('products'); ///storage/products/3lEZECb934Jl34nviuyKgh5GaFWTtRkFdFEjgDSF.jpg
        }
        $product->name = request('name');
        $product->price = request('price');
        $product->slug = request('slug');
        $product->category_id = request('category_id');
        $product->discount_percentage = request('discount_percentage');
        $product->update();
        return redirect('/admin/products');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return back();
    }
}
