@extends('layouts.adminbase')

@section('title', 'Category List')

@section('content')

<div class="card shadow mb-4 table-responsive">
<div class="card mb-4">
                                <div class="card-header">
                                    {{$data->title}}
                                </div>
                                <div class="card-body">
                                <div class="card-header">
    Category Keywords
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">{{$data->keywords}}</li>

  </ul>
  <div class="card-header">
    Category Description
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">{{$data->description}}</li>
  </ul>
  <div class="card-header">
    Category Image
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">{{$data->image}}</li>
  </ul>
  <div class="card-header">
    Category Status
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">{{$data->status}}</li>
  </ul>
  <div class="card-header">
    Category Created Date
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">{{$data->created_at}}</li>
  </ul>
  <div class="card-header">
    Category Updated Date
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">{{$data->updated_at}}</li>
  </ul>
                                </div>
                            </div>
</div>
@endsection

