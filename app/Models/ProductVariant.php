<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'color_id',
        'size_id',
        'price',
        'sale',
        'stock',
        'image',
    ];

    // 1 variant chỉ có thể truy cập vào 1 sản phẩm
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    // 1 variant chỉ có thể truy cập vào 1 màu
    public function color()
    {
        return $this->belongsTo(Color::class);
    }
    
    // 1 variant chỉ có thể truy cập vào 1 kích thước
    public function size()
    {
        return $this->belongsTo(Size::class);
    }
}
