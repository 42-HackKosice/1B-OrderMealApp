@extends('layouts.app')

@section('content')

    <main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
        <div class="flex">
            <div class="w-full">
                <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

                    <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                        My meal order
                    </header>

                    <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
                          action="{{ route('meal.update') }}">
                            @method('PATCH')
                        @csrf

                        <div class="flex flex-wrap">
                            <label for="meal" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                {{ __('Food Order') }}:
                            </label>

                            <!-- component -->

                            <textarea id="meal" type="textarea" class="form-input w-full @error('meal')  border-red-500 @enderror"
                                      name="meal" value="{{ old('meal') }}" required autocomplete="meal" >
                               {{$todayMealOrder->meal}}
                            </textarea>



                            @error('meal')
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
