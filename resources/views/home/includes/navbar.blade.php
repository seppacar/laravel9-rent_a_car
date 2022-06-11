<!-- START nav -->
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="/">Rent<span>ACAR</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
          <li class="nav-item"><a href="pricing.html" class="nav-link">Pricing</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown">Cars</a>
             <ul class="dropdown-menu">
              @php
                  $mainCategories = \App\Http\Controllers\HomeController::mainCategoryList();
              @endphp
              @foreach ($mainCategories as $category)
                <li><a class="dropdown-item" href="{{route('car_multiple', ['category_id'=>$category->id])}}">{{$category->title}}</a></li>
              @endforeach
             </ul>
         </li>
          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="{{route('about')}}" class="nav-link">About Us</a></li>
          <li class="nav-item"><a href="{{route('references')}}" class="nav-link">References</a></li>
          <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
<!-- END nav -->