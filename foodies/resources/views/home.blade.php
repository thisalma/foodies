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
             class="w-full h-auto object-cover">
    </div>
</div>
@endsection
