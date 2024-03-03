<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>ALVION : Welcome</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />
</head>

<body style="background-color: #D9D9D9">

    <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: #D9D9D9">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('assets/img/logo.png') }}" alt="" srcset="" class="logo"
                    height="60">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Home') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('About Us') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Contact Us') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light btn-rounded" href="{{ route('login') }}" style="background-color: #7B014C;">{{ __('Book An Appointment') }}</a>
                    </li>
                </ul>


                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                    <li class="nav-item">
                        <a class="nav-link btn" href="#" style="color: #7B014C; font-weight : bold">{{ __('Feedback') }}</a>
                    </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre
                                style="color: #7B014C; font-weight : bold">
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/img/bg1.jpg') }}" class="d-block w-100 " alt="..."
                        style="height: 550px">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 style="color: #7B014C; font-weight : bold">Get the best hairstyle</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/bg2.jpg') }}" class="d-block w-100" alt="..."
                        style="height: 550px">
                         <div class="carousel-caption d-none d-md-block">
                        <h3 style="color: #7B014C; font-weight : bold">We are the best at what we do</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/bg3.jpg') }}" class="d-block w-100" alt="..."
                        style="height: 550px">
                         <div class="carousel-caption d-none d-md-block">
                        <h3 style="color: #7B014C; font-weight : bold">Come and relax with the best hair stylist</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container mt-3 mb-3">
        <div class="row pt-3 pb-3">
            <div class="col-md-12 text-center">
                <h2>Indulge in Unforgettable Beauty Experiences at Our Exquisite Salon Oasis!</h2>
                <p class="pt-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id deserunt numquam
                    accusamus, exercitationem non ipsam, officia esse quo voluptate, est perspiciatis reiciendis facilis
                    adipisci doloribus eos excepturi. Atque, quo facilis.</p>
            </div>
        </div>
    </div>

    {{-- <div class="container mr-5 ml-5">
        <div class="row pt-2 pb-5">
            <div class="col-md-2">
                <div class="row p-2">
                    <button class="btn text-light" style="background-color: #32435F"><i class="fa fa-book"></i>
                        Appointment Scheduling</button>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-2">
                <div class="row p-2">
                    <button class="btn text-light" style="background-color: #32435F"><i class="fa fa-book"></i> Stock
                        Management</button>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-2">
                <div class="row p-2">
                    <button class="btn text-light" style="background-color: #32435F"><i
                            class="fa fa-book"></i>Customers Feedback</button>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-2">
                <div class="row p-2">
                    <button class="btn text-light" style="background-color: #32435F"><i class="fa fa-book"></i>
                        Online Payments</button>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="container">
        <style>
            .home-testimonial {
                background-color: #D9D9D9;
                height: 380px
            }

            .home-testimonial-bottom {
                background-color: #32435F;
                transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
                margin-top: 20px;
                margin-bottom: 0px;
                position: relative;
                height: 130px;
                top: 190px
            }

            .home-testimonial h3 {
                color: var(--orange);
                font-size: 14px;
                font-weight: 500;
                text-transform: uppercase
            }

            .home-testimonial h2 {
                color: white;
                font-size: 28px;
                font-weight: 700
            }

            .testimonial-inner {
                position: relative;
                top: -174px
            }

            .testimonial-pos {
                position: relative;
                top: 24px
            }

            .testimonial-inner .tour-desc {
                border-radius: 5px;
                padding: 40px
            }

            .color-grey-3 {
                font-family: "Montserrat", Sans-serif;
                font-size: 14px;
                color: #6c83a2
            }

            .testimonial-inner img.tm-people {
                width: 60px;
                height: 60px;
                -webkit-border-radius: 50%;
                border-radius: 50%;
                -o-object-fit: cover;
                object-fit: cover;
                max-width: none
            }

            .link-name {
                font-family: "Montserrat", Sans-serif;
                font-size: 14px;
                color: #6c83a2
            }

            .link-position {
                font-family: "Montserrat", Sans-serif;
                font-size: 12px;
                color: #6c83a2
            }
        </style>
        <section class="home-testimonial">
            <div class="container-fluid">
                <div class="row d-flex justify-content-center testimonial-pos">
                    <div class="col-md-12 pt-4 d-flex justify-content-center">
                        <h3 style="color: #7B014C">Testimonials</h3>
                    </div>
                    <div class="col-md-12 d-flex justify-content-center">
                        <h2 style="color: #7B014C">Explore the students experience</h2>
                    </div>
                </div>
                <section class="home-testimonial-bottom">
                    <div class="container testimonial-inner">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-4 style-3">
                                <div class="tour-item ">
                                    <div class="tour-desc bg-white">
                                        <div class="tour-text color-grey-3 text-center">&ldquo;At this School, our
                                            mission is to balance a rigorous comprehensive college preparatory
                                            curriculum with healthy social and emotional development.&rdquo;</div>
                                        <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people"
                                                src="https://images.pexels.com/photos/6625914/pexels-photo-6625914.jpeg"
                                                alt=""></div>
                                        <div class="link-name d-flex justify-content-center">Balbir Kaur</div>
                                        <div class="link-position d-flex justify-content-center">Student</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 style-3">
                                <div class="tour-item ">
                                    <div class="tour-desc bg-white">
                                        <div class="tour-text color-grey-3 text-center">&ldquo;At this School, our
                                            mission is to balance a rigorous comprehensive college preparatory
                                            curriculum with healthy social and emotional development.&rdquo;</div>
                                        <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people"
                                                src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                                alt=""></div>
                                        <div class="link-name d-flex justify-content-center">Balbir Kaur</div>
                                        <div class="link-position d-flex justify-content-center">Student</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 style-3">
                                <div class="tour-item ">
                                    <div class="tour-desc bg-white">
                                        <div class="tour-text color-grey-3 text-center">&ldquo;At this School, our
                                            mission is to balance a rigorous comprehensive college preparatory
                                            curriculum with healthy social and emotional development.&rdquo;</div>
                                        <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people"
                                                src="https://images.pexels.com/photos/4946604/pexels-photo-4946604.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                                alt=""></div>
                                        <div class="link-name d-flex justify-content-center">Balbir Kaur</div>
                                        <div class="link-position d-flex justify-content-center">Student</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>
        </section>
    </div>
    <footer class="footer mt-1">
        <div class="container" style="height: 300; background-color : #7B014C">
            <div class="row">
                <div class="col-md-12">
                    <p class="p-5 m-4 text-light">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat eum
                        minima odit asperiores, recusandae rem! Quasi deleniti laudantium error sed eos at esse,
                        nesciunt aut distinctio obcaecati perspiciatis ea alias.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>
