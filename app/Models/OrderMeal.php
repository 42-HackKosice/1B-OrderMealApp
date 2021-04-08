<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderMeal extends Model
{
    protected $fillable = [
        'user_id',
        'order_id',
        'meal',
    ];
    use HasFactory;


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function restaurant()
    {
        return $this->hasOneThrough(Restaurant::class,Order::class);

    }
}
