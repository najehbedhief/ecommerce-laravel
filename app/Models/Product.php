<?php

namespace App\Models;

use App\Models\OrderItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = ['category_id',
        'brand_id',
        'name',
        'slug',
        'images',
        'description',
        'price',
        'is_active',
        'is_featured',
        'in_stock',
        'on_sale'];

    protected $casts = [
        'images' => 'array',
    ];

    public function category()
    {
        $this->belongsTo(Category::class);
    }

    public function brand()
    {
        $this->belongsTo(Brand::class);
    }

    public function orderItems()
    {
        $this->hasMany(OrderItem::class);
    }

}
