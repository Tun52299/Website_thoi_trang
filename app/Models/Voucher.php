<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'type',
        'sale_price',
        'min_price',
        'max_price',
        'quantity',
        'start_date',
        'end_date',
    ];
}
