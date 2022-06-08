@extends('layouts.adminbase')

@section('title', 'Category List')

@section('content')

<div class="card shadow mb-4 table-responsive">
<div class="card mb-4">
                                <div class="card-header">
                                    {{$data->title}}
                                </div>
                                <div class="row card-body">
                                  <!-- row start -->
                                  <div class="col-sm">
                                      <div>
                                        <div class="card-header">
                                          Category
                                        </div>
                                        <ul class="list-group list-group-flush">
                                              <li class="list-group-item">{{$data->category->title}}</li>
                                      </div>
                                      <div>
                                        <div class="card-header">
                                          Brand
                                        </div>
                                        <ul class="list-group list-group-flush">
                                              <li class="list-group-item">{{$data->brand}}</li>
                                      </div>
                                      <div>
                                        <div class="card-header">
                                          Model
                                        </div>
                                        <ul class="list-group list-group-flush">
                                              <li class="list-group-item">{{$data->model}}</li>
                                      </div>
                                      <div>
                                        <div class="card-header">
                                          Make
                                        </div>
                                        <ul class="list-group list-group-flush">
                                              <li class="list-group-item">{{$data->make}}</li>
                                      </div>
                                      <div>
                                        <div class="card-header">
                                          Detail
                                        </div>
                                        <ul class="list-group list-group-flush">
                                              <li class="list-group-item">{{$data->detail}}</li>
                                      </div>
                                      <div>
                                        <div class="card-header">
                                          Category Keywords
                                        </div>
                                        <ul class="list-group list-group-flush">
                                          @foreach($data->keywords as $rs)
                                              <li class="list-group-item">{{$rs}}</li>
                                          @endforeach
                                        </ul>
                                      </div>
                                  </div>
                                  <!-- row end -->
                                                                    <!-- row start -->

                                  <div class="col-sm">
                                    <div>
                                      <div class="card-header">
                                        Description
                                      </div>
                                      <ul class="list-group list-group-flush">
                                            <li class="list-group-item">{{$data->detail}}</li>
                                    </div>
                                    <div>
                                      <div class="card-header">
                                        Daily Price (24hrs)
                                      </div>
                                      <ul class="list-group list-group-flush">
                                            <li class="list-group-item">{{$data->price}}</li>
                                    </div>
                                    <div>
                                      <div class="card-header">
                                        Seat Count
                                      </div>
                                      <ul class="list-group list-group-flush">
                                            <li class="list-group-item">{{$data->seats}}</li>
                                    </div>
                                    <div>
                                      <div class="card-header">
                                        Door Count
                                      </div>
                                      <ul class="list-group list-group-flush">
                                            <li class="list-group-item">{{$data->doors}}</li>
                                    </div>
                                    <div>
                                      <div class="card-header">
                                        Boot Capacity
                                      </div>
                                      <ul class="list-group list-group-flush">
                                            <li class="list-group-item">{{$data->boot_capacity}}</li>
                                    </div>
                                    <div>
                                      <div class="card-header">
                                        Car Image
                                      </div>
                                      <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                                @if ($data->image)
                                                <div>
                                                <img src="{{Storage::url($data->image)}}"  width="200" height="auto">
                                                <a href="{{Storage::url($data->image)}}" class="btn btn-secondary btn-icon-split">
                                                  <span class="icon text-white-50">
                                                      <i class="fas fa-arrow-right"></i>
                                                  </span>
                                                  <span class="text">See Max Resolution</span>
                                              </a>
                                                </div>
                                                @else
                                                    No Image
                                                @endif</li>
                                      </ul>
                                    </div>
                                  </div>
                                                                    <!-- row end -->
                                  <!-- row start -->
                                  <div class="col-sm">
                                    <div>
                                      <div class="card-header">
                                        Boot Capacity
                                      </div>
                                      <ul class="list-group list-group-flush">
                                            <li class="list-group-item">{{$data->boot_capacity}} lt</li>
                                    </div>
                                    <div>
                                      <div class="card-header">
                                        Fuel Type
                                      </div>
                                      <ul class="list-group list-group-flush">
                                            <li class="list-group-item">{{$data->fuel_type}}</li>
                                    </div>
                                    <div>
                                      <div class="card-header">
                                        Transmission Type
                                      </div>
                                      <ul class="list-group list-group-flush">
                                            <li class="list-group-item">{{$data->transmission_type}}</li>
                                    </div>
                                    <div>
                                      <div class="card-header">
                                        Horsepower
                                      </div>
                                      <ul class="list-group list-group-flush">
                                            <li class="list-group-item">{{$data->horsepower}} hp</li>
                                    </div>
                                    <div>
                                      <div class="card-header">
                                        Engine Capacity
                                      </div>
                                      <ul class="list-group list-group-flush">
                                            <li class="list-group-item">{{$data->engine_capacity}} lt</li>
                                    </div>
                                    <div>
                                      <div class="card-header">
                                        Status
                                      </div>
                                      <ul class="list-group list-group-flush">
                                            <li class="list-group-item">{{$data->status}}</li>
                                    </div>
                                  </div>
                                  <!-- row end -->
                                  </div>
@endsection

