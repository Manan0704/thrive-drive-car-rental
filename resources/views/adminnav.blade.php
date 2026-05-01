<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
    <title> Car Rental Website</title>
    <!-- [Meta] -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Berry is made using Bootstrap 5 design framework. Download the free admin template & use it for your project." />
    <meta name="keywords"
        content="Berry, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Bootstrap Admin Template" />
    <meta name="author" content="CodedThemes" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/css/flat-ui.min.css" 
    integrity="sha512-6f7HT84a/AplPkpSRSKWqbseRTG4aRrhadjZezYQ0oVk/B+nm/US5KzQkyyOyh0Mn9cyDdChRdS9qaxJRHayww==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- [Favicon] icon -->
    <link rel="icon" href="../assets/images/ThriveDrive_logo.svg" type="image/x-icon" />
    <!-- [Google Font] Family -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap"
        id="main-font-link" />
    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="/assets/fonts/tabler-icons.min.css" />
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="/assets/fonts/material.css" />
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="/assets/css/style.css" id="main-style-link" />
    <link rel="stylesheet" href="/assets/css/style-preset.css" id="preset-style-link" />

</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ Header Topbar ] start -->
    <header class="pc-header">
        <div class="m-header">
            <a href="index.html" class="b-brand">
                <!-- ========   change your logo hear   ============ -->
                <img src="../assets/images/ThriveDrive_logo.svg" alt="" class="logo logo-lg" style="width: 150px; height: 100px;" />
                {{-- <img src="" alt="" class="logo logo-lg" /> --}}

            </a>
            <!-- ======= Menu collapse Icon ===== -->
            <div class="pc-h-item">
                <a href="#" class="pc-head-link head-link-secondary m-0" id="sidebar-hide">
                    <i class="ti ti-menu-2"></i>
                </a>
            </div>
        </div>
        <div class="header-wrapper"> <!-- [Mobile Media Block] start -->
            <div class="me-auto pc-mob-drp">
                <ul class="list-unstyled">
                    <li class="pc-h-item header-mobile-collapse">
                        <a href="#" class="pc-head-link head-link-secondary ms-0" id="mobile-collapse">
                            <i class="ti ti-menu-2"></i>
                        </a>
                    </li>
                    <li class="dropdown pc-h-item d-inline-flex d-md-none">
                        <a class="pc-head-link head-link-secondary dropdown-toggle arrow-none m-0"
                            data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                            aria-expanded="false">
                            <i class="ti ti-search"></i>
                        </a>
                        <div class="dropdown-menu pc-h-dropdown drp-search">
                            <form class="px-3">
                                <div class="form-group mb-0 d-flex align-items-center">
                                    <i class="ti ti-search"></i>
                                    <input type="search" class="form-control border-0 shadow-none"
                                        placeholder="Search here..." />
                                </div>
                            </form>
                        </div>
                    </li>
                    <li class="pc-h-item d-none d-md-inline-flex">
                        <form class="header-search">
                            <i class="ti ti-search icon-search"></i>
                            <input type="search" class="form-control" placeholder="Search here..." />
                            <button class="btn btn-light-secondary btn-search"><i
                                    class="ti ti-adjustments-horizontal"></i></button>
                        </form>
                    </li>
                </ul>
            </div>
            <!-- [Mobile Media Block end] -->
            
        </div>
    </header>
    <!-- [ Header ] end -->
    <!-- [ Sidebar Menu ] start -->
    <nav class="pc-sidebar">
        <div class="navbar-wrapper">
            <div class="m-header">
                <a href="index.html" class="b-brand">
                    <!-- ========   Change your logo from here   ============ -->
                    <img src="../assets/images/logo-dark.svg" alt="" class="logo logo-lg" />
                </a>
            </div>
            <div class="navbar-content">
                <ul class="pc-navbar">
                    <li class="pc-item pc-caption">
                        <label>Dashboard</label>
                        <i class="ti ti-dashboard"></i>
                    </li>
                    <li class="pc-item nlinee">
                        <a href="/admin" class="pc-link"><span class="pc-micon"><i
                                    class="fa-solid fa-gauge"></i></span><span class="pc-mtext">Dashboard</span></a>
                    </li>
                    {{-- <li class="pc-item pc-caption">
          <label>Pages</label>
          <i class="ti ti-news"></i>
        </li> --}}
                    <li class="pc-item pc-hasmenu linee">
                        <a href="/users" class="pc-link "><span class="pc-micon"><i
                                    class="fa-solid fa-user"></i></span><span class="pc-mtext ">Users</span></a>
                        {{-- <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/login-v3.html">Login</a></li>
            <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/register-v3.html">register</a></li>
          </ul> --}}
                    </li>

                    <li class="pc-item pc-caption linee">
                        <label>Details</label>
                        <i class="ti ti-apps"></i>
                    </li>
                    <li class="pc-item">
                        <a href="/category" class="pc-link"><span class="pc-micon"><i class="fa-solid fa-b"></i></span><span class="pc-mtext">Brand</span></a>
                    </li>
                    <li class="pc-item nlinee">
                        <a href="/vehicle" class="pc-link"><span class="pc-micon"><i
                            class="fa-solid fa-car"></i></span><span class="pc-mtext">Vehicle</span></a>
                    </li>
                    {{-- <li class="pc-item">
          <a href="https://tablericons.com" class="pc-link" target="_blank"><span class="pc-micon"><i
                class="ti ti-plant-2"></i></span><span class="pc-mtext">Tabler</span><span class="pc-arrow"></a>
        </li> --}}

                    {{-- <li class="pc-item pc-caption">
          <label>Other</label>
          <i class="ti ti-brand-chrome"></i>
        </li> --}}


                    {{-- <ul class="pc-submenu">
          <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/login-v3.html">Login</a></li>
          <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/register-v3.html">register</a></li>
        </ul> --}}
                    </li>

                    <li class="pc-item linee"><a href="/bookings" class="pc-link"><span
                                class="pc-micon"><i class="fa-solid fa-rectangle-list"></i></span><span
                                class="pc-mtext">Bookings</span></a></li>
                    <li class="pc-item linee"><a href="/login"
                            target="_blank" class="pc-link"><span class="pc-micon"><i class="fa-solid fa-right-from-bracket"></i></span><span class="pc-mtext">Log Out</span></a></li>
                </ul>
                {{-- <div class="pc-navbar-card bg-primary rounded">
        <h4 class="text-white">Berry Pro</h4>
        <p class="text-white opacity-75">Checkout Berry pro features</p>
        <a href="https://codedthemes.com/item/berry-bootstrap-5-admin-template/" target="_blank" class="btn btn-light text-primary">Pro</a>
      </div> --}}
            </div>
        </div>
    </nav>
    <!-- [ Sidebar Menu ] end -->



    <!-- [ Main Content ] start -->
    <div class="pc-container">
        <div class="pc-content">
