<!-- START footer -->
<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2"><a href="#" class="logo">rent<span>ACAR</span></a></h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
              <li class="ftco-animate fadeInUp ftco-animated"><a href="@php
                echo App\Http\Controllers\HomeController::getSetting()->twitter;
            @endphp"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate fadeInUp ftco-animated"><a href="@php
                echo App\Http\Controllers\HomeController::getSetting()->facebook;
            @endphp"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate fadeInUp ftco-animated"><a href="@php
                echo App\Http\Controllers\HomeController::getSetting()->instagram;
            @endphp"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4 ml-md-5">
            <h2 class="ftco-heading-2">Information</h2>
            <ul class="list-unstyled">
              <li><a href="{{route('about')}}" class="py-2 d-block">About</a></li>
              <li><a href="#" class="py-2 d-block">Term and Conditions</a></li>
              <li><a href="#" class="py-2 d-block">Best Price Guarantee</a></li>
              <li><a href="#" class="py-2 d-block">Privacy &amp; Cookies Policy</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
           <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Customer Support</h2>
            <ul class="list-unstyled">
              <li><a href="{{route('faq')}}" class="py-2 d-block">FAQ</a></li>
              <li><a href="#" class="py-2 d-block">Payment Option</a></li>
              <li><a href="#" class="py-2 d-block">Booking Tips</a></li>
              <li><a href="#" class="py-2 d-block">How it works</a></li>
              <li><a href="{{route('contact')}}" class="py-2 d-block">Contact Us</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">@php
                    echo App\Http\Controllers\HomeController::getSetting()->address;
                @endphp</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">@php
                    echo App\Http\Controllers\HomeController::getSetting()->phone;
                @endphp</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">@php
                    echo App\Http\Controllers\HomeController::getSetting()->email;
                @endphp</span></a></li>
                </ul>
              </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- END footer -->