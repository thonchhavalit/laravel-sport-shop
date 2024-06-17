<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(); // Fetch all products from the database
        return view('admin.products.index', compact('products')); // Pass products to the view
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $product = new Product;
        $product->product_name = $request->product_name;
        $product->price = $request->price;
        $product->brand = $request->brand;

        if ($request->hasFile('image')) {
            $imageFile = $request->image;
            $imageName = time().'.'.$imageFile->getClientOriginalExtension();
            $imageFile->move(public_path('upload/admin/image/product/'), $imageName);
            $imagePath = 'upload/admin/image/product/'.$imageName;
            $product->image = $imagePath;
        }

        $product->save();
        return redirect()->route('products.index')->with('success', 'Product created successfully');
    }

    public function show($id)
    {
        $product = Product::findOrFail($id); // Fetch the product by ID
        return view('admin.products.show', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id); // Fetch the product by ID
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->product_name = $request->product_name;
        $product->price = $request->price;
        $product->brand = $request->brand;

        if ($request->hasFile('image')) {
            $imageFile = $request->image;
            $imageName = time().'.'.$imageFile->getClientOriginalExtension();
            $imageFile->move(public_path('upload/admin/image/product/'), $imageName);
            $imagePath = 'upload/admin/image/product/'.$imageName;
            $product->image = $imagePath;
        }

        $product->save();
        return redirect()->route('products.index')->with('success', 'Product updated successfully');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }
}
