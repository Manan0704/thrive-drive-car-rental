<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Car Rental Website</title>
    <link rel="icon" type="image/png" href="../assets/images/ThriveDrive_logo.svg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Thrive<span>Drive</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="/services" class="nav-link">Services</a></li>
	          <li class="nav-item"><a href="/blog" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
	        </ul>

          <ul class="navbar-nav">
            @if (session()->has('user'))
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Hi, {{ session('user')->fname }}!
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="/profile">Profile</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="/logout">
                    <button class="btn btn-outline-danger">Logout</button>
                  </a>
                </div>
              </li>
            @else
              <li class="nav-item">
                <a class="nav-link" href="/login">
                  <button class="btn btn-outline-success">Login</button>
                </a>
              </li>
            @endif
          </ul>

	      </div>
	    </div>
	  </nav>
    
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Explore <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Choose Your Car</h1>
          </div>
        </div>
      </div>
    </section>

    <div class="container-fluid py-5">
      <div class="container pt-5 pb-3">
          <div class="row">
              {{-- @foreach ($vehicle as $item)
                <div class="col-3">
                  <div class="card">
                    <img class="card-img-top" height="300" src="{{$item->vehicle_pic}}" alt="Title" />
                    <div class="card-body">
                      <h4 class="card-title">{{$item->Category_name}}</h4>
                      <h4 class="card-title">{{$item->vehicle_name}}</h4>
                      <h3>₹{{$item->price}}/Day</h3>
                    </div>
                    <div class="card-footer">
                      <a href="/detail/{{$item->_id}}" class="btn btn-warning">More Detail</a>
                    </div>
                  </div> 
                </div>
              @endforeach --}}

              @if($vehicles->isEmpty())
                <h3>No Cars Available</h3>
              @endif

              @foreach ($vehicles as $item)
                {{-- <div class="col-3">
                    <div class="card">
                        <img class="card-img-top" height="300" src="{{$item->vehicle_pic}}" alt="Car Image" />
                        <div class="card-body">
                            <h4 class="card-title">{{$item->Category_name}}</h4>
                            <h4 class="card-title">{{$item->vehicle_name}}</h4>
                            <h3>₹{{$item->price}}/Day</h3>
                        </div>
                        <div class="card-footer">
                            <a href="/detail/{{$item->_id}}" class="btn btn-warning">More Detail</a>
                        </div>
                    </div>
                </div> --}}

                <div class="col-md-4 mb-4">
                  <div class="card shadow-lg rounded-3 border-0">
                      <img class="card-img-top img-fluid" height="300" src="{{ asset($item->vehicle_pic) }}" alt="Car Image" style="object-fit: cover; border-top-left-radius: 12px; border-top-right-radius: 12px;">
                      <div class="card-body text-center">
                          <h5 class="card-title fw-bold text-primary">{{ $item->Category_name }}</h5>
                          <h6 class="card-title text-dark">{{ $item->vehicle_name }}</h6>
                          <h4 class="text-success fw-bold">₹{{ number_format($item->price, 2) }}/Day</h4>
                      </div>
                      <div class="card-footer bg-white text-center">
                          <a href="/detail/{{ $item->_id }}" class="btn btn-warning w-75 fw-bold">More Details</a>
                      </div>
                  </div>
              </div>
              
              @endforeach
          </div>
      </div>
    </div>
   

@include('footer')