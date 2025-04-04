<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'address',
        'phone',
        'email',
        'status',
        'payment',
        'total',
        'voucher_code',
        'sale_price',
        'payment_amount',
    ];
}
