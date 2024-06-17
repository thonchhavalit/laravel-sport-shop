<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FetchProduct extends Controller
{
    public function index()
    {
        $product = Product::all(); // Fetch all products from the database
        return view('frontend.products', compact('product')); // Pass products to the view
    }
}