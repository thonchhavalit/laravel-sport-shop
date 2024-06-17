// resources/views/admin/slideshow/show.blade.php
@extends('admin.blank')
@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h2>Slide Details</h2>
                <div class="form-group">
                    <label for="title">Title</label>
                    <p id="title">{{ $slide->title }}</p>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <img src="{{ asset($slide->image) }}" alt="{{ $slide->title }}" width="100">
                </div>
                <a href="{{ url('admin/slide') }}" class="btn btn-primary">Back to List</a>
            </div>
        </div>
    </div>
</div>

@endsection
