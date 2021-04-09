<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderMeal;
use App\Models\Restaurant;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
//        $mealhistory = OrderMeal::with(['user','restaurant','order' => function($q){
//            $q->where('user_id', '=', auth()->id());
//        }])->get();

        $mealhistory = DB::table('order_meals')
            ->select('order_meals.meal','order_meals.updated_at','restaurants.name')
            ->join('orders','order_meals.order_id','=','orders.id')
            ->where('order_meals.user_id','=',auth()->id())
            ->leftJoin('restaurants','orders.restaurant_id','=','restaurants.id')
            ->get();








//    findOrFail(auth()->id()
        $user = User::with('orders')->findOrFail(auth()->id());
//        $usermeals = User::with(['orderMeal','orders'])->findOrFail(auth()->id());


        $todayusermeal = Order::whereDate('time','=',Carbon::today())->with(['user','restaurant','orderMeal' => function($q){
            $q->where('user_id', '=', auth()->id());
        }])->first();











        //returns position at database
        $userNextOrdering = User::where('lastOrder','<',$user->lastOrder)->count();


        $dt = Carbon::now();
        $dt2 = Carbon::now()->addDay($userNextOrdering);
        $daysUntilNextOrder = $dt->diffInDaysFiltered(function(Carbon $date) {
            return $date->isWeekend();
        }, $dt2);


        $daysUntilNextOrder = $daysUntilNextOrder+$userNextOrdering;



        return view('auth.profile')->with([
            'user' => $user,
            'daysUntilNextOrder' => $daysUntilNextOrder,
            'todayusermeal' => $todayusermeal,
             'mealhistory' => $mealhistory
        ]);

    }
}
