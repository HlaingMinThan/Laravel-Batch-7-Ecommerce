<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(3)
            ->has(Cart::factory()->count(1))
            ->create();
        Category::factory(5)
            ->has(Product::factory()->count(10))
            ->create();
        Blog::factory(100)->create();

        $carts = Cart::all(); //3
        $carts->each(function ($cart) {
            CartItem::factory(5)->create(['cart_id' => $cart->id]); //15
        });
    }
}
