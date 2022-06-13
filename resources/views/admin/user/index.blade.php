@extends('layouts.adminbase')

@section('title', 'User List')

@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Users</h5>
 </div>
    <table class="table table-responsive">
    @include('message')
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Role</th>
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
        <td>{{$rs->name}}</td>
        <td>{{$rs->email}}</td>
        <td>@foreach($rs->roles as $role)
                {{$role->name}}
            @endforeach
        </td>
        <td>{{$rs->status}}</td>
        <td>{{$rs->created_at}}</td>
        <td><a href="{{route('admin.user.show', ['id'=>$rs->id])}}"  onclick="return !window.open(this.href, '', 'top=50 left=100 width=325, height=500')" class="btn btn-info btn-circle"><i class="fas fa-info"></i></a></td>
        <td><a href="{{route('admin.user.destroy', ['id'=>$rs->id])}}" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i></a></td>
        </tr>
    @endforeach
    </tbody>
    </table>
</div>
@endsection

