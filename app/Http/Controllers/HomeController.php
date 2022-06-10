<?php

namespace App\Http\Controllers;
use App\Models\Car;
use App\Models\Image;



use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $car = Car::limit(6)->get();
        return view('home.index', ['car'=>$car]);
    }

    //Return indivudial vehicle object with detailed images
    public function car($id){

        $car = Car::find($id);
        $image = Image::where('car_id', $id)->get();
        return view('home.car_single', ['car'=>$car, 'image'=>$image]);
    }

}
