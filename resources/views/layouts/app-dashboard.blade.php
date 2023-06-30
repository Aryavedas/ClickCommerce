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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @livewireStyles
</head>

<body>
    <div id="app-dashboard">
        {{-- Nav Bar --}}
        <nav class="navbar fixed-top navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <h2 class="mt-2">Dashboard</h2>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->

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
                            {{-- User Profile --}}
                            <li class="nav-item dropdown btn btn-warning py-0" style="font-weight: 900;">
                                <a id="navbarDropdown" style="color: white" class="nav-link dropdown-toggle" href="#"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" style="font-weight: 700" href="{{ route('home.index') }}">
                                        {{ __('Kembali Ke aplikasi') }}
                                    </a>

                                    @can('viewAny', App\Models\User::class)
                                        <a class="dropdown-item active-button" style="font-weight: 700"
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

        <div class="row mt-4">
            {{-- Side Bar --}}
            <aside class="col-3 sidebar shadow-lg" style="background-color: #2b2d31; margin-top: 39px;">
                <div class="mt-1 row">
                    <a href="{{ route('dashboard.index') }}" class="col-12 side link py-3 px-5  @yield('dash-side-index')">
                        <i class="side col-1 fa-solid fa-house" style="color: #ffffff;"></i>
                        Daftar Produk
                    </a>
                    <a href="{{ route('dashboard.create') }}" class="col-12 side link py-3 px-5  @yield('dash-side-create')">
                        <i class="fa-solid col-1 fa-folder-plus" style="color: #ffffff;"></i>
                        Tambah Produk
                    </a>
                    <a href="{{ route('dashboard.showEdit') }}" class="col-12 side link py-3 px-5 @yield('dash-side-show-edit')">
                        <i class="side col-1 fa-solid fa-file-pen" style="color: #ffffff;"></i>
                        Edit Produk
                    </a>
                    <a href="{{ route('dashboard.showDelete') }}" class="col-12 side link py-3 px-5 @yield('dash-side-show-delete')">
                        <i class="side col-1 fa-solid fa-trash" style="color: #ffffff;"></i>
                        Hapus Produk
                    </a>

                </div>
            </aside>

            {{-- Content --}}
            <main class="col main-content mt-5">
                <div class="mt-1">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>
    @livewireScripts
</body>

</html>
