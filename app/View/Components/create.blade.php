@extends('layout')

@section('content')
    <h1>Add New Product</h1>
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="Product Name" required>
        <textarea name="description" placeholder="Description" required></textarea>
        <input type="number" name="price" placeholder="Price" required>
        <input type="file" name="image">
        <button type="submit">Add Product</button>
    </form>
@endsection