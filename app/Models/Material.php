<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'fornecedor',
        'contatoFornecedor',
        'lote',
        'validadeLote',
        'price',
        'amount',
        'unit',

    ];
}
