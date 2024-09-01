@extends('layout')

@section('content')
    <h1>{{ $product->name }}</h1>
    <p>{{ $product->description }}</p>
    <p>${{ $product->price }}</p>
    
    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
        <input type="hidden" name="product_id" value="{{ $product->id }}">
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" min="1" value="1">
        <button type="submit">Order</button>
    </form>
@endsection