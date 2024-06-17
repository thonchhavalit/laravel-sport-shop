@extends('admin.blank')
@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin">
        <div class="card">
            <div class="catd-body">
                <h2>Create Slide</h2>
                <form action="{{url('/admin/slide')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Slide title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label> Upload Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection