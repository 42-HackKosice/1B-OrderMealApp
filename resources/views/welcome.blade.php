<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
<div class="flex flex-col">
    @if(Route::has('login'))
        <div class="absolute top-0 right-0 mt-4 mr-4 space-x-4 sm:mt-6 sm:mr-6 sm:space-x-6">
            @auth
                <a href="{{ url('/home') }}" class="text-white font-bold text-xl mb-4">{{ __('Home') }}</a>
            @else
                <a href="{{ route('login') }}" class="text-white font-bold text-xl mb-4">{{ __('Login') }}</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="text-white font-bold text-xl mb-4">{{ __('Register') }}</a>
                @endif
            @endauth
        </div>
    @endif

{{--    <div class="min-h-screen flex items-center justify-center">--}}
{{--        <div class="flex flex-col justify-around h-full">--}}
{{--            <div>--}}
{{--                <h1 class="mb-6 text-gray-600 text-center font-light tracking-wider text-4xl sm:mb-8 sm:text-6xl">--}}
{{--                    {{ $data[0]->name }}--}}
{{--                </h1>--}}
{{--                <ul class="flex flex-col space-y-2 sm:flex-row sm:flex-wrap sm:space-x-8 sm:space-y-0">--}}
{{--                    <li>--}}
{{--                        <a href="https://laravel.com/docs" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase" title="Documentation">--}}

{{--                        </a>--}}
{{--                    </li>--}}

{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- component -->
        <!-- This is an example component -->
        <div class="w-full h-screen bg-center bg-no-repeat bg-cover" style="background-image: url('https://images.creativemarket.com/0.1.0/ps/7358571/1820/1213/m1/fpnw/wm1/yhkghshrdewym9cqaf6dydfgaym5exkmox3demunpyzo6v0nfog8cwdotjqhyb1w-.jpg?1574657243&s=63f255806cf9d9dfa9c86f3d340cce03');">
            <div class="w-full h-screen bg-opacity-50 bg-black flex justify-center items-center  ">
                <div class="mx-4 text-center text-white  ">
                    @if($data->isNotEmpty())
                        @if($data[0]->restaurant!=null)
                        <a href="{{route('restaurants.show',$data[0]->restaurant->id)}}">

                    <h1 class="font-bold text-6xl mb-4">{{$data[0]->restaurant->name}}</h1>

                        </a>
                        @endif
                    <h2 class="font-bold text-3xl mb-8">{{$data[0]->user->name}}</h2>

                        <h3 class="font-bold text-3xl mb-12">{{$data[0]->time->isoFormat('HH:mm dddd D')}}</h3>
                    <div>

                        @else
                            <h1 class="font-bold text-6xl mb-4">Free Time</h1>
                        @endif






{{--                        <h2 class="font-bold text-3xl mb-8">{{$data[0]->user->name}}</h2>--}}

{{--                        <h3 class="font-bold text-3xl mb-12">{{$data[0]->time->isoFormat('HH:mm dddd D')}}</h3>--}}
{{--                        <div>--}}
{{--                            <a href="{{route('restaurants.show',$data[0]->restaurant->id)}}" class="bg-blue-500 rounded-md font-bold text-white text-center px-4 py-3 transition duration-300 ease-in-out hover:bg-blue-600 mr-2">--}}
{{--                                Check restaurant--}}
{{--                            </a>--}}

                    </div>
                </div>
            </div>
        </div>


</div>
</body>
</html>
