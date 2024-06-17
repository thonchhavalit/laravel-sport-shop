// resources/views/admin/product/edit.blade.php

@extends('admin.blank')

@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h2>Edit Product</h2>
                <form action="{{ url('admin/products/' . $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="product_name">Product Name</label>
                        <input type="text" name="product_name" class="form-control" id="product_name" value="{{ $product->product_name }}" required>
                    </div>

                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" step="0.01" min="0" name="price" class="form-control" id="price" value="{{ $product->price }}" required>
                    </div>

                    <div class="form-group">
                        <label for="brand">Brand</label>
                        <input type="text" name="brand" class="form-control" id="price" value="{{ $product->brand }}" required>
                    </div>

                    <div class="form-group">
                        <label for="image">Current Image</label><br>
                        <img src="{{ asset($product->image) }}" alt="{{ $product->product_name }}" width="100">
                    </div>

                    <div class="form-group">
                        <label for="new_image">New Image (optional)</label>
                        <input type="file" name="new_image" class="form-control-file" id="new_image">
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
