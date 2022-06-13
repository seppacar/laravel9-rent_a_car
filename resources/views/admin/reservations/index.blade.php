@extends('layouts.adminbase')

@section('title', 'Reservations')

@section('content')

<div class="card shadow">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Reservation Orders</h5>
    </div>
    <table class="table table-responsive table-bordered table-striped">
    @include('message')
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Vehicle</th>
        <th scope="col">User ID</th>
        <th scope="col">User Name</th>
        <th scope="col">Pick Up</th>
        <th scope="col">Drop Off</th>
        <th scope="col">Duration</th>
        <th scope="col">Price</th>
        <th scope="col">Note</th>
        <th scope="col">Status</th>
        <th scope="col">Show</th>
        <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
    @foreach($data as $rs)
        <tr>
        <td>{{$rs->id}}</td>
        <td>{{$rs->car->title}}</td>
        <td>{{$rs->user->id}}</td>
        <td>{{$rs->user->name}}</td>
        <td>{{$rs->rezdate}} {{$rs->reztime}}</td>
        <td>{{$rs->returndate}} {{$rs->returntime}}</td>
        <td>{{$rs->days}}</td>
        <td>{{$rs->price}}</td>
        <td>{{$rs->note}}</td>
        <td>{{$rs->status}}</td>
        <td><a href="{{route('admin.reservation.show', ['id'=>$rs->id])}}" onclick="return !window.open(this.href, '', 'top=50 left=100 width=425, height=500')" class="btn btn-info btn-circle"><i class="fas fa-info"></i></a></td>
        <td><a href="{{route('admin.reservation.destroy', ['id'=>$rs->id])}}" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i></a></td>
        </tr>
    @endforeach
    </tbody>
    </table>
</div>
@endsection

