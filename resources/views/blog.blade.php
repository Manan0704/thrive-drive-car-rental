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
	          <li class="nav-item "><a href="/" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
                <li class="nav-item"><a href="/services" class="nav-link">Services</a></li>
                <li class="nav-item active"><a href="/blog" class="nav-link">Blog</a></li>
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
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Our Blog</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-12 text-center d-flex ftco-animate">
          	<div class="blog-entry justify-content-end mb-md-5">
              <a href="blog-single.html" class="block-20 img" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text px-md-5 pt-4">
              	<div class="meta mb-3">
                  <div><a href="#">Oct. 16, 2024</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                <p><a href="blog-single.html" class="btn btn-primary">Continue <span class="icon-long-arrow-right"></span></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-12 text-center d-flex ftco-animate">
          	<div class="blog-entry justify-content-end mb-md-5">
              <a href="blog-single.html" class="block-20 img" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text px-md-5 pt-4">
              	<div class="meta mb-3">
                  <div><a href="#">Oct. 16, 2024</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                <p><a href="blog-single.html" class="btn btn-primary">Continue <span class="icon-long-arrow-right"></span></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-12 text-center d-flex ftco-animate">
          	<div class="blog-entry">
              <a href="blog-single.html" class="block-20 img" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text px-md-5 pt-4">
              	<div class="meta mb-3">
                  <div><a href="#">Oct. 16, 2024</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                <p><a href="blog-single.html" class="btn btn-primary">Continue <span class="icon-long-arrow-right"></span></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-12 text-center d-flex ftco-animate">
          	<div class="blog-entry justify-content-end mb-md-5">
              <a href="blog-single.html" class="block-20 img" style="background-image: url('images/image_4.jpg');">
              </a>
              <div class="text px-md-5 pt-4">
              	<div class="meta mb-3">
                  <div><a href="#">Oct. 16, 2024</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                <p><a href="blog-single.html" class="btn btn-primary">Continue <span class="icon-long-arrow-right"></span></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-12 text-center d-flex ftco-animate">
          	<div class="blog-entry justify-content-end mb-md-5">
              <a href="blog-single.html" class="block-20 img" style="background-image: url('images/image_5.jpg');">
              </a>
              <div class="text px-md-5 pt-4">
              	<div class="meta mb-3">
                  <div><a href="#">Oct. 16, 2024</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                <p><a href="blog-single.html" class="btn btn-primary">Continue <span class="icon-long-arrow-right"></span></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-12 text-center d-flex ftco-animate">
          	<div class="blog-entry">
              <a href="blog-single.html" class="block-20 img" style="background-image: url('images/image_6.jpg');">
              </a>
              <div class="text px-md-5 pt-4">
              	<div class="meta mb-3">
                  <div><a href="#">Oct. 16, 2024</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                <p><a href="blog-single.html" class="btn btn-primary">Continue <span class="icon-long-arrow-right"></span></a></p>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </section>

    @include('footer')