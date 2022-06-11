<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Category;
use App\Models\Image;
use App\Models\Setting;



use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {   
        $car = Car::limit(6)->get();
        return view('home.index', ['car' => $car]);
    }

    //Return Main Category List
    public static function mainCategoryList(){
        return Category::where('parent_id', '=', '0')->with('children')->get();
    }

    //Return indivudial vehicle object with detailed images
    public function car($id)
    {
        $car = Car::find($id);
        $image = Image::where('car_id', $id)->get();
        return view('home.car_single', ['car' => $car, 'image' => $image]);
    }
    
    //Return vehicles related to a category
    public function getCars($category_id)
    {
        $car = Car::where('category_id', $category_id)->paginate(9);
        return view('home.car_multiple', ['car' => $car]);
    }

    // About us page
    public function about(){
        $about = Setting::first()->aboutus;
        return view('home.about', ['about'=>$about]);
    }
    //Contact page
    public function contact(){
        $setting = Setting::first();
        return view('home.contact', ['setting'=>$setting]);
    }
    //References page
    public function references(){
        $setting = Setting::first();
        return view('home.references', ['setting'=>$setting]);
    }
}
