@extends('layouts.app')

@section('content')
    <!-- component -->
    <div class="overflow-x-auto">
        <div class="min-w-screen min-h-screen bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
            <div class="w-full lg:w-5/6">
                <div class="bg-white shadow-md rounded my-6">
                    <table class="min-w-max w-full table-auto">
                        <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">Restaurant</th>
                            <th class="py-3 px-6 text-left">Client</th>
                            <th class="py-3 px-6 text-center">When</th>
                            <th class="py-3 px-6 text-center">Status</th>
                            <th class="py-3 px-6 text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                        @foreach($orders as $order)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             width="32.268px" height="32.268px" viewBox="0 0 480.268 480.268" style="enable-background:new 0 0 480.268 480.268;"
                                             xml:space="preserve">
<g>
    <g id="_x35_3_59_">
        <path d="M409.934,70.334C364.579,24.979,304.274,0.001,240.133,0.001c-64.142,0-124.443,24.978-169.799,70.333
			C24.979,115.69,0,175.992,0,240.134c0,64.143,24.979,124.443,70.334,169.8c45.355,45.355,105.657,70.333,169.799,70.333
			c64.142,0,124.445-24.978,169.801-70.333c45.356-45.354,70.334-105.657,70.334-169.8
			C480.268,175.992,455.289,115.689,409.934,70.334z M372.448,396.754c-0.007-10.41-0.016-18.132-0.025-20.646
			c0.047-10.027-0.274-250.793-0.274-250.793l-5.493-0.025c0,0-44.817,25.293-44.817,212.851
			c34.443,9.46,19.951,47.083,17.328,51.855c0,3.016,0.073,14.851,0.174,29.633c-18.913,10.495-39.646,18.086-61.6,22.17
			c0.008-43.035,0.016-96.431,0.016-103.03c-0.023-10.146-18.49-52.543,12.369-84.031c0.023-0.047,0.094-0.131,0.141-0.195
			c7.525-7.135,12.498-16.966,13.247-28.01c0.046-0.778,0.024-2.736,0.024-2.736l-10.564-91.568l-9.732-0.012l2.886,102.042
			l-11.703-0.024v-102.03l-8.56,0.024v102.666h-9.694l-0.013-102.678l-9.424,0.012l-0.012,102.666h-11.484l3.281-102.702h-8.884
			l-10.807,86.862c0,0-0.268,3.271-0.268,4.51c0,13.395,6.213,25.376,15.922,33.167c32.009,36.125,10.16,72.971,10.16,81.729
			c0.016,5.856,0.021,62.713,0.023,106.749c-1.508,0.033-3.018,0.058-4.532,0.058c-27.267,0-53.302-5.36-77.124-15.062
			c0-41.409,0-87.193,0-92.479c-7.631-20.628-14.742-56.406-3.953-71.539c19.726-5.966,42.318-32.8,42.33-70.407
			c0-37.297-20.195-71.61-56.039-72.192v-0.024c-0.172,0-0.766,0-0.938,0c0,0,0,0.012,0,0.024
			c-35.839,0.582-56.027,34.895-56.027,72.192c-0.012,37.607,22.604,64.441,42.318,70.407c10.807,15.133,3.686,50.911-3.945,71.539
			c0,4.475,0,37.977,0,73.274C71.493,374.208,35,311.356,35,240.134c0-113.111,92.022-205.133,205.133-205.133
			c113.111,0,205.135,92.022,205.135,205.133C445.268,302.862,416.955,359.095,372.448,396.754z M112.119,210.633
			c0.315,2.542,1.217,5.418,2.089,8c0.814,2.694,1.8,5.358,2.855,7.91c2.018,5.152,4.195,9.929,6.065,14.047
			c1.899,4.083,3.584,7.501,4.901,9.797c1.253,2.356,2.393,3.365,2.475,3.271c0.023,0.117-1.674-0.254-3.863-2.041
			c-2.236-1.728-5.092-4.487-8.084-8.118c-3.038-3.625-6.182-8.119-9.15-13.288c-1.435-2.599-2.795-5.371-4.059-8.302
			c-1.205-3.063-2.201-6.012-2.877-9.502c-1.241-6.712-1.033-13.126-0.334-19.031c0.658-5.899,1.91-11.282,3.307-15.761
			c1.365-4.511,2.932-8.138,4.23-10.612c1.266-2.517,2.297-3.708,2.297-3.708s-0.219,1.602-0.328,4.255
			c-0.081,2.659-0.218,6.475-0.355,11.032C111.183,187.565,110.441,199.779,112.119,210.633z"/>
    </g>

                                    </div>

                                    <span  class="font-medium"> <a href="{{route('restaurants.show',$order->restaurant->id)}}">
                                        {{$order->restaurant->name}}  </a></span>

                                </div>
                            </td>
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
                                    {{$order->time->isoFormat('HH:mm dddd D ')}}
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <span class="bg-purple-200 text-purple-600 py-1 px-3 rounded-full text-xs">Active</span>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center">
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </div>
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
