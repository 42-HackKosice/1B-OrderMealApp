@extends('layouts.app')

@section('content')

    <main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
        <div class="flex">
            <div class="w-full">
                <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

                    <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                        My order {{ $order->time->toDateString()}}
                    </header>

                    <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
                          action="{{ route('order.update') }}">
                        @method('PATCH')

                        @csrf

                        <div class="flex flex-wrap">
                            <label for="time" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                {{ __('Time') }}:
                            </label>

                            <!-- component -->

                            <input id="time" type="time" class="form-input w-full @error('time')  border-red-500 @enderror"
                                   name="time" value="{{ old('time') }}" required autocomplete="time" autofocus>

                            @error('time')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>



                        <div class="flex flex-wrap">
                            <label for="restaurant" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                {{ __('Restaurant') }}:
                            </label>
                                <select name="restaurant" id="restaurant" class="w-full form-select ">
                                    @if($order->restaurant==null)
                                        <option value="none" class="py-1" selected disabled hidden> Select Restaurant </option>
                                    @else
                                    <option value="{{$order->restaurant->id}}"class="py-1" selected >
                                        {{$order->restaurant->name}}
                                    </option>
                                    @endif
                                        @foreach($restaurants as $restaurant)
                                            <option value="{{$restaurant->id}}" class="py-1">{{$restaurant->name}}</option>
                                        @endforeach


                                </select>

                            @error('restaurant')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <div class="flex flex-wrap">
                            <button type="submit"
                                    class="w-full select-none font-bold whitespace-no-wrap p-3 my-6 rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-4">
                                {{ __('Save') }}
                            </button>
                            </p>
                        </div>
                    </form>

                </section>
            </div>
        </div>
    </main>

@endsection
