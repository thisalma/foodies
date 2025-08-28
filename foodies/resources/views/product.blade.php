@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-6">

    <!-- Search Bar -->
    <form action="{{ route('products') }}" method="GET" class="mb-6">
        <input type="text" name="search" placeholder="Search products..."
               value="{{ request()->search }}"
               class="w-full md:w-1/2 px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-pink-500">
    </form>

    <!-- Products Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach($products as $product)
            <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                <img src="{{ asset('storage/' . $product->image_path) }}" 
                     alt="{{ $product->name }}" 
                     class="w-40 h-40 object-cover mb-3 rounded-lg">
                <h2 class="font-bold text-lg mb-1">{{ $product->name }}</h2>
                <p class="text-gray-600 text-sm mb-2">{{ $product->description }}</p>
                <p class="text-pink-500 font-semibold mb-2">${{ $product->price }}</p>
                <form action="{{ route('cart.add', $product->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="bg-pink-500 text-white px-4 py-2 rounded-lg hover:bg-pink-600">
                        Add to Cart
                    </button>
                </form>
            </div>
        @endforeach
    </div>

    @if($products->isEmpty())
        <p class="text-center text-gray-500 mt-6">No products found.</p>
    @endif
</div>
@endsection
