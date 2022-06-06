<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Category;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Car::all();
        return view('admin.car.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category = Category::all();
        $data = Car::all();
        return view('admin.car.create', ['data' => $data, 'cat_data' => $category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Get data from POST request and store to database
        $data = new Car();
        $data->category_id = $request->category_id;
        $data->user_id = 0;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->detail = $request->detail;
        $data->price = $request->price;
        $data->transmission_type = $request->transmission_type;##
        $data->brand = $request->brand;
        $data->model = $request->model;
        $data->make = $request->make;
        $data->seats = $request->seats;
        $data->doors = $request->doors;
        $data->horsepower = $request->horsepower;
        $data->engine_capacity = $request->engine_capacity;
        $data->fuel_type = $request->fuel_type;
        $data->boot_capacity = $request->boot_capacity;
        if ($request->file('image')) {
            $data->image = $request->file('image')->store('images');
        };
        $data->status = $request->status;
        $data->save();
        return redirect('admin/car');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car, $id)
    {
        $data = Car::find($id);
        $category_name = Category::find($data->category_id)->title;
        $data->keywords = explode(',', $data->keywords);
        return view('admin.car.show', ['data' => $data, 'category_name' => $category_name]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car, $id)
    {
        //
        $category = Category::all();
        $data = Car::find($id);
        return view('admin.car.edit', ['data' => $data, 'cat_data' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car, $id)
    {
        //
        //Find the data in car table and update
        $data = Car::find($id);
        $data->category_id = $request->category_id;
        $data->user_id = 0;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->detail = $request->detail;
        $data->price = $request->price;
        $data->transmission_type = $request->transmission_type;##
        $data->brand = $request->brand;
        $data->model = $request->model;
        $data->make = $request->make;
        $data->seats = $request->seats;
        $data->doors = $request->doors;
        $data->horsepower = $request->horsepower;
        $data->engine_capacity = $request->engine_capacity;
        $data->fuel_type = $request->fuel_type;
        $data->boot_capacity = $request->boot_capacity;
        if ($request->file('image')) {
            $data->image = $request->file('image')->store('images');
        };
        $data->status = $request->status;
        $data->save();
        return redirect('admin/car');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car, $id)
    {
        //
        $data = Car::find($id);
        $data->delete();
        return redirect('admin/car');
    }
}
