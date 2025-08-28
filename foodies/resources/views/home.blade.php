@extends('layouts.app')

@section('content')
<div class="flex flex-col items-center justify-top min-h-[80vh] px-0">
    <!-- Light pink rectangle box -->
    <div class="bg-pink-100 shadow-md rounded-2xl p-6 text-center w-full">
        <h1 class="text-3xl font-bold text-gray-800">
            Welcome to <span class="text-pink-500">FOODIES</span> Website
        </h1>
    </div>

    <!-- Full-width image -->
    <div class="mt-1 w-full">
        <img src="{{ asset('images/cartoon-food-pictures-3.jpg') }}" 
             alt="Foodies Banner" 
             class="w-full h-85 object-cover">
    </div>

    <!-- Description under the image -->
    <div class="mt-4 max-w-4xl text-center px-4">
        <p class="text-gray-700 text-lg">
            <span class="font-semibold text-pink-500">Foodies</span> is your ultimate online marketplace 
            where you can explore and purchase imported food products from top international brands. 
            Discover a variety of high-quality items, add them to your cart, and enjoy a seamless shopping 
            experience delivered right to your doorstep. Whether you’re looking for gourmet treats, snacks, 
            or specialty ingredients, Foodies makes it easy to shop and enjoy the finest products from around 
            the world.
        </p>
    </div>
</div>
@endsection
