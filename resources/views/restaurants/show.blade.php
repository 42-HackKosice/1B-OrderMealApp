@extends('layouts.app')

@section('content')


    <section class="text-gray-700 body-font">
{{--        <img class="object-cover overflow-hidden w-full ..."--}}
{{--            src="https://www.mcdonalds.sk/uploads/images/news/150/705b8f7235591bdf2089bbd682a5d655.jpeg" alt="Girl in a jacket">--}}
        <div class="mt-12 container px-8 py-32 mx-auto lg:px-4 bg-gray-200 rounded-3xl">
            <div class="flex flex-col w-full mb-6 text-left lg:text-center">
{{--                <h2 class="mb-1 text-xs font-semibold tracking-widest text-blue-600 uppercase title-font">a great--}}
{{--                    header right here</h2>--}}
                <h1 class="mb-6 text-2xl font-semibold tracking-tighter text-black sm:text-5xl title-font">
                   {{$data->name}}
                </h1>
                <p class="mx-auto text-base font-medium leading-relaxed text-gray-700 lg:w-2/3">
                    {{$data->description}}
                </p>
                <p class="mt-4 text-xs font-semibold tracking-widest text-gray-700 uppercase title-font">
                    {{$data->adress}}
                </p>

                <p class="mt-4 text-xs font-semibold tracking-widest text-blue-600 uppercase title-font">
                    <a href=" {{$data->web}}">  {{$data->web}}</a>
                </p>
            </div>
            <div class="flex lg:justify-center">
                <button
                    class="inline-flex px-6 py-2 font-semibold text-white transition duration-500 ease-in-out transform bg-black rounded-lg hover:bg-gray-800 hover:to-black focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">
                    {{$data->phone}}
                </button>
            </div>
    </section>

@endsection
