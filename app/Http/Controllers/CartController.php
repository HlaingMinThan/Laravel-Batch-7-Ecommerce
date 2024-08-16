<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function store(Product $product)
    {
        if (!auth()->user()->cart) {
            $cart = new Cart();
            $cart->user_id = auth()->id();
            $cart->save();//created
        } else {
            $cart = auth()->user()->cart;
        }


        $cart_item = new CartItem();
        $cart_item->cart_id = $cart->id;
        $cart_item->product_id = $product->id;
        $cart_item->save();

        return redirect('/checkout');
    }

    public function destroy(CartItem $cart_item)
    {
        $cart_item->delete();
        return back();
    }
}
