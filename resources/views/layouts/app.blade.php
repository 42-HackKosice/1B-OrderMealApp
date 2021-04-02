<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
{{--    <div id="app">--}}
{{--        <header class="bg-blue-900 py-6">--}}
{{--            <div class="container mx-auto flex justify-between items-center px-6 ">--}}
{{--                <div class="space-x-4">--}}
{{--                    <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">--}}
{{--                        OrderingFood--}}
{{--                    </a>--}}
{{--                    @auth()--}}
{{--                        <a href="{{ route('restaurants') }}"--}}
{{--                           class=" text-gray-300 text-sm sm:text-base no-underline hover:underline ">--}}
{{--                            Restaurants--}}
{{--                        </a>--}}
{{--                        <a href="{{ route('order') }}"--}}
{{--                           class=" text-gray-300 text-sm sm:text-base no-underline hover:underline ">--}}
{{--                            Ordering Board--}}
{{--                        </a>--}}
{{--                    @endauth--}}

{{--                </div>--}}

{{--                <nav class="space-x-4 text-gray-300 text-sm sm:text-base ">--}}
{{--                    @guest--}}
{{--                        <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                        @if (Route::has('register'))--}}
{{--                            <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                        @endif--}}
{{--                    @else--}}


{{--                        <span><a href="{{route('myOrders')}}">My orders</a></span>--}}
{{--                        <span>{{ Auth::user()->name }}</span>--}}



{{--                        <a href="{{ route('logout') }}"--}}
{{--                           class="no-underline hover:underline"--}}
{{--                           onclick="event.preventDefault();--}}
{{--                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>--}}
{{--                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">--}}
{{--                            {{ csrf_field() }}--}}
{{--                        </form>--}}
{{--                    @endguest--}}
{{--                </nav>--}}
{{--            </div>--}}
{{--        </header>--}}
<!-- component -->
<style>
    :root {
        --main-color: #4a76a8;
    }

    .bg-main-color {
        background-color: var(--main-color);
    }

    .text-main-color {
        color: var(--main-color);
    }

    .border-main-color {
        border-color: var(--main-color);
    }
</style>
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>



<div class="bg-gray-100">
    <div class="w-full text-white bg-main-color">
        <div x-data="{ open: false }"
             class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
            <div class="p-4 flex flex-row items-center justify-between">
                <a href="/"
                   class="text-lg font-semibold tracking-widest uppercase rounded-lg focus:outline-none focus:shadow-outline">Ordering App</a>
                                @auth()
                                    <span>
                                        <a href="{{ route('restaurants') }}"
                                           class=" text-sm font-semibold text-left bg-transparent hover:bg-blue-800 md:w-auto md:inline md:mt-0 md:ml-4 hover:bg-gray-200 focus:bg-blue-800 focus:outline-none focus:shadow-outline ">
                                            Restaurants
                                        </a>
                                        <a href="{{ route('order') }}"
                                           class="text-sm font-semibold text-left bg-transparent hover:bg-blue-800 md:w-auto md:inline md:mt-0 md:ml-4 hover:bg-gray-200 focus:bg-blue-800 focus:outline-none focus:shadow-outline ">
                                            Ordering Board
                                        </a>
                                        </span>
                                    @endauth
                <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                        <path x-show="!open" fill-rule="evenodd"
                              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                              clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd"
                              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>

            @guest
                <nav
                     class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">
                <a class="text-sm font-semibold text-left bg-transparent hover:bg-blue-800 md:w-auto md:inline md:mt-0 md:ml-4 hover:bg-gray-200 focus:bg-blue-800 focus:outline-none focus:shadow-outline"
                   href="{{ route('login') }}">{{ __('Login') }}</a>
                @if (Route::has('register'))
                    <a class="text-sm font-semibold text-left bg-transparent hover:bg-blue-800 md:w-auto md:inline md:mt-0 md:ml-4 hover:bg-gray-200 focus:bg-blue-800 focus:outline-none focus:shadow-outline"
                       href="{{ route('register') }}">{{ __('Register') }}</a>
                </nav>
                @endif
            @else
                <nav :class="{'flex': open, 'hidden': !open}"
                     class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">


                <div @click.away="open = false" class="relative" x-data="{ open: false }">



                    <button @click="open = !open"
                            class="flex flex-row items-center space-x-2 w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent hover:bg-blue-800 md:w-auto md:inline md:mt-0 md:ml-4 hover:bg-gray-200 focus:bg-blue-800 focus:outline-none focus:shadow-outline">
                        <span>{{ Auth::user()->name }}</span>
                        <img class="inline h-6 rounded-full"
                             src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png">
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
                             class="inline w-4 h-4 transition-transform duration-200 transform">
                            <path fill-rule="evenodd"
                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100"
                         x-transition:enter-start="transform opacity-0 scale-95"
                         x-transition:enter-end="transform opacity-100 scale-100"
                         x-transition:leave="transition ease-in duration-75"
                         x-transition:leave-start="transform opacity-100 scale-100"
                         x-transition:leave-end="transform opacity-0 scale-95"
                         class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                        <div class="py-2 bg-white text-blue-800 text-sm rounded-sm border border-main-color shadow-sm">
                            <a class="block px-4 py-2 mt-2 text-sm bg-white md:mt-0 focus:text-gray-900 hover:bg-indigo-100 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                               href="{{route('myprofile')}}">My profile</a>
                            <a class="block px-4 py-2 mt-2 text-sm bg-white md:mt-0 focus:text-gray-900 hover:bg-indigo-100 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                               href="{{route('myOrders')}}">My orders</a>

                            <div class="border-b"></div>

                            <a href="{{ route('logout') }}"
                               class="block px-4 py-2 mt-2 text-sm bg-white md:mt-0 focus:text-gray-900 hover:bg-indigo-100 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                               onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                {{ csrf_field() }}
                            </form>

                        </div>

                    </div>

                </div>
                    @endguest

            </nav>

        </div>
    </div>


    <!-- End of Navbar -->


        @yield('content')
    </div>
</body>
</html>
