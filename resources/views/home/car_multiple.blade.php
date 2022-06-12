@extends('layouts.frontbase')

@section('title', 'Test title')

@section('content')

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
        <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Cars <i class="ion-ios-arrow-forward"></i></span></p>
          <h1 class="mb-3 bread">Choose Your Car</h1>
        </div>
      </div>
    </div>
  </section>
      

  <section class="ftco-section bg-light">
      <div class="container">
        <div class="row">
                @foreach($car as $rs)
                <div class="col-md-4">
                    <div class="car-wrap rounded ftco-animate">
                        <div class="img rounded d-flex align-items-end" style="background-image: url({{Storage::url($rs->image)}});">
                        </div>
                        <div class="text">
                            <h2 class="mb-0"><a href="car-single.html">{{$rs->title}}</a></h2>
                            <div class="d-flex mb-3">
                                <span class="cat">{{$rs->brand}}</span>
                                <p class="price ml-auto">{{$rs->price}}TL <span>/day</span></p>
                            </div>
                            <p class="d-flex mb-0 d-block"><a href="{{route('reservation.create', ['id'=>$rs->id])}}" class="btn btn-primary py-2 mr-1">Book now</a> <a href="{{route('car_single', ['id' => $rs->id])}}" class="btn btn-secondary py-2 ml-1">Details</a></p>
                        </div>
                    </div>
                </div>
                @endforeach
          </div>
          <div class="row mt-5">
            <!-- TODO : PAGINATION STYLE FIX -->
            {{$car->links('pagination::bootstrap-4')}}
      </div>
      </div>
  </section>
@endsection