@extends('admin.blank')

@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h2>All Products</h2>
                <a href="{{ url('/admin/products/create') }}" class="btn btn-primary btn-fw py-2 px-3">Add new</a>
              
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Brand</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $product->product_name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->brand }}</td>
                            <td><img src="{{ asset($product->image) }}" alt="Product Image" style="max-width: 100px; max-height: 100px;"></td>
                            <td>
                                <a href="{{ url('admin/products/'.$product->id) }}" class="btn btn-primary btn-rounded">Show</a>
                                <a href="{{ url('admin/products/'.$product->id.'/edit') }}" class="btn btn-warning btn-rounded">Edit</a>
                                
                                <form id="del_form_{{$product->id}}" action="{{ url('admin/products/'.$product->id) }}" method="POST" style="display:none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                                <a href="#" class="btn btn-danger btn-rounded" onclick="event.preventDefault(); document.getElementById('del_form_{{$product->id}}').submit();">
                                    Delete
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
