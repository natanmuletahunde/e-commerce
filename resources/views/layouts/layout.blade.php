<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <nav>
        <a href="{{ route('products.index') }}">Home</a>
        @auth
            <a href="{{ route('products.create') }}">Add Product</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Logout</button>
            </form>
        @endauth
        @guest
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        @endguest
    </nav>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>