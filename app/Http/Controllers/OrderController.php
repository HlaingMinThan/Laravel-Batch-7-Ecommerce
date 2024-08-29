<?php

namespace App\Http\Controllers;

use App\Mail\OrderConfirm;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function store()
    {
        request()->validate([
            'shipping_address' => 'required',
            'total_amount' => 'required',
        ]);
        $products = collect([]);
        auth()->user()?->cart?->cart_items->load('product')
            ->each(function ($cartItem) use (&$products) {
                $product = [];
                $product['id'] = $cartItem->product->id;
                $product['price'] = $cartItem->product->price;
                $products[] = $product;
            });
        $order = new Order();
        $order->user_id = auth()->id();
        $order->total_amount = request('total_amount');
        $order->shipping_address  = request('shipping_address');
        $order->save();

        //create order items
        $products->each(function ($product) use ($order) {
            $orderItem = new OrderItem();
            $orderItem->order_id = $order->id;
            $orderItem->product_id = $product['id'];
            $orderItem->price =  $product['price'];
            $orderItem->quantity =  $product['price'];
            $orderItem->save();
        });
        auth()->user()?->cart?->cart_items()->delete();

        Mail::to(auth()->user())->queue(new OrderConfirm(auth()->user()->name));

        return back()->with('success', 'Order created successfully');
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return back();
    }
}
