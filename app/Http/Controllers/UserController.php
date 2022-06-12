<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Reservation;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('home.user.profile');
    }

    // Display reviews of a user
    public function reviews(){
        $data = Comment::where('user_id', '=', auth()->id())->get();
        return view('home.user.reviews', ['data'=>$data]);
    }
    // Display resrevations of a user
    public function reservations(){
        $data = Reservation::where('user_id', '=', auth()->id())->get();
        return view('home.user.reservations', ['data'=>$data]);
    }
    public function destroyReview($id){
        $data = Comment::where('user_id', '=', auth()->id())->find($id);
        $data->delete();
        return redirect(route('userpanel.reviews'))->with('info', 'Your review has been deleted.');
    }
    public function destroyReservation($id){
        $data = Reservation::where('user_id', '=', auth()->id())->find($id);
        $data->delete();
        return redirect(route('userpanel.reservations'))->with('info', 'Your reservation order has been deleted.');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
