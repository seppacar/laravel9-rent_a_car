@extends('layouts.adminbase')

@section('title', 'Category List')

@section('content')
<!--TODO: Add Image of the category if present -->
<div class="card">
    <div class="card-header">
        Edit Category: {{$data->title}}
    </div>
    <div class="card-body">
    <form role="form" action="{{route('admin.category.update', ['id'=>$data->id])}}"  method="post"> 
        @csrf
        <div class="mb-3">
            <label for="parent_id" class="form-label">Parent Category</label>
            <select name="parent_id" class="form-control">
                <option value="0" selected="selected">Main Category</option>
                @foreach ($data_list as $rs)
                    <option value="{{$rs->id}}" @if ($rs->id == $data->parent_id) selected="selected" @endif>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title)}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="title" value="{{$data->title}}">
        </div>
        <div class="mb-3">
            <label for="kewyords" class="form-label">Keywords</label>
            <input type="text" class="form-control" name="keywords" id="keywords" value="{{$data->keywords}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" name="description" id="description" value="{{$data->description}}">
        </div>
        <div class="custom-file mb-3">
            <input type="file" class="custom-file-input" name="image" id="image" value="{{$data->image}}">
            <label class="custom-file-label" for="image">{{$data->image}}</label>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-control" name="status" id="status">
                <option selected>{{$data->status}}</option>
                <option>True</option>
                <option>False</option>>
            </select>
        </div>
        <button type="submit" class="btn btn-light btn-icon-split">
                                        <span class="icon text-gray-600">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        <span class="text">Update</span>
                                    </a>
    </form>
    </div>
</div>
@endsection


