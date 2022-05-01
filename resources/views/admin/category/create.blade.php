@extends('layouts.adminbase')

@section('title', 'Category List')

@section('content')
<div class="card">
    <div class="card-header">
        Add Category
    </div>
    <div class="card-body">
    <form role="form" action="{{route('admin.category.store')}}"  method="post" enctype='multipart/form-data'> 
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Title" required>
        </div>
        <div class="mb-3">
            <label for="kewyords" class="form-label">Keywords</label>
            <input type="text" class="form-control" name="keywords" id="keywords" placeholder="Keywords">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" name="description" id="description" placeholder="Description">
        </div>
        <div class="custom-file mb-3">
            <input type="file" class="custom-file-input" name="image" id="image">
            <label class="custom-file-label" for="image">Choose Category Image</label>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-control" name="status" id="status">
                <option>True</option>
                <option>False</option>>
            </select>
        </div>
        <button type="submit" class="btn btn-light btn-icon-split">
                                        <span class="icon text-gray-600">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        <span class="text">Create</span>
                                    </a>
    </form>
    </div>
</div>
@endsection


