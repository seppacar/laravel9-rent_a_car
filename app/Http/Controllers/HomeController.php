<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Category;
use App\Models\Image;
use App\Models\Setting;
use App\Models\Message;
use App\Models\Faq;
use App\Models\Comment;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {   
        $car = Car::limit(6)->get();
        return view('home.index', ['car' => $car]);
    }
    // Return setting data staticly
    public static function getSetting(){
        $setting = Setting::first();
        return $setting;
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
        $reviews = Comment::where('car_id', $id)->where('status', 'True')->get();
        return view('home.car_single', ['car' => $car, 'image' => $image, 'reviews'=>$reviews]);
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
    //store message
    public function storemessage(Request $request){
        $data = new Message;
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->ip = request()->ip();
        $data->save();
        return redirect()->route('contact')->with('info', 'Your message has been sent, Thank You.');
    }
    //References page
    public function references(){
        $setting = Setting::first();
        return view('home.references', ['setting'=>$setting]);
    }
    //FAQ page
    public function faq(){
        $data = Faq::all();
        return view('home.faq', ['data'=>$data]);
    }
    //store comment
    public function storecomment(Request $request){
        $data = new Comment;
        $data->user_id = auth()->id();
        $data->car_id = $request->input('car_id');
        $data->subject = $request->input('subject');
        $data->review = $request->input('review');
        $data->rate = $request->input('rate');
        $data->ip = request()->ip();
        $data->save();
        return redirect()->route('car_single', ['id'=>$request->car_id])->with('info', 'Your comment has been sent, Thank You.');
    }

    //Logout controller
    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }


    //Manual authentication
    public function adminauth(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
    
        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();
    
            return redirect()->intended('admin');
        }
        return back()->with([
            'error' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
