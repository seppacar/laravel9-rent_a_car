@extends('layouts.adminbase')

@section('title', 'Category List')

@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Categories</h5>
        <a href="{{route('admin.category.create')}}" class="float-right btn btn-success btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-check"></i>
                                        </span>
                                        <span class="text">Add New Category</span>
                                    </a>    </div>
    <table class="table table-responsive table-bordered table-striped">
    @include('message')
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Keywords</th>
        <th scope="col">Description</th>
        <th scope="col">Image</th>
        <th scope="col">Created at</th>
        <th scope="col">Updated at</th>
        <th scope="col">Status</th>
        <th scope="col">Info</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>

        </tr>
    </thead>
    <tbody>
    @foreach($data as $rs)
        <tr>
        <td>{{$rs->id}}</td>
        <td>{{$rs->title}}</td>
        <td>{{$rs->keywords}}</td>
        <td>{{$rs->description}}</td>
        <td>
            @if ($rs->image)
            <img src="{{Storage::url($rs->image)}}" width="150" height="auto">
            @else
                No Image
            @endif
        </td>
        <td>{{$rs->created_at}}</td>
        <td>{{$rs->updated_at}}</td>
        <td>{{$rs->status}}</td>
        <td><a href="{{route('admin.category.show', ['id'=>$rs->id])}}" class="btn btn-info btn-circle"><i class="fas fa-info"></i></a></td>
        <td><a href="{{route('admin.category.edit', ['id'=>$rs->id])}}" class="btn btn-warning btn-circle"><i class="fas fa-exclamation-triangle"></i></a></td>
        <td><a href="{{route('admin.category.destroy', ['id'=>$rs->id])}}" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i></a></td>
        </tr>
    @endforeach
    </tbody>
    </table>
</div>
@endsection

