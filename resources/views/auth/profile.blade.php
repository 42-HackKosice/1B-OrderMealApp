@extends('layouts.app')

@section('content')
    <div class="container mx-auto my-5 p-5">
        <div class="md:flex no-wrap md:-mx-2 ">
            <!-- Left Side -->
            <div class="w-full md:w-3/12 md:mx-2">
                <!-- Profile Card -->
                <div class="bg-white p-3 border-t-4 border-green-400">
                    <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">{{$user->name}}</h1>
                    <h3 class="text-gray-600 font-lg text-semibold leading-6">Sudolabs employee</h3>
{{--                    <p class="text-sm text-gray-500 hover:text-gray-600 leading-6">Lorem ipsum dolor sit amet--}}
{{--                        consectetur adipisicing elit.--}}
{{--                        Reprehenderit, eligendi dolorum sequi illum qui unde aspernatur non deserunt</p>--}}
                    <ul
                        class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
                        <li class="flex items-center py-3">

                            @if($daysUntilNextOrder!=0)
                                <span>Choosing restaurant in {{$daysUntilNextOrder}} {{\Illuminate\Support\Str::plural('day',$daysUntilNextOrder)}}</span>
                                </span>
                            @else
                                <a href="{{route('order.edit')}}" class=" ">
                                <span class="text-green-500 hover:text-green-700">You are choosing restaurant today </span>
                                </span>

                                </a>

                        </li>


                        <li class="flex items-center py-3 ">
                        @if($todayusermeal[0]->user->id==auth()->user()->getAuthIdentifier())
                            <a href="{{route('meal')}}">
                                <button
                                    class="block w-full text-red-500 text-sm font-semibold rounded-lg hover:bg-gray-100 focus:outline-none focus:shadow-outline focus:bg-gray-100 hover:shadow-xs ">
                                    Go to checkout meal orders
                                </button>
                            </a>
                        @endif
                            @endif
                        </li>

                        <li class="flex items-center py-3">
                            <span>Status</span>
                            <span class="ml-auto"><span
                                    class="bg-green-500 py-1 px-2 rounded text-white text-sm">Active</span></span>
                        </li>
                        <li class="flex items-center py-3">
                            <span>Member since</span>
                            <span class="ml-auto">{{$user->created_at->toDateString()}}</span>
                        </li>
                    </ul>
                </div>
                <!-- End of profile card -->
                <div class="my-4"></div>

            </div>
            <!-- Right Side -->
            <div class="w-full md:w-9/12 mx-2 h-64">
                <!-- Profile tab -->
                <!-- About Section -->
                <div class="bg-white border-t-4 border-blue-400 p-3 shadow-sm rounded-sm">
                    <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                        <span clas="text-green-500">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </span>
                        <span class="tracking-wide">Today'smeal order</span>
                    </div>
                    <div class="text-gray-700">
                        <div class="grid md:grid-cols-2 text-sm">
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Restaurant</div>
                                <div class="px-4 py-2">@if($todayusermeal[0]->restaurant!==null)
                                        {{$todayusermeal[0]->restaurant->name}}
                                    @else
                                        <p class="text-red-500">Not choosen yet</p>
                                    @endif</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Order Time</div>
                                <div class="px-4 py-2">{{$todayusermeal[0]->time->format('H:i')}}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Today's orderer</div>
                                <div class="px-4 py-2">{{$todayusermeal[0]->user->name}}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold ">Restaurant web</div>
                                <div class="px-4 py-2">@if($todayusermeal[0]->restaurant!==null)
                                        {{$todayusermeal[0]->restaurant->web}}
                                    @else
                                        <p class="text-red-500">Not choosen yet</p>@endif</div>
                            </div>


                            <div class="grid grid-cols-8">
                                <div class="col-span-8 px-4 py-2 font-semibold space-x-2 font-semibold text-gray-900 leading-8 text-lg">My today's  meal order</div>

                                <div class="px-4 py-1 col-span-4 text-lg">@if(!$todayusermeal[0]->orderMeal->isEmpty())
                                        {{\Illuminate\Support\Str::limit($todayusermeal[0]->orderMeal[0]->meal,10)}}


                                    @else
                                        <div class="inline-block ">
                                            <a href="{{route('meal.create')}}">
                                            <button type="button" class="focus:outline-none text-white text-sm py-2 text-left px-3 rounded-md bg-blue-700 hover:bg-blue-600 hover:shadow-lg flex items-center">
                                                Order food
                                                <svg class="w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>

                                            </button>
                                            </a>
                                        </div>

                                @endif

                                </div>
                                @if(!$todayusermeal[0]->orderMeal->isEmpty())
                                    <div class="col-span-2 col-start-6 flex item-center justify-center ">
                                        <a href="{{route('meal.edit')}}">
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </div>
                                        </a>
                                        <form class="inline " method="post" action="{{route('meal.destroy',$todayusermeal[0]->orderMeal[0]->id)}}">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit">
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">

                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </div><button>
                                        </form>

                                    </div>





                                    @endif

                            </div>



                        </div>
                    </div>

{{--                    @if($todayusermeal[0]->user->id==auth()->user()->getAuthIdentifier())--}}
{{--                        <a href="{{route('meal')}}">--}}
{{--                            <button--}}
{{--                            class="block w-full text-blue-800 text-sm font-semibold rounded-lg hover:bg-gray-100 focus:outline-none focus:shadow-outline focus:bg-gray-100 hover:shadow-xs p-3 my-4">--}}
{{--                            Go to checkout meal orders--}}
{{--                            </button>--}}
{{--                        </a>--}}
{{--                        @endif--}}

{{--                    <button--}}
{{--                        class="block w-full text-blue-800 text-sm font-semibold rounded-lg hover:bg-gray-100 focus:outline-none focus:shadow-outline focus:bg-gray-100 hover:shadow-xs p-3 my-4">Show--}}
{{--                        Full Information</button>--}}
                </div>
                <!-- End of about section -->

                <div class="my-4"></div>

                <!-- Experience and education -->
                <div class="bg-gray-100 p-3 ">

                    <div class="grid grid-cols-2">
                        <div class="col-span-2">
                            <!-- component -->
                            <div class="overflow-x-auto">
                                <div class="min-w-screen  flex items-center justify-center  font-sans overflow-hidden">
                                    <div class="w-full lg:w-6/6">
                                        <div class="bg-white shadow-md rounded my-6">

                                            <table class="min-w-max w-full table-auto">
                                                <caption class="bg-gray-100 p-4 text-xl text-gray-600 uppercase text-sm leading-normal" >My order history</caption>
                                                <thead>
                                                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                                    <th class="py-3 px-6 text-left">Restaurant</th>
                                                    <th class="py-3 px-6 text-left">Meal</th>
                                                    <th class="py-3 px-6 text-center">When</th>
                                                </tr>
                                                </thead>
                                                <tbody class="text-gray-600 text-sm font-light">

                                                @foreach($mealhistory as $meal)
                                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                                    <td class="py-3 px-6 text-left whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="mr-2  " >

                                                            </div>
                                                            <span class="font-medium">{{$meal->name}}</span>
                                                        </div>
                                                    </td>
                                                    <td class="py-3 px-6 text-left">
                                                        <div class="flex items-center">
                                                            <span>{{$meal->meal}}</span>
                                                        </div>
                                                    </td>

                                                    <td class="py-3 px-6 text-center">
                                                        <span class="bg-purple-200 text-purple-600 py-1 px-3 rounded-full text-xs">{{\Illuminate\Support\Carbon::create($meal->updated_at)->toDateString()}}</span>
                                                    </td>

                                                </tr>

                                                @endforeach


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>







{{--                            <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">--}}
{{--                                <span clas="text-green-500">--}}
{{--                                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"--}}
{{--                                         stroke="currentColor">--}}
{{--                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
{{--                                              d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />--}}
{{--                                    </svg>--}}
{{--                                </span>--}}
{{--                                <span class="tracking-wide">My meals</span>--}}
{{--                            </div>--}}
{{--                            <ul class="list-inside space-y-2">--}}
{{--                                @foreach($allusermeals as $usermeal)--}}
{{--                                <li>--}}
{{--                                    <div class="text-teal-600">{{$usermeal->meal}}</div>--}}
{{--                                    <div class="text-gray-500 text-xs">{{\Illuminate\Support\Carbon::create($usermeal->created_at)}}</div>--}}
{{--                                </li>--}}

{{--                                @endforeach--}}

{{--                            </ul>--}}
                        </div>

                    </div>

                    <!-- End of Experience and education grid -->

                </div>
                </div>
                <!-- End of profile tab -->
            </div>
        </div>
    </div>
    </div>



@endsection
