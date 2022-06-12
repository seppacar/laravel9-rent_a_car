@extends('layouts.frontbase')

@section('title', 'Profile')

@section('content')

   
   <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
        <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Reservation<i class="ion-ios-arrow-forward"></i></span></p>
          <h1 class="mb-3 bread">Make a reservation</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section contact-section">
    <div class="container">
      <div class="row d-flex mb-5 contact-info">
          <div class="col-md-3">
            <h3 class="text-xl font-medium">{{$car->title}}</h3>
            <div class="car-wrap rounded ftco-animate fadeInUp ftco-animated">
                <div class="img rounded d-flex align-items-end" style="background-image: url({{Storage::url($car->image)}});">
                </div>
                <div class="text">
                    <h2 class="mb-0"><a href="#">{{$car->brand}}</a></h2>
                    <div class="d-flex mb-3">
                        <span class="cat">{{$car->title}}</span>
                    </div>
                    <p class="ml-auto">{{$car->price}} TL/day</p>

                </div>
            </div>
        </div>
        <div class="col-md-9 block-9 mb-md-5">
          @include('message')
          <h3 class="text-xl font-medium">Reservation Information</h3>
          <form action="{{route('reservation.make')}}" method="post" class="request-form ftco-animate bg-primary fadeInUp ftco-animated">
           @csrf
            <h2>Make your trip</h2>
                  <input name="car_id" value={{$car->id}} hidden>
                  <div class="form-group">
                      <label for="" class="label">Pick-up location</label>
                      <input type="text" name="pick_loc" class="form-control" placeholder="City, Airport, Station, etc">
                  </div>
                  <div class="form-group">
                      <label for="" class="label">Drop-off location</label>
                      <input type="text" name="drop_loc" class="form-control" placeholder="City, Airport, Station, etc">
                  </div>
                  <div class="d-flex">
                      <div class="form-group mr-2">
              <label for="" class="label">Pick-up date</label>
              <input type="text" name="pick_date" class="form-control" id="book_pick_date" placeholder="Date">
            </div>
            <div class="form-group ml-2">
              <label for="" class="label">Drop-off date</label>
              <input type="text" name="drop_date" class="form-control" id="book_off_date" placeholder="Date">
            </div>
        </div>
        <div class="d-flex">
            <div class="form-group mr-2">
    <label for="" class="label">Pick-up Time</label>
    <input type="text" name="pick_time" class="form-control" id="time_pick" placeholder="Date">
  </div>
  <div class="form-group ml-2">
    <label for="" class="label">Drop-off Time</label>
    <input type="text" name="drop_time" class="form-control" id="time_drop" placeholder="Date">
  </div>
</div>
<div class="form-group">
  <label for="" class="label">Leave a note</label>
  <input type="text" name="note" class="form-control" placeholder="">
</div>
          <div class="form-group">
            <input type="submit" value="Rent A Car Now" class="btn btn-secondary py-3 px-4">
          </div>
          <div class="form-group">
            <label for="" class="label">Total Price:</label>
            <input type="text" class="form-control" value="{{$car->price}} TL" autocomplete="off" disabled>
          </div>
              </form>
                </div>
      </div>
    </div>
  </section>
 @endsection 
