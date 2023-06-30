<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/png">

    <title>ClickCommerce</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @livewireStyles
</head>

<body style="padding-top: 100px; background-color: #FFFFFF;">
    <div id="app">
        <nav class="navbar fixed-top navbar-expand-md navbar-light bg-white shadow-sm @yield('hide-navbar')">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('img/clickcommerce_logo.png') }}" width="200"
                        class="main-logo d-none d-md-inline" alt="Clicl Commerce Logo">
                    <img src="{{ asset('img/clickcommerce_logo.png') }}" width="200"
                        class="main-logo d-inline d-md-none d-none" alt="Clicl Commerce Logo">
                </a>
                <div class="main-logo d-inline d-md-none w-75 @yield('hide-serchbar')">
                    <div>
                        <input placeholder="Cari Produk" wire:model="search" type="text"
                            class="form-control form-control-navbar">
                    </div>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul
                        class="navbar-nav w-100 me-auto align-self-center d-none d-lg-block d-md-block @yield('hide-searchbar')">
                        <div class="input-group align-items-center justify-content-center gap-1">
                            <div class="mb-3 mt-4 w-75 pl-5">
                                <input placeholder="Cari Produk" type="email" wire:model="search"
                                    class="form-control form-control-navbar @yield('hide-searchbar')" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>

                            <button type="button" class="btn rounded-3 btn-warning mt-2 @yield('hide-searchbar')">
                                <i class="fas fa-search" style="color: white"></i>
                            </button>

                        </div>
                    </ul>


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto gap-2 mt-2">
                        <!-- Authentication Links -->
                        <a class="" href="{{ url('/') }}">
                            <img src="{{ asset('img/clickcommerce_logo.png') }}" width="140"
                                class="main-logo d-lg-none d-md-none" alt="Clicl Commerce Logo">
                        </a>
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item btn border-warning border-3 py-0" style="font-weight: 700; ">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item btn btn-warning py-0 border-3" style="font-weight: 700">
                                    <a class="nav-link" style="color: white"
                                        href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            {{-- Shopping Cart --}}
                            @livewire('cart-nav')
                            {{-- User Profile --}}
                            <li class="nav-item dropdown btn btn-warning py-0" style="font-weight: 900;">
                                <a id="navbarDropdown" style="color: white" class="nav-link dropdown-toggle" href="#"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                                    @can('viewAny', App\Models\User::class)
                                        <a class="dropdown-item" style="font-weight: 700"
                                            href="{{ route('dashboard.index') }}">Dashboard
                                        </a>
                                    @endcan

                                    <a class="dropdown-item" style="font-weight: 700" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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

        {{-- breadcrumb --}}
        <div class="container mt-3" id="breadcumb">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb @yield('hide-briedcrumb')">
                    <li class="breadcrumb-item text-decoration-none"><a href="{{ route('home.index') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">@yield('breadcumb')</li>
                </ol>
            </nav>
        </div>

        <main class="">
            @yield('content')
        </main>
    </div>

    <br><br>
    <div class="container">
        <div class="row col-5">
            <div class="col col-3">
                <a href="{{ route('home.index') }}">
                    <img src="{{ asset('img/clickcommerce_logo.png') }}" alt="" width="200">
                </a>
            </div>
        </div>
    </div>
    <footer id="main-footer" class="text-white bg-dark py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-center text-md-start">
                    <p>ClickCommerce Adalah sebuah platform toko online yang menyediakan berbagai macam peralatann
                        rumah tangga
                    </p>
                </div>

                <div class="col-md-3 text-center">
                    <h5>Community</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Activity</a></li>
                        <li><a href="#" class="text-white">Members</a></li>
                        <li><a href="#" class="text-white">Groups</a></li>
                        <li><a href="#" class="text-white">Forums</a></li>
                    </ul>
                </div>

                <div class="col-md-3 text-center">
                    <h5>Our Services</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Our mission</a></li>
                        <li><a href="#" class="text-white">Help/Contact Us</a></li>
                        <li><a href="#" class="text-white">Privacy Policy</a></li>
                        <li><a href="#" class="text-white">Cookie Policy</a></li>
                        <li><a href="#" class="text-white">Terms & Conditions</a></li>
                    </ul>
                </div>

                <div class="col-md-3 text-center text-md-start">
                    <h5>Hubungi Kami</h5>
                    <div class="text-nowrap"><i class="fas fa-envelope fa-fw me-3"></i>
                        veda@gmail.com</div>
                    <div class="text-nowrap"><i class="fas fa-phone fa-fw me-3"></i>
                        (081) 56010707</div>
                    <div class="text-nowrap"><i class="fas fa-globe fa-fw me-3"></i>
                        www.clickcommerce.com</div>
                </div>
            </div>

            <div class="row mt-3 mt-md-0">
                <div class="col-md-3 me-md-auto text-center text-md-start">
                    <small>&copy; ClickCommerce {{ date('Y') }}</small>
                </div>
                <div class="col-md-3 text-center text-md-start">
                    <div>
                        <a href="#" class="text-white text-decoration-none me-2">
                            <i class="fab fa-facebook fa-lg"></i>
                        </a>
                        <a href="#" class="text-white text-decoration-none me-2">
                            <i class="fab fa-twitter fa-lg"></i>
                        </a>
                        <a href="#" class="text-white text-decoration-none me-2">
                            <i class="fab fa-instagram fa-lg"></i>
                        </a>
                        <a href="#" class="text-white text-decoration-none me-2">
                            <i class="fab fa-whatsapp fa-lg"></i>
                        </a>
                        <a href="#" class="text-white text-decoration-none me-2">
                            <i class="fab fa-github fa-lg"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </footer>
    @livewireScripts
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('services.midtrans.clientKey') }}"></script>

</body>

</html>
