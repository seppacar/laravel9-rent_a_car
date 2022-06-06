@extends('layouts.adminbase')

@section('title', 'Category List')

@section('content')

<div class="card">
    <div class="card-header">
        Add New Car
    </div>
    
    <div class="card-body">
    <form role="form" action="{{route('admin.car.store')}}"  method="post" enctype='multipart/form-data'> 
        @csrf
        <div class="container">
            <div class="row">
              <div class="col-sm">
                <div class="mb-3">
                    <label for="category_id" class="form-label">Category</label>
                    <select name="category_id" class="form-control">
                        @foreach ($cat_data as $rs)
                            <option value="{{$rs->id}}"> {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title)}}</option>
                        @endforeach
                    </select>
                </div>
        
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Title" required>
                </div>
                <div class="mb-3">
                    <label for="brand" class="form-label">Brand</label>
                    <input type="text" class="form-control" name="brand" id="brand" placeholder="Brand of the car (Audi,Volkswagen, etc.)">
                </div>
                <div class="mb-3">
                    <label for="model" class="form-label">Car Model</label>
                    <input type="text" class="form-control" name="model" id="model" placeholder="Model of the car (Polo, A6)">
                </div>
                <div class="mb-3">
                    <label for="make" class="form-label">Car Make</label>
                    <input type="number" class="form-control" name="make" id="make" placeholder="Make year of the car">
                </div>

                <div class="mb-3">
                    <label for="detail" class="form-label">Detail</label>
                    <input type="text" class="form-control" name="detail" id="detail" placeholder="Details">
                </div>

              </div>
              <div class="col-sm">
                <div class="mb-3">
                    <label for="kewyords" class="form-label">Keywords</label>
                    <input type="text" class="form-control" name="keywords" id="keywords" placeholder="Keywords">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control" name="description" id="description" placeholder="Description">
                </div>
 
                <div class="mb-3">
                    <label for="price" class="form-label">Daily Price (24hrs)</label>
                    <input type="number" class="form-control" name="price" id="price" placeholder="Daily price in Turkish Liras">
                </div>

                <div class="mb-3">
                    <label for="seats" class="form-label">Seat Count</label>
                    <input type="number" class="form-control" name="seats" id="seats" placeholder="Seat count of the car">
                </div>
                <div class="mb-3">
                    <label for="doors" class="form-label">Door Count</label>
                    <input type="number" class="form-control" name="doors" id="doors" placeholder="Door count of the car">
                </div>
                <div class="mb-3">
                    <label for="boot_capacity" class="form-label">Boot Capacity</label>
                    <input type="number" class="form-control" name="boot_capacity" id="boot_capacity" placeholder="Boot cap. in liters">
                </div>
              </div>
              <div class="col-sm">
                <div class="mb-3">
                    <label for="fuel_type" class="form-label">Fuel Type</label>
                    <select name="fuel_type" class="form-control">
                        <option value="Gasoline"> Gasoline</option>
                        <option value="Diesel"> Diesel</option>
                        <option value="Electric"> Electric</option>
                        <option value="Hybrid"> Hybrid</option>
                        <option value="LPG"> LPG</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="transmission_type" class="form-label">Transmission Type</label>
                    <select name="transmission_type" class="form-control">
                        <option value="Manuel"> Manuel</option>
                        <option value="Automatic"> Automatic</option>
                        <option value="CVT"> CVT</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="horsepower" class="form-label">Horsepower</label>
                    <input type="number" class="form-control" name="horsepower" id="horsepower" placeholder="Horsepower of the engine">
                </div>
                <div class="mb-3">
                    <label for="engine_capacity" class="form-label">Engine Capacity</label>
                    <input type="number" class="form-control" name="engine_capacity" id="engine_capacity" placeholder="Capacity of engine">
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-control" name="status" id="status">
                        <option>True</option>
                        <option>False</option>>
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
                                        <span class="text">Create</span>
                                    </a>
    </form>
    </div>
</div>
@endsection


