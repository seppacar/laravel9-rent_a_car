@extends('layouts.frontbase')

@section('title', 'Reviews')

@section('content')

   
   <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
        <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span> User Profile <i class="ion-ios-arrow-forward"></i></span> <span>Reservations </span></p>
          <h1 class="mb-3 bread">My Reservations</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section contact-section">
    <div class="container">
      <div class="row d-flex mb-5 contact-info">
          <div class="col-md-3">
            <h3 class="text-xl font-medium">User Menu</h3>
            <div class="row mb-5">
                <div class="col-md-12">
                  <a href="{{route('userpanel.profile')}}">
                    <div class="border w-75 p-2 rounded mb-2 d-flex  dropdown-item">
                        <p>
                          <i class="fas icon-user fa-sm fa-fw mr-2 text-gray-400"></i>
                          Profile
                      </p>
                    </div>
                  </a>
                </div>
                <div class="col-md-12">
                  <a href="{{route('userpanel.reservations')}}">
                    <div class="border w-75 p-2 rounded mb-2 d-flex  dropdown-item">
                        <p>
                          <i class="fas icon-user fa-sm fa-fw mr-2 text-gray-400"></i>
                          Rent History
                      </p>
                    </div>
                  </a>
                </div>
                <div class="col-md-12">
                  <a href="{{route('userpanel.reviews')}}">
                    <div class="border w-75 p-2 rounded mb-2 d-flex  dropdown-item">
                        <p>
                          <i class="fas icon-user fa-sm fa-fw mr-2 text-gray-400"></i>
                          My Reviews
                      </p>
                    </div>
                  </a>
                </div>
                <div class="col-md-12">
                  <a href="{{route('userlogout')}}">
                    <div class="border w-75 p-2 rounded mb-2 d-flex  dropdown-item">
                        <p>
                          <i class="fas icon-user fa-sm fa-fw mr-2 text-gray-400"></i>
                          Logout
                      </p>
                    </div>
                  </a>
                </div>
              </div>
        </div>
        <div class="col-md-9 block-9 mb-md-5 text-center">
          @include('message')
          <h3 class="text-xl font-medium">My Reservations</h3>
            <table class="table table-sm table-bordered table-striped">
            <thead>
                <tr>
                <th scope="col">Vehicle</th>
                <th scope="col">Pick Up Date</th>
                <th scope="col">Drop Off Date</th>
                <th scope="col">Days</th>
                <th scope="col">Price</th>
                <th scope="col">Note</th>
                <th scope="col">Reservation Date</th>
                <th scope="col">Status</th>
                <th scope="col">Cancel Order</th>
                </tr>
            </thead>
            <tbody>
            @foreach($data as $rs)
                <tr>
                <td><a href="{{route('car_single', ['id'=>$rs->car->id])}}">{{$rs->car->title}}</a></td>
                <td>{{$rs->rezdate}}, {{$rs->reztime}}</td>
                <td>{{$rs->returndate}}, {{$rs->returntime}}</td>
                <td>{{$rs->days}}</td>
                <td>{{$rs->price}} TL</td>
                <td>{{$rs->note}}</td>
                <td>{{$rs->created_at}}</td>
                <td>@if($rs->status == 'Waiting Payment') <a href="{{route('reservation.checkout', ['res_id'=>$rs->id])}}"> <button type="button" class="btn btn-success">Checkout</button> </a>
                  @endif @if($rs->status == 'Payment Failed') <a href="{{route('reservation.checkout', ['res_id'=>$rs->id])}}"> <button type="button" class="btn btn-success">Checkout</button> </a>
                  @endif  {{$rs->status}}</td>
                <td><a href="{{route('userpanel.reservation.destroy', ['id'=>$rs->id])}}" class="btn btn-danger"><i class="icon-trash"></i></a></td>
                </tr>
            @endforeach
            </tbody>
            </table>
        </div>
      </div>
    </div>
  </section>
 @endsection 