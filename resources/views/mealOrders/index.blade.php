@extends('layouts.app')

@section('content')


    <div style="background-image: url(https://mazur.blob.core.windows.net/obrazky/mediterranean-cuisine-2378758.jpg?sp=rl&st=2021-04-08T15:28:20Z&se=2086-10-09T15:28:00Z&sv=2020-02-10&sr=b&sig=aJSFdX9XjK3lMPE3AeX5fe1jyndESQAZfWLjavolLwY%3D); background-size: cover" class=" bg-gray-100  ">
        <div class=" pt-40 bg-clip-padding bg-black bg-opacity-25 text-white  p-12 text-center ">
            @if($todayRestaurant->restaurant!==null)

            <div class=" md:text-3xl text-4xl font-bold">{{$todayRestaurant->restaurant->name}}</div>
            <div class="text-xl font-normal mt-4">{{$todayRestaurant->restaurant->description}}
                <a href="{{$todayRestaurant->restaurant->web}}"><div class="text-lg font-normal mt-4">
                       Website</div></a>
            </div>
            <div class="mt-6 flex justify-center h-12 relative">
                <div class="flex shadow-md font-medium absolute py-2 px-4 text-green-100
        cursor-pointer bg-green-600 rounded text-lg tr-mt  svelte-jqwywd">{{$todayRestaurant->restaurant->phone}}</div>
            </div>
            @endif
        </div>
    </div>

    <div class="overflow-x-auto">
        <div class="min-w-screen  bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
            <div class="w-full lg:w-4/6">
                <div class="bg-white shadow-md rounded my-6">
                    <table class="min-w-max w-full table-auto">
                        <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">Choosen by</th>
                            <th class="py-3 px-6 text-center">Meal order</th>

                        </tr>
                        </thead>


                        <tbody class="text-gray-600 text-sm font-light ">
                        @foreach($orders as $order)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">

                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <div class="mr-2">
                                            <img class="w-6 h-6 rounded-full" src="https://cdn.icon-icons.com/icons2/1378/PNG/512/avatardefault_92824.png"/>
                                        </div>
                                        <span>{{$order->user->name}}</span>
                                    </div>
                                </td>

                                <td class="py-3 px-6 text-center">
                                    <div class="flex items-center justify-center">
                                        {{$order->meal}}
                                    </div>
                                </td>


                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection
