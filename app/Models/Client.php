<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phoneNumber',
        'addressId',
        'email'
    ];

    public function address()
    {
        return $this->belongsTo(Address::class, "addressId", 'id');
    }

    public function order()
    {
        return $this->hasMany(Order::class, "clientId", 'id');
    }
}
