@extends('layouts.adminbase')

@section('title', 'Title Placeholder')

@section('content')

<div class="row">

    <!-- Earnings (Dail) Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Earnings (Daily)</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">    @php
                            App\Http\Controllers\AdminPanel\HomeController::earningsDaily();
                        @endphp TL</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Earnings (Monthly)</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">    @php
                            App\Http\Controllers\AdminPanel\HomeController::earningsMonthly();
                        @endphp</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                            </div>
                            <div class="col">
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Pending Orders</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">@php
                            App\Http\Controllers\AdminPanel\HomeController::pendingOrders();
                        @endphp</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
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

@endsection