<!DOCTYPE html>
<html>

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Thrive Drive</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="/images/fevicon.png" type="image/gif" />
    <!-- font css -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Raleway:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    
         
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
            <li class="nav-item active"><a href="/explore" class="nav-link">Explore</a></li>
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
  
  
    <!-- header section end -->
    {{-- <div class="call_text_main">
        <div class="container">
            <div class="call_taital">
                <div class="call_text"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><span
                            class="padding_left_15">Location</span></a></div>
                <div class="call_text"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span
                            class="padding_left_15">(+71) 8522369417</span></a></div>
                <div class="call_text"><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><span
                            class="padding_left_15">demo@gmail.com</span></a></div>
            </div>
        </div>
    </div>
    <!-- banner section start -->
    <div class="banner_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div id="banner_slider" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="banner_taital_main">
                                    <h1 class="banner_taital">Car Rent <br><span style="color: #fe5b29;">For
                                            You</span></h1>
                                    <p class="banner_text">There are many variations of passages of Lorem Ipsum
                                        available, but the majority</p>
                                    <div class="btn_main">
                                        <div class="contact_bt"><a href="#">Read More</a></div>
                                        <div class="contact_bt active"><a href="#">Contact Us</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="banner_taital_main">
                                    <h1 class="banner_taital">Car Rent <br><span style="color: #fe5b29;">For
                                            You</span></h1>
                                    <p class="banner_text">There are many variations of passages of Lorem Ipsum
                                        available, but the majority</p>
                                    <div class="btn_main">
                                        <div class="contact_bt"><a href="#">Read More</a></div>
                                        <div class="contact_bt active"><a href="#">Contact Us</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="banner_taital_main">
                                    <h1 class="banner_taital">Car Rent <br><span style="color: #fe5b29;">For
                                            You</span></h1>
                                    <p class="banner_text">There are many variations of passages of Lorem Ipsum
                                        available, but the majority</p>
                                    <div class="btn_main">
                                        <div class="contact_bt"><a href="#">Read More</a></div>
                                        <div class="contact_bt active"><a href="#">Contact Us</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="/#banner_slider" role="button" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="carousel-control-next" href="/#banner_slider" role="button" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="banner_img"><img src="images/home-bg.png"></div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- banner section end -->
    {{-- <section class="car">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner p-4">
                <div class="carousel-item active">
                    <img src="/images/rentcar-bg.jpg" class="d-block w-100" style="height: 450px; object-fit: cover;" alt="Description of first image">
                </div>
                <div class="carousel-item">
                    <img src="/images/rentcar_bg2.png" class="d-block w-100" style="height: 450px; object-fit: cover;" alt="Description of second image">
                </div>
                <div class="carousel-item">
                    <img src="/images/rentcar-bg3.jpg" class="d-block w-100" style="height: 450px; object-fit: cover;" alt="Description of third image">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section> --}}

{{-- <section class="carousal m-3">
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="/images/rentcar_bg2.png" style="height: 400px;" class="d-block w-100">
            </div>
          <div class="carousel-item">
            <img src="/images/rentcar-bg3.jpg" style="height: 400px;" class="d-block w-100">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    
</section>
  --}}