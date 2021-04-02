<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $data = Order::with(['user','restaurant'])->whereDate('time','=',Carbon::now()->addDay(1))->get();

//        if (Carbon::now()->addDay()->isoFormat('dddd')=="Saturday")
//            dd("dnes je volno");
        return view('welcome')->with([
            'data' => $data
        ]);

    }
}
