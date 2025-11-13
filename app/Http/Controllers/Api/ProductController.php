<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //GET/api/products
    public function index()
    {
        return response()->json(Product::all());
    }

    //POST/api/products
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name_product' => 'required|string|max:255',
            'price_product' => 'required|integer',
            'stock_product' => 'required|integer',
        ]);

        $product = Product::create($validated);
        return response()->json($product, 201);
    }

    //GET/api/products/{id}
    public function show(string $id)
    {
        $product = Product::find($id);
        if (!product) {
            return response()->json(['message' => 'Product not found'], 404);
        }
        return response()->json($product);
    }

    //PUT/api/products/{id}
    public function update(Request $request, string $id)
    {
        $product = Product::find($id);
        if (!product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        $validated = $request->validate([
            'name_product' => 'sometimes|required|string|max:255',
            'price_product' => 'sometimes|required|integer',
            'stock_product' => 'sometimes|required|integer',
        ]);

        $product->update($validated);
        return response()->json($product);
    }

    //DELETE/api/products/{id}
    public function destroy(string $id)
    {
        $product = Product::find($id);
        if (!product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        $product->delete();
        return response()->json(['message' => 'Product deleted successfully']);
    }
}
