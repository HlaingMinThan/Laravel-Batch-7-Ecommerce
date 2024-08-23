<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function orders()
    {
        $orders = Order::with('user')->latest()->paginate();
        return view('admin.orders', [
            'orders' => $orders
        ]);
    }
}
