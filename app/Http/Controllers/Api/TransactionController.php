<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\Product;

class TransactionController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id', //memastikan product_id ada di tabel products
            'quantity' => 'required|integer|min:1', //memastikan quantity adalah integer dan minimal 1
        ]);

        $product = Product::find($request->product_id); 

        $totalPrice = $product->price_product * $request->quantity;

        $transaction = Transaction::create([
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'total_price' => $totalPrice,
        ]);

        $product->decrement('stock_product', $request->quantity); //mengurangi stok produk
        $product->validate(); //validasi stok tidak boleh negatif

        return response()->json([
            'transactions' => $transaction,
            'message' => 'Transaction created successfully'
        ], 201);
    }
}
