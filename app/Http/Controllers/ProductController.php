<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function store(Request $request)
{
    $product = Product::create([
        'product' => $request->product,
        'cost' => $request->cost,
        'name' => $request->name,
        'age' => $request->age
    ]);

    return response()->json([
        "message" => "Product added successfully",
        "data" => $product
    ]);
}

}


