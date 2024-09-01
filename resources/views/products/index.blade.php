@extends('layout') <!-- Ensure you have a layout file -->

@section('content')
    <h1>Products</h1>
    @foreach ($products as $product)
        <div class="product">
            <h2>{{ $product->name }}</h2>
            <p>{{ $product->description }}</p>
            <p>Price: ${{ $product->price }}</p>
            <a href="{{ route('products.show', $product) }}">View Details</a>
        </div>
    @endforeach
    <a href="{{ route('products.create') }}">Add New Product</a>
@endsection