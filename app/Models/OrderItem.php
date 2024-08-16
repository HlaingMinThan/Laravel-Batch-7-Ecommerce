<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    // an orderItem belongs to an order
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
