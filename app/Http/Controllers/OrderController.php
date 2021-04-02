<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Faker\Provider\DateTime;
use Illuminate\Http\Request;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;


class OrderController extends Controller
{
    public function index()
    {
//        $orders = Order::whereDate('time','>=',Carbon::now())->orderBy('time','asc')->get();

        $orders = Order::with(['user','restaurant'])->whereDate('time','>=',Carbon::now())->orderBy('time','asc')->get();

        return view('orders.index')->with([
            'orders' => $orders
        ]);
   }
}
