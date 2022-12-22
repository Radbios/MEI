<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'deliveryDate',
        'state',
        'orderDate',
        'clientId',
        'frete'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, "clientId", 'id');
    }
    public function orderProduct()
    {
        return $this->hasMany(OrderProduct::class, "orderId", 'id');
    }
}
