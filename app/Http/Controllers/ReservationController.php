<?php

namespace App\Http\Controllers;
use App\Models\Reservation;
use App\Models\Car;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{

    public function reservations()
    {
        $data = Reservation::where('user_id', '=', auth()->id())->get();
        return view('home.user.reservation', ['data'=>$data]);
    }

    public function create($id){
        $car = Car::find($id);
        return view('home.user.reservation', ['car'=>$car]);
    }

    public function makeReservation(Request $request){
        $pick_datetime = Carbon::createFromFormat('d/m/Y g:ia', $request->pick_date.$request->pick_time);
        $drop_datetime = Carbon::createFromFormat('d/m/Y g:ia', $request->drop_date.$request->drop_time);
        $data = new Reservation();
        $data->user_id = Auth::user()->id;
        $data->car_id = $request->car_id;
        $data->rezdate = $pick_datetime->format("Y/m/d");
        $data->reztime = $pick_datetime->format("h:i");
        $data->returndate = $drop_datetime->format("Y/m/d");
        $data->returntime = $drop_datetime->format("h:i");
        $data->days = $pick_datetime->diffInDays($drop_datetime);
        $data->price = $data->days * $data->car->price;
        $data->amount = 1;
        $data->ip = $_SERVER['REMOTE_ADDR'];
        $data->note = $request->note;
        $data->save();
        return redirect(route('reservation.checkout', ['res_id'=>$data->id]));
    }

    public function checkout($res_id){
        $data = Reservation::find($res_id);
        return view('home.user.checkout', ['data'=>$data]);
    }

    public function processCheckout(Request $request){
        //Assuming card check from payment processor is valid
        $cardcheck = 'True';
        
        $data = Reservation::find($request->res_id);
        if ($cardcheck == 'True'){
            $data->status = 'Payment Succesful';
            $data->save();
            return redirect()->route('userpanel.reservations')->with('success', 'Checkout Complete! Your Reservation Order Has Been Placed');
        }
        else{
            $data->status = 'Payment Failed';
            $data->save();
            return redirect()->back()->with('warning', 'Checkout not complete, please check your credit card details!');
        }
        
    }
}
