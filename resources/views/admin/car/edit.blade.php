@extends('layouts.adminbase')

@section('title', 'Category List')

@section('content')
<!--TODO: Add Image of the category if present -->
<div class="card">
    <div class="card-header">
        Edit Category: {{$data->title}}
    </div>
    <div class="card-body">
    <form role="form" action="{{route('admin.car.update', ['id'=>$data->id])}}"  method="post" enctype='multipart/form-data'> 
        @csrf
        <div class="container">
            <div class="row">
              <div class="col-sm">
                <div class="mb-3">
                    <label for="category_id" class="form-label">Category</label>
                    <select name="category_id" class="form-control">
                        @foreach ($cat_data as $rs)
                            <option value="{{$rs->id}}" @if ($rs->id == $data->category_id)selected="selceted"@endif> {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title)}}</option>
                        @endforeach
                    </select>
                </div>
        
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" id="title" value={{$data->title}} required>
                </div>
                <div class="mb-3">
                    <label for="brand" class="form-label">Brand</label>
                    <input type="text" class="form-control" name="brand" id="brand" value="{{$data->brand}}">
                </div>
                <div class="mb-3">
                    <label for="model" class="form-label">Car Model</label>
                    <input type="text" class="form-control" name="model" id="model" value="{{$data->model}}">
                </div>
                <div class="mb-3">
                    <label for="make" class="form-label">Car Make</label>
                    <input type="number" class="form-control" name="make" id="make" value="{{$data->make}}">
                </div>

                <div class="mb-3">
                    <label for="detail" class="form-label">Detail</label>
                    <input type="text" class="form-control" name="detail" id="detail" value="{{$data->detail}}">
                </div>

              </div>
              <div class="col-sm">
                <div class="mb-3">
                    <label for="kewyords" class="form-label">Keywords</label>
                    <input type="text" class="form-control" name="keywords" id="keywords" value="{{$data->keywords}}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control" name="description" id="description" value="{{$data->description}}">
                </div>
 
                <div class="mb-3">
                    <label for="price" class="form-label">Daily Price (24hrs)</label>
                    <input type="number" class="form-control" name="price" id="price" value="{{$data->price}}">
                </div>

                <div class="mb-3">
                    <label for="seats" class="form-label">Seat Count</label>
                    <input type="number" class="form-control" name="seats" id="seats" value="{{$data->seats}}">
                </div>
                <div class="mb-3">
                    <label for="doors" class="form-label">Door Count</label>
                    <input type="number" class="form-control" name="doors" id="doors" value="{{$data->doors}}">
                </div>
                <div class="mb-3">
                    <label for="boot_capacity" class="form-label">Boot Capacity</label>
                    <input type="number" class="form-control" name="boot_capacity" id="boot_capacity" value="{{$data->boot_capacity}}">
                </div>
              </div>
              <div class="col-sm">
                <div class="mb-3">
                    <label for="fuel_type" class="form-label">Fuel Type</label>
                    <select name="fuel_type" class="form-control">
                        <option @if ($data->fuel_type == "Gasoline") selected @endif value="Gasoline"> Gasoline</option>
                        <option @if ($data->fuel_type == "Diesel") selected @endif value="Diesel"> Diesel</option>
                        <option @if ($data->fuel_type == "Electric") selected @endif value="Electric"> Electric</option>
                        <option @if ($data->fuel_type == "Hybrid") selected @endif value="Hybrid"> Hybrid</option>
                        <option @if ($data->fuel_type == "LPG") selected @endif value="LPG"> LPG</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="transmission_type" class="form-label">Transmission Type</label>
                    <select name="transmission_type" class="form-control">
                        <option @if ($data->transmission_type == "Manuel") selected @endif value="Manuel"> Manuel</option>
                        <option  @if ($data->transmission_type == "Automatic") selected @endif value="Automatic"> Automatic</option>
                        <option @if ($data->transmission_type == "CVT") selected @endif value="CVT"> CVT</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="horsepower" class="form-label">Horsepower</label>
                    <input type="number" class="form-control" name="horsepower" id="horsepower" value="{{$data->horsepower}}">
                </div>
                <div class="mb-3">
                    <label for="engine_capacity" class="form-label">Engine Capacity</label>
                    <input type="number" class="form-control" name="engine_capacity" id="engine_capacity" value="{{$data->engine_capacity}}">
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-control" name="status" id="status">
                        <option @if ($data->status == "True") selected @endif>True</option>
                        <option @if ($data->status == "False") selected @endif >False</option>>
                    </select>
                </div>
                <label class="form-label">Car Image</label>
                <div class="custom-file mb-3">
                    <label class="form-label">Car Image</label>
                    <input type="file" class="custom-file-input" name="image" id="image">
                    <label class="custom-file-label" for="image">Choose Car Image</label>
                </div> 
              </div>
            </div>
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


