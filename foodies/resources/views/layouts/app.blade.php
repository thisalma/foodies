<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce System</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-gray-800 text-white p-4 flex justify-between items-center">
        <!-- Logo / Brand -->
        <a href="{{ route('home') }}" class="font-bold text-xl">Ecommerce</a>

        <!-- Links -->
        <div class="space-x-4">
            <a href="{{ route('home') }}" class="hover:text-gray-300">Home</a>
            <a href="{{ route('products') }}" class="hover:text-gray-300">Products</a>
            
            @auth
                <a href="{{ route('cart') }}" class="hover:text-gray-300">Cart</a>
                <a href="{{ route('orders') }}" class="hover:text-gray-300">Orders</a>
                <a href="{{ route('profile') }}" class="hover:text-gray-300">Profile</a>
                
                <!-- Logout Form -->
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="hover:text-gray-300">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="hover:text-gray-300">Login</a>
                <a href="{{ route('register') }}" class="hover:text-gray-300">Register</a>
            @endauth
        </div>
    </nav>

    <!-- Main Content -->
    <main class="p-6">
        @yield('content')
    </main>

    @livewireScripts
</body>
</html>
