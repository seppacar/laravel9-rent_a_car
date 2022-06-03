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
                                    Parent Category
                                  </div>
                                  <ul class="list-group list-group-flush">
                                        <li class="list-group-item">{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($data, $data->title)}}</li>

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

