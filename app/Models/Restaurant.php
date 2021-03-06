<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    public function order()
    {
        return $this->hasMany(Order::class);

    }

    public function ordermeal()
    {
        return $this->hasManyThrough(OrderMeal::class,Order::class);
    }

}
