<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <title>GOOD-RICE</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/font-awesome.css') }}">

    <link rel="stylesheet" href="{{ asset('user/css/templatemo-hexashop.css') }}">

    <link rel="stylesheet" href="{{ asset('user/css/owl-carousel.css') }}">

    <link rel="stylesheet" href="{{ asset('user/css/lightbox.css') }}">

    <link rel="stylesheet" href="{{ asset('user/css/flex-slider.css') }}">

</head>

<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <img src="{{ asset('user/images/Beras Logo.png') }}" style="width:100px ; height:100px">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                        <li class="scroll-to-section"><a href="#men">Produk</a></li>
                        {{-- <li class="submenu"> --}}
                        <li class="scroll-to-section"><a href="#explore">Explore</a></li>
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">Logout</a>
                            {{-- <a class="dropdown-item" href="">
                             {{ __('Logout') }} --}}


                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>

                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
