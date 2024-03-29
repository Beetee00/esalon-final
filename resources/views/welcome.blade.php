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
                        <a class="nav-link" href="/">{{ __('Home') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">{{ __('About Us') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">{{ __('Contact Us') }}</a>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn text-light" data-toggle="modal" data-target="#exampleModal"
                            style="background-color: #7B014C">
                            Book Appointment
                        </button>
                    </li>
                </ul>

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header justify-content-between">
                                <h5 class="modal-title" id="exampleModalLongTitle">Book an appointment</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                    class="text-dark">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div><br />
                                @endif

                                <form action="{{ route('appointments.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row m-1">
                                        <div class="col">
                                            <input type="text" name="name" placeholder="Name" class="form-control"
                                                required>
                                        </div>

                                    </div>

                                    <div class="row m-1">
                                        <div class="col">
                                            <input type="text" name="surname" placeholder="Last Name"
                                                class="form-control" required>
                                        </div>

                                    </div>
                                    <div class="form-group m-3">

                                        <input type="email" name="email" placeholder="Email address"
                                            class="form-control" required>
                                    </div>
                                    <div class="form-group m-3">
                                        <input type="text" name="phone_number" placeholder="Enter your phone number"
                                            class="form-control" required>
                                    </div>
                                    <div class="form-group m-3">
                                        <input type="date" name="date" placeholder="Pick date"
                                            class="form-control" required>
                                    </div>
                                    <div class="row m-1">

                                        <div class="col-md-12">
                                            <select name="time" class="form-control form-control-line" required>
                                                <option selected style="display:none">Select Prefered Time</option>

                                                <option value="08:00 - 09:00">8 am to 9 am
                                                </option>
                                                <option value="10:00 - 11:00">10 am to 11 am
                                                </option>
                                                <option value="12:00 - 13:00">12 pm to 13 pm
                                                </option>
                                                <option value="14:00 - 15:00">14 pm to 15 pm
                                                </option>
                                                <option value="16:00 - 17:00">16 pm to 17 pm
                                                </option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="row m-1">

                                        <div class="col-md-12">
                                            <select name="salon_id" class="form-control form-control-line" required>
                                                <option selected style="display:none">Select Salon</option>
                                                @foreach ($salons as $salon)
                                                    <option value="{{ $salon->id }}">{{ $salon->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row m-1">

                                        <div class="col-md-12">
                                            <select name="user_id" class="form-control form-control-line" required>
                                                <option selected style="display:none">Select Hair dresser</option>
                                                @foreach ($users as $user)
                                                    <option value="{{ $user->id }}">{{ $user->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row m-1">
                                        <label for="image" class="form-label">Select Hairstyle
                                        </label>
                                        <div class="col-md-12">
                                            <select name="style" class="form-control form-control-line" required>

                                                    <option value="Fade">Fade
                                                    </option>
                                                    <option value="Carrot">Carrot
                                                    </option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="row m-1">
                                        <div class="mb-3">
                                            <label for="style_image" class="form-label">Style Image
                                            </label>
                                            <div class="custom-file">
                                                <input type="file" class="form-control" name="style_image">
                                            </div>
                                        </div>
                                    </div>
                                    <p class="terms m-3" style="color: #7B014C">By clicking 'Submit' you agree to
                                        the <a href="#" class="text-secondary">Terms
                                            &amp; Conditions</a>.</p>
                                    <button type="submit" class="btn btn-block text-center text-light w-100"
                                        style="background-color:#7B014C"> Book Now</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item">
                            <a class="nav-link btn" href="#"
                                style="color: #7B014C; font-weight : bold">{{ __('Feedback') }}</a>
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

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('admin/assets/img/bg01.jpg') }}" class="d-block w-100 " alt="..."
                        style="height: 550px">

                </div>
                <div class="carousel-item">
                    <img src="{{ asset('admin/assets/img/bg02.jpg') }}" class="d-block w-100" alt="..."
                        style="height: 550px">

                </div>
                <div class="carousel-item">
                    <img src="{{ asset('admin/assets/img/bg03.jpg') }}" class="d-block w-100" alt="..."
                        style="height: 550px">

                </div>
            </div>

        </div>
    </div>

    <div class="container mr-5 ml-5 mt-3">
        <div class="row pt-3 pb-3 ">
            <div class="col-md-12 text-center">
                <h2>Indulge in Unforgettable Beauty Experiences at Our Exquisite Salon Oasis!</h2>

            </div>
        </div>
    </div>


    <div class="container">
        <section class="home-testimonial mb-5">
            <div class="container-fluid">
                <div class="row d-flex justify-content-center testimonial-pos">
                    <div class="container mr-5 ml-5" id="about">
                        <div class="row pt-2 pb-5 text-center">
                            <h2 style="color: #7B014C">About Us</h2>
                            <p class="tour-text text-dark text-center " style="font-size: 18px">Welcome to our online
                                booking system at ALVION Experience convenience and luxury as you schedule your salon
                                services with ease. Browse our menu, choose your preferred treatment, and select a date
                                and time that suits you best. Say goodbye to long waiting times and hello to a seamless
                                salon experience. Book now and indulge in a personalized journey of beauty and
                                rejuvenation. We can't wait to welcome you!</p>
                        </div>
                    </div>
                    <div class="col-md-12 pt-4 d-flex justify-content-center">
                        <h3 style="color: #7B014C">Testimonials</h3>
                    </div>
                    <div class="col-md-12 d-flex justify-content-center">
                        <h2 style="color: #7B014C">Explore the customers experience from our salon range</h2>
                    </div>
                </div>
                <section class="home-testimonial-bottom">
                    <div class="container testimonial-inner">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-4 style-3">
                                <div class="tour-item ">
                                    <div class="tour-desc bg-white">
                                        <div class="tour-text color-grey-3 text-center">&ldquo;I recently visited this
                                            salon and had an amazing experience!
                                            The staff was incredibly friendly and attentive. Definitely coming
                                            again!&rdquo;</div>
                                        <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people"
                                                src="{{ asset('assets/img/p01.jpg') }}" alt=""></div>
                                        <div class="link-name d-flex justify-content-center">Tariro Chakandinkaira
                                        </div>
                                        <div class="link-position d-flex justify-content-center">Client</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 style-3">
                                <div class="tour-item ">
                                    <div class="tour-desc bg-white">
                                        <div class="tour-text color-grey-3 text-center">&ldquo;I've been going to this
                                            salon for years, and I can't say enough good things about it. The entire
                                            team is professional and highly skilled. &rdquo;</div>
                                        <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people"
                                                src="{{ asset('assets/img/p02.jpg') }}" alt=""></div>
                                        <div class="link-name d-flex justify-content-center">Rufaro Nyachoto</div>
                                        <div class="link-position d-flex justify-content-center">Client</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 style-3">
                                <div class="tour-item ">
                                    <div class="tour-desc bg-white">
                                        <div class="tour-text color-grey-3 text-center">&ldquo; had an incredible
                                            experience at this salon. The staff members were not only talented but also
                                            welcoming and friendly. &rdquo;</div>
                                        <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people"
                                                src="{{ asset('assets/img/p03.jpg') }}" alt=""></div>
                                        <div class="link-name d-flex justify-content-center">Mary Mareya</div>
                                        <div class="link-position d-flex justify-content-center">Client</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>
            </div>

        </section>
    </div>

    <div class="container-fluid pb-1 mt-5"
        style="height: 400; background-color : #7B014C; margin-top: 250px !important" id="contact">
        <div class="row mt-3 ml-5 justify-content-center mb-5">
            <div class="col-md-6 ">
                <h4 class="pt-5 pl-5 fw-bold " style="color: #D9D9D9; margin-left : 120px">Physical Address</h4>
                <p class="pt-5 text-light" style = "margin-left : 120px">
                    17138 Unit "M"
                </p>
                <p class=" text-light" style = "margin-left : 120px">
                    Seke
                </p>
                <p class=" text-light" style = "margin-left : 120px">
                    Chitungwiza
                </p>
            </div>
            <div class="col-md-6">
                <h4 class="pt-5 fw-bold" style="color: #D9D9D9">Contact Details</h4>
                <p class="pt-5 ml-4 text-light"> Email Address : tatendamareya@gmail.com</p>
                <p class="m-1 text-light"> Phone Number : +263780854288</p>
                <div class="row mt-2">
                    <div class="col-md-2">
                        <a href="https://www.facebook.com/minnie.tatz">
                            <img src="{{ asset('admin/assets/img/icons/brands/facebook.png') }}" class="d-block"
                                alt="..." style="height: 20px; width: 20px">
                        </a>
                    </div>
                    <div class="col-md-2">
                        <a href="https://www.instagram.com/elegant_n_classy_zw?igsh=dmloeDN5a2dnc2I=">
                            <img src="{{ asset('admin/assets/img/icons/brands/instagram.png') }}" class="d-block"
                                alt="..." style="height: 20px; width: 20px">
                        </a>
                    </div>

                    <div class="col-md-2">
                        <a href="#">
                            <img src="{{ asset('admin/assets/img/icons/brands/twitter.png') }}" class="d-block"
                                alt="..." style="height: 20px; width: 20px">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
