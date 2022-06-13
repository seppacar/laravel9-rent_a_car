@extends('layouts.frontbase')

@section('title', 'Profile')

@section('content')

   
   <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
        <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Checkout <i class="ion-ios-arrow-forward"> </i></span></p>
          <h1 class="mb-3 bread">Checkout</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section contact-section">
    <div class="container">
      @include('message')
      <div class="row d-flex mb-5 contact-info">
          <div class="col-md-4">
            <h3 class="text-xl font-medium"></h3>
            <div class="car-wrap rounded ftco-animate fadeInUp ftco-animated">
                <div class="img rounded d-flex align-items-end" style="background-image: url({{Storage::url($data->car->image)}});">
                </div>
                <div class="text">
                  <p>{{$data->car->title}}</p>
                    <h2 class="mb-0"><a href="#"></a></h2>
                    <div class="d-flex mb-3">
                        <span class="cat"></span>
                    </div>
                    <p class="price ml-auto">Pick-up Date:</p> {{$data->rezdate}} {{$data->reztime}}<p>

                    <p class="price ml-auto">Drop-off Date:</p> {{$data->returndate}} : {{$data->returntime}}<p>

                    <p class="price ml-auto">Reservation Days:</p> {{$data->days}}<p>

                    <p class="price ml-auto">Daily Price:</p> {{$data->car->price}} /Day</p>

                    <p class="price ml-auto">Total Price:</p> {{$data->price}} TL<p>

                </div>
            </div>
        </div>
        <div class="col-md-7 block-9 mb-md-5">
          <h3 class="text-xl font-medium">Payment Information</h3>
          <form action="{{route('reservation.checkout.process')}}" method="post" class="request-form ftco-animate bg-primary fadeInUp ftco-animated">
           @csrf
           <input type="number" name="res_id" value="{{$data->id}}" hidden>
            <h2>Credit Card Details</h2>
                  <div class="form-group">
                      <label for="" class="label">Name on the Credit Card</label>
                      <input type="text" name="card_name" class="form-control" placeholder="John Doe">
                  </div>
                  <div class="form-group">
                      <label for="" class="label">Credit Card Number</label>
                      <input type="text" name="card_num" class="form-control" placeholder="">
                  </div>
                  <div class="d-flex">
                      <div class="form-group mr-2">
              <label for="" class="label">Exp Date</label>
              <input type="text" name="exp" class="form-control" id="exp_date" placeholder="MM/YY">
            </div>
            <div class="form-group ml-2">
              <label for="" class="label">CVV</label>
              <input type="text" name="cvv" class="form-control" pattern="[0-9]{3}" placeholder="123">    
            </div>
        </div>
          <div class="form-group">
            <input type="submit" value="Checkout" class="btn btn-secondary py-3 px-4">
          </div>
              </form>
                </div>
      </div>
    </div>
  </section>
 @endsection 
