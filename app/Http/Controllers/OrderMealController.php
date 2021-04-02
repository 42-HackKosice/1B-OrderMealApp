<?php

namespace App\Http\Controllers;

use App\Models\OrderMeal;
use Illuminate\Http\Request;

class OrderMealController extends Controller
{
    public function index()
    {
        $orders = OrderMeal::with(['user','order'])->where('user_id','=',5)->get();

        return view('ownOrders.index')->with([
            'orders' => $orders
        ]);
    }
}
