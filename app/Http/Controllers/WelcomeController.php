<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use function Symfony\Component\Translation\t;

class WelcomeController extends Controller
{
    public function index()
    {
        $data = Order::with(['user','restaurant'])->whereDate('time','=',Carbon::now())->get();



//        if (Carbon::now()->addDay()->isoFormat('dddd')=="Saturday")
//            dd("dnes je volno");
        return view('welcome')->with([
            'data' => $data,

        ]);

    }
}
