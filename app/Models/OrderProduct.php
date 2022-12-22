<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'orderId',
        'productId',
        'qnt'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, "orderId", 'id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, "Product", 'id');
    }
}
