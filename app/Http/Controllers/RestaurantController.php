<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RestaurantController extends Controller
{
   public function __construct()
   {
       $this ->middleware('auth');
   }

    public function index()
    {
//        $data = Restaurant::orderBy('id','desc')->paginate(10);
        $restaurants = DB::table('restaurants')
            ->paginate(15);

        return view('restaurants.index')->with([
            'restaurants' => $restaurants
        ]);
    }

    public function show(Restaurant $data)
    {

       return view('restaurants.show')->with([
           'data' => $data
       ]);

    }
}
