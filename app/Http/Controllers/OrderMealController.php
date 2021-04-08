<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderMeal;
use App\Models\Restaurant;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Psy\Util\Str;
use function Sodium\add;

class OrderMealController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $todayorderId = Order::orderBy('id','desc')->first()->id;



        $orders = OrderMeal::with(['user',])
            ->where('order_id','=',$todayorderId)
            ->get();

        $todayRestaurant  =  Order::with('restaurant')->where('id',$todayorderId)
            ->firstOrFail();





        return view('mealOrders.index')->with([
            'orders' => $orders,
            'todayRestaurant' =>$todayRestaurant
        ]);
    }

    public function create()
    {
        $todayMealOrder = OrderMeal::where('user_id',auth()->id())->orderBy('id','desc')
            ->first();

        if ($todayMealOrder==null)
        return view('mealOrders.create');

        else
            return redirect()->route('meal.edit');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'meal' => 'required|max:100'
        ]);

        $data = $data+["user_id"=>auth()->id(),"order_id"=>Order::orderBy('id','desc')->first()->id];

        OrderMeal::create($data);

        return redirect()->route('myprofile');

    }

    public function edit()
    {
        $todayMealOrder = OrderMeal::where('user_id',auth()->id())->orderBy('id','desc')
            ->first();


        if ($todayMealOrder!=null){
        return view('mealOrders.edit')->with([
            'todayMealOrder' => $todayMealOrder
        ]);}

        else return redirect()->route('myprofile');
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'meal' => 'required|max:100'
        ]);



        $meal = OrderMeal::where('user_id',auth()->id())->orderBy('id','desc')
            ->first();


        $meal->meal = $data['meal'];
        $meal->save();

        return redirect()->route('myprofile');
    }

    public function destroy($id)
    {
        OrderMeal::destroy($id);

        return redirect()->back();


    }
}
