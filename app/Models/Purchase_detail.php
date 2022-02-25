<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase_detail extends Model
{
    use HasFactory;

    protected  $fillable=[

            'PO_id',
            'status',
            'total_price',
            'paid_amount',
            'Due_amount',
    ];
}
