@extends('layouts.adminbase')

@section('title', 'Vehicle Reviews')

@section('content')

<div class="card shadow">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">User Vehicle Reviews</h5>
    </div>
    <table class="table table-responsive table-bordered table-striped">
    @include('message')
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Product</th>
        <th scope="col">User Name</th>
        <th scope="col">User ID</th>
        <th scope="col">Subject</th>
        <th scope="col">Review</th>
        <th scope="col">Rating</th>
        <th scope="col">Status</th>
        <th scope="col">Created at</th>
        <th scope="col">Show</th>
        <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
    @foreach($data as $rs)
        <tr>
        <td>{{$rs->id}}</td>
        <td><a href="{{route('admin.car.show', ['id'=>$rs->car->id])}}">{{$rs->car->title}}</a></td>
        <td>{{$rs->user->name}}</td>
        <td>{{$rs->user->id}}</td>
        <td>{{$rs->subject}}</td>
        <td>{{$rs->review}}</td>
        <td>{{$rs->rate}}</td>
        <td>{{$rs->status}}</td>
        <td>{{$rs->created_at}}</td>
        <td><a href="{{route('admin.comment.show', ['id'=>$rs->id])}}" onclick="return !window.open(this.href, '', 'top=50 left=100 width=425, height=500')" class="btn btn-info btn-circle"><i class="fas fa-info"></i></a></td>
        <td><a href="{{route('admin.comment.destroy', ['id'=>$rs->id])}}" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i></a></td>
        </tr>
    @endforeach
    </tbody>
    </table>
</div>
@endsection

