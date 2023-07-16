<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ asset('/landingpage/assets/favicon.ico') }}" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('/landingpage/css/styles.css') }}" rel="stylesheet" />
</head>

<body>
    <div class="login-register">
        @if (Route::has('login'))
            <div class="px-5 py-3">
                @auth
                    <a href="{{ route('/home') }}" class="btn mx-2 btn-primary shadow-lg">Home</a>
                @else
                    <a href="{{ route('login') }}" class="btn mx-2 btn-success shadow-lg">Log
                        in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn mx-2 btn-warning text-white shadow-lg">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
    <!-- Background Video-->
    <video class="bg-video" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="{{ asset('landingpage/assets/mp4/bg-beras.mp4') }}" type="video/mp4" />
    </video>
    <!-- Masthead-->
    <div class="masthead">
        <div class="masthead-content text-dark">
            <div class="container-fluid px-4 px-lg-0">
                <h1 class="fst-italic lh-1 mb-4">Our Good Rice is Coming Soon</h1>
                <p class="mb-5">We work hard to provide the best rice from around the world.
                    Sign up now to receive updates and be notified when we launch!</p>
            
            </div>
        </div>
    </div>
    <!-- Social Icons-->
    <!-- For more icon options, visit https://fontawesome.com/icons?d=gallery&p=2&s=brands-->
    <div class="social-icons">
        <div class="d-flex flex-row flex-lg-column justify-content-center align-items-center mt-3 mt-lg-0">
            <a class="btn btn-light  m-3" href="https://twitter.com/DeanPramona"><i class="fab fa-twitter"></i></a>
            <a class="btn btn-light m-3" href="https://github.com/deanpramona"><i class="fab fa-github"></i></a>
            <a class="btn btn-light m-3" href="https://www.instagram.com/deanpramona/"><i class="fab fa-instagram"></i></a>
        </div>
    </div>


    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('/landingpage/js/scripts.js') }}"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>

</html>
