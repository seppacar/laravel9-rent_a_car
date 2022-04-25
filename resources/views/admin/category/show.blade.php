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
    @foreach($data->keywords as $rs)
        <li class="list-group-item">{{$rs}}</li>
    @endforeach
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
    <li class="list-group-item">
            @if ($data->image)
            <img src="{{Storage::url($data->image)}}">
            @else
                No Image
            @endif</li>
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

