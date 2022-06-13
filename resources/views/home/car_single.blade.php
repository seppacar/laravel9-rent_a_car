@extends('layouts.frontbase')

@section('title', $car->title)
@section('keywords',$car->keywords)

@section('content')


<!-- star rating css -->
<style>
.rating {
  display: flex;
  flex-direction: row-reverse;
  justify-content: center;
}

.rating > input{ display:none;}

.rating > label {
  position: relative;
    width: 1em;
    font-size: 3vw;
    color: #1089ff;
    cursor: pointer;
}
.rating > label::before{ 
  content: "\2605";
  position: absolute;
  opacity: 0;
}
.rating > label:hover:before,
.rating > label:hover ~ label:before {
  opacity: 1 !important;
}
.rating > input:checked ~ label:before{
  opacity:1;
}
.rating:hover > input:checked ~ label:before{ opacity: 0.4; }

</style>
<!-- star rating css -->

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
        <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Car details <i class="ion-ios-arrow-forward"></i></span></p>
          <h1 class="mb-3 bread">Car Details</h1>
        </div>
      </div>
    </div>
  </section>
    @include('message')
      <section class="ftco-section ftco-car-details">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="car-details">
                    <div class="img rounded" style="background-image: url({{Storage::url($car->image)}});"></div>
                    <div class="text text-center">
                        <span class="subheading">{{$car->brand}}</span>
                        <h2>{{$car->title}}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services">
            <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-dashboard"></span></div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">
                          Mileage
                          <span>40,000</span>
                      </h3>
                  </div>
              </div>
            </div>
          </div>      
        </div>
        <div class="col-md d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services">
            <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-pistons"></span></div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">
                          Transmission
                          <span>{{$car->transmission_type}}</span>
                      </h3>
                  </div>
              </div>
            </div>
          </div>      
        </div>
        <div class="col-md d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services">
            <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car-seat"></span></div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">
                          Seats
                          <span>{{$car->seats}} Adults</span>
                      </h3>
                  </div>
              </div>
            </div>
          </div>      
        </div>
        <div class="col-md d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services">
            <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-backpack"></span></div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">
                          Boot Capacity
                          <span>{{$car->boot_capacity}} liters</span>
                      </h3>
                  </div>
              </div>
            </div>
          </div>      
        </div>
        <div class="col-md d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services">
            <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-diesel"></span></div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">
                          Fuel
                          <span>{{$car->fuel_type}}</span>
                      </h3>
                  </div>
              </div>
            </div>
          </div>      
        </div>
        </div>
      </section>
      <!-- image gallery -->
        <div class="carousel-car owl-carousel">
          @foreach($image as $img)
          <div class="item">
            <div class="car-wrap rounded ftco-animate">
                <div class="img rounded d-flex align-items-end" style="background-image: url({{Storage::url($img->image)}});">
                </div>
            </div>
          </div>
          @endforeach
        </div>
        <section class="ftco-section ftco-car-details">
        <div class="row">
            <div class="col-md-12 pills">
                      <div class="bd-example bd-example-tabs">
                          <div class="d-flex justify-content-center">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                              <li class="nav-item">
                                <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Features</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">Description</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="pills-review-tab" data-toggle="pill" href="#pills-review" role="tab" aria-controls="pills-review" aria-expanded="true">Review</a>
                              </li>
                            </ul>
                          </div>

                        <div class="tab-content" id="pills-tabContent">
                          <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
                              <div class="row">
                                  <div class="col-md-4">
                                      <ul class="features">
                                          <li class="check"><span class="ion-ios-checkmark"></span>Airconditions</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Child Seat</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>GPS</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Luggage</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Music</li>
                                      </ul>
                                  </div>
                                  <div class="col-md-4">
                                      <ul class="features">
                                          <li class="check"><span class="ion-ios-checkmark"></span>Seat Belt</li>
                                          <li class="remove"><span class="ion-ios-close"></span>Sleeping Bed</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Water</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Bluetooth</li>
                                          <li class="remove"><span class="ion-ios-close"></span>Onboard computer</li>
                                      </ul>
                                  </div>
                                  <div class="col-md-4">
                                      <ul class="features">
                                          <li class="check"><span class="ion-ios-checkmark"></span>Audio input</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Long Term Trips</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Car Kit</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Remote central locking</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Climate control</li>
                                      </ul>
                                  </div>
                              </div>
                          </div>

                          <div class="tab-pane fade" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
                            <p>{!!$car->detail!!}</p>
                          </div>

                          <div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
                            <div class="row">
                                     <div class="col-md-7">
                                         <h3 class="head">{{count($reviews)}} Reviews</h3>
                                         @foreach($reviews as $review)
                                         <div class="review d-flex">
                                            <div class="user-img" style="background-image: url(/images/person_3.jpg)"></div>
                                            <div class="desc">
                                                <h4>
                                                    <span class="text-left">{{$review->user->name}}</span>
                                                    <span class="text-right">{{$review->created_at}}</span>
                                                </h4>
                                                <p class="star">
                                                    <span>
                                                        @for($i = 0; $i < $review->rate; $i++)
                                                            <i class="ion-ios-star"></i>
                                                        @endfor
                                                    </span>
                                                    <span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                                                </p>
                                                <h5 style:>{{$review->subject}}</h5>
                                                <p>{{$review->review}}</p>
                                            </div>
                                        </div>
                                         @endforeach
                                     </div>
                                     <div class="col-md-5">
                                         <div class="rating-wrap">
                                             <h3 class="head">Give a Review</h3>
                                             <div class="col-md-8 block-9 mb-md-5">                                      
                                                <form role="form" action="{{route('storecomment')}}" method="post"> 
                                                  @csrf
                                                  <input type="hidden" name="car_id" value={{$car->id}}>
                                                  <div class="form-group">
                                                    <input type="text" class="form-control" name="subject" placeholder="Subject">
                                                  </div>
                                                  <div class="form-group">
                                                    <textarea id="" cols="30" rows="7" class="form-control" name="review" placeholder="Review"></textarea>
                                                  </div>
                                                  <div class="form-group">
                                                    <div class="rating">
                                                        <input type="radio" name="rate" value="5" id="5"><label for="5">☆</label>
                                                        <input type="radio" name="rate" value="4" id="4"><label for="4">☆</label>
                                                        <input type="radio" name="rate" value="3" id="3"><label for="3">☆</label>
                                                        <input type="radio" name="rate" value="2" id="2"><label for="2">☆</label>
                                                        <input type="radio" name="rate" value="1" id="1"><label for="1">☆</label>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                    @auth
                                                    <input type="submit" value="Send Review" class="btn btn-primary py-3 px-5">
                                                    @else
                                                    <a href="/login">
                                                    <input type="button" value="To submit a review please login" class="btn btn-primary py-3 px-5">
                                                    </a>
                                                    @endauth
                                                    </div>
                                                </form>
                                              
                                              </div>                                             <div class="wrap">
                                                 <p class="star">
                                                     <span>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         (98%)
                                                     </span>
                                                     <span>20 Reviews</span>
                                                 </p>
                                                 <p class="star">
                                                     <span>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         (85%)
                                                     </span>
                                                     <span>10 Reviews</span>
                                                 </p>
                                                 <p class="star">
                                                     <span>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         (70%)
                                                     </span>
                                                     <span>5 Reviews</span>
                                                 </p>
                                                 <p class="star">
                                                     <span>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         (10%)
                                                     </span>
                                                     <span>0 Reviews</span>
                                                 </p>
                                                 <p class="star">
                                                     <span>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         (0%)
                                                     </span>
                                                     <span>0 Reviews</span>
                                                 </p>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                          </div>
                        </div>
                      </div>
            </div>
              </div>
    </div>
  </section>
  <section class="ftco-section ftco-no-pt">
      <div class="container">
          <div class="row justify-content-center">
        <div class="col-md-12 heading-section text-center ftco-animate mb-5">
            <span class="subheading">Choose Car</span>
          <h2 class="mb-2">Related Cars</h2>
        </div>
      </div>
      <div class="row">
          <div class="col-md-4">
                  <div class="car-wrap rounded ftco-animate">
                      <div class="img rounded d-flex align-items-end" style="background-image: url(/images/car-1.jpg);">
                      </div>
                      <div class="text">
                          <h2 class="mb-0"><a href="car-single.html">Mercedes Grand Sedan</a></h2>
                          <div class="d-flex mb-3">
                              <span class="cat">Cheverolet</span>
                              <p class="price ml-auto">$500 <span>/day</span></p>
                          </div>
                          <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="car-wrap rounded ftco-animate">
                      <div class="img rounded d-flex align-items-end" style="background-image: url(/images/car-2.jpg);">
                      </div>
                      <div class="text">
                          <h2 class="mb-0"><a href="car-single.html">Range Rover</a></h2>
                          <div class="d-flex mb-3">
                              <span class="cat">Subaru</span>
                              <p class="price ml-auto">$500 <span>/day</span></p>
                          </div>
                          <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="car-wrap rounded ftco-animate">
                      <div class="img rounded d-flex align-items-end" style="background-image: url(/images/car-3.jpg);">
                      </div>
                      <div class="text">
                          <h2 class="mb-0"><a href="car-single.html">Mercedes Grand Sedan</a></h2>
                          <div class="d-flex mb-3">
                              <span class="cat">Cheverolet</span>
                              <p class="price ml-auto">$500 <span>/day</span></p>
                          </div>
                          <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
                      </div>
                  </div>
              </div>
      </div>
      </div>
  </section>
  @endsection