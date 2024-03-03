<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>ALVION | Welcome</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/css/core.css') }}"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/css/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/apex-charts/apex-charts.css') }}" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('admin/assets/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('admin/assets/js/config.js') }}"></script>
</head>

<body style="background-color: #fff">
    <div id="app">
        <!-- Layout wrapper -->
        <div class="layout-wrapper layout-content-navbar">
            <div class="layout-container">
                <!-- Menu -->
                <aside id="layout-menu" class="layout-menu menu-vertical menu " style="background-color: #D9D9D9">
                    <div class="app-brand demo text-center">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="{{ asset('assets/img/logo.png') }}" alt="" srcset="" class="logo"
                                height="60">
                        </a>

                        <a href="javascript:void(0);"
                            class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                            <i class="bx bx-chevron-left bx-sm align-middle"></i>
                        </a>
                    </div>

                    <div class="menu-inner-shadow"></div>

                    <ul class="menu-inner py-1">
                        <!-- Dashboard -->
                        <li class="menu-item active">
                            <a href="#" class="menu-link" style="color: #7B014C">
                                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                                <div data-i18n="Analytics">Dashboard</div>
                            </a>
                        </li>


                        <li class="menu-header small text-uppercase" style="background-color: #7B014C"><span
                                class="menu-header-text">Salon
                                Management</span></li>
                        <!-- Forms -->
                        <li class="menu-item">
                            <a href="javascript:void(0);" class="menu-link menu-toggle" style="color: #7B014C">
                                <i class="menu-icon tf-icons bx bx-detail"></i>
                                <div data-i18n="Form Elements">Salon</div>
                            </a>
                            <ul class="menu-sub">
                                <li class="menu-item">
                                    <a href="{{ route('salons.index') }}" class="menu-link" style="color: #7B014C">
                                        <div data-i18n="All listings">All</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{ route('salons.create') }}" class="menu-link" style="color: #7B014C">
                                        <div data-i18n="Add new user">New</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-header small text-uppercase" style="background-color: #7B014C"><span
                                class="menu-header-text">Stock
                                Management</span></li>
                        <!-- Forms -->
                        <li class="menu-item">
                            <a href="javascript:void(0);" class="menu-link menu-toggle" style="color: #7B014C">
                                <i class="menu-icon tf-icons bx bx-detail"></i>
                                <div data-i18n="Form Elements">Stock</div>
                            </a>
                            <ul class="menu-sub">
                                <li class="menu-item">
                                    <a href="{{ route('stocks.index') }}" class="menu-link" style="color: #7B014C">
                                        <div data-i18n="All listings">All</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{ route('stocks.create') }}" class="menu-link" style="color: #7B014C">
                                        <div data-i18n="Add new user">New</div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Forms & Tables -->
                        <li class="menu-header small text-uppercase" style="background-color: #7B014C"><span class="menu-header-text">User &amp;
                                Management</span></li>
                        <!-- Forms -->
                        <li class="menu-item">
                            <a href="javascript:void(0);" class="menu-link menu-toggle" style="color: #7B014C">
                                <i class="menu-icon tf-icons bx bx-detail" ></i>
                                <div data-i18n="Form Elements">Users</div>
                            </a>
                            <ul class="menu-sub">
                                <li class="menu-item">
                                    <a href="{{ route('users.index') }}" class="menu-link" style="color: #7B014C">
                                        <div data-i18n="All users">All</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-link">
                                        <div data-i18n="Add new user" style="color: #7B014C">New</div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </aside>
                <!-- / Menu -->
                <!-- Layout container -->
                <div class="layout-page">
                    <!-- Navbar -->
                    <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center"
                        id="layout-navbar" style="background-color: #7B014C !important">
                        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                                <i class="bx bx-menu bx-sm"></i>
                            </a>
                        </div>

                        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

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
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#"
                                            role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </nav>

                    <!-- / Navbar -->

                    <main class="py-4">
                        @yield('content')
                    </main>

                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>
        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('admin/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('admin/assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('admin/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('admin/assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('admin/assets/js/dashboards-analytics.js') }}"></script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>
