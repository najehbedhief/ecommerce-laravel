<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'total',
        'payment_method',
        'payment_status',
        'status',
        'currency',
        'shipping_amount',
        'shipping_method',
        'notes',
    ];

    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function items()
    {
        $this->hasMany(OrderItem::class);
    }

    public function address()
    {
        $this->hasOne(Address::class);
    }
}
