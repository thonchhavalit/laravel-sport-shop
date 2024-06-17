@extends('admin.blank')

@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h2>All slideshows</h2>
                <a href="{{ url('/admin/slide/create') }}" class="btn btn-primary btn-fw py-2 px-3">Add new</a>
              
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($slides as $slide)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $slide->title }}</td>
                            <td>{{ $slide->image }}</td>
                            <td>
                                <a href="{{ url('admin/slide/'.$slide->id) }}" class="btn btn-primary btn-rounded">Show</a>
                                <a href="{{ url('admin/slide/'.$slide->id.'/edit') }}" class="btn btn-warning btn-rounded">Edit</a>
                                
                                <form id="del_form_{{$slide->id}}" action="{{ url('admin/slide/'.$slide->id) }}" method="POST" style="display:none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                                <a href="#" class="btn btn-danger btn-rounded" onclick="event.preventDefault(); document.getElementById('del_form_{{$slide->id}}').submit();">
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
