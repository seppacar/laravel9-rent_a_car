<?php

namespace App\Http\Controllers;
use App\Models\Car;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $car = Car::limit(6)->get();
        return view('home.index', ['car'=>$car]);
    }

}
