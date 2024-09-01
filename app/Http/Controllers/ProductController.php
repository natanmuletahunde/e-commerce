<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'image' => 'image|nullable',
        ]);

        $product = new Product($request->all());
        if ($request->hasFile('image')) {
            $product->image = $request->file('image')->store('images', 'public');
        }
        $product->save();

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }
}
