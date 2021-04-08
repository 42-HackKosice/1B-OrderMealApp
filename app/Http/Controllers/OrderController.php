<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\User;
use Carbon\Carbon;
use Faker\Provider\DateTime;
use Illuminate\Http\Request;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;


class OrderController extends Controller
{

    public function __construct()
    {$this->middleware('auth');
    }


    public function index()
    {
//        $orders = Order::whereDate('time','>=',Carbon::now())->orderBy('time','asc')->get();
        $orders = Order::with(['user','restaurant'])->whereDate('time','>=',Carbon::now())->orderBy('time','asc')->get();
        //last user that order
        $tomorrow = User::orderBy('lastOrder')->first();

        return view('orders.index')->with([
            'orders' => $orders,
            'tomorrow' => $tomorrow
        ]);
   }

    public function edit()
    {
        $order = Order::orderBy('time','desc')->with(['user','restaurant'])->first();

        $restaurants = Restaurant::all();

        return view('orders.update')->with([
        'order' => $order,
        'restaurants' => $restaurants
        ]);
   }

    public function update(Request $request)
    {
        $data = $request->validate([
            'time' => 'required|date_format:H:i',
             'restaurant' => 'required|numeric|exists:restaurants,id'
        ]);

        $order = Order::orderBy('time','desc')->first();



        $order->time = Arr::get($data,'time');
        $order->restaurant_id = Arr::get($data,'restaurant');
        $order->save();

        return redirect()->route('myprofile');



   }
}
