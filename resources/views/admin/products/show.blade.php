// resources/views/admin/product/show.blade.php

@extends('admin.blank')

@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title mb-4">Product Details</h2>
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset($product->image) }}" alt="{{ $product->product_name }}" class="img-fluid">
                    </div>
                    <div class="col-md-8">
                        <div class="details">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <p id="name">{{ $product->product_name }}</p>
                            </div>
                            <div class="form-group">
                                <label for="price">Price:</label>
                                <p id="price">${{ $product->price }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <a href="{{ url('admin/products') }}" class="btn btn-outline-primary btn-sm">Back to List</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
