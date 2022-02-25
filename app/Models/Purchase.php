<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable=[

        
        'medicine',
        'supplier',
        'payment_method',
        'batch_no',
        'box_size',
        'box_qty',
        'buy_price',
        'subtotal_price',
        'status',
        'expiry_date',

    ];
}
