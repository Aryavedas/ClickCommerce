<div>
    <div class="container">
        <div class="row">
            <nav class="navbar fixed-top navbar-expand-md navbar-light bg-white shadow-sm">
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
                            class="navbar-nav w-100 me-auto align-self-center d-none d-lg-block d-md-block @yield('hide-serchbar')">
                            <div class="input-group align-items-center justify-content-center gap-1">
                                <div class="mb-3 mt-4 w-75 pl-5">
                                    <input placeholder="Cari Produk" type="email" wire:model="search"
                                        class="form-control form-control-navbar @yield('hide-serchbar')"
                                        id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>

                                <button type="button" class="btn rounded-3 btn-warning mt-2 @yield('hide-serchbar')">
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
                                    <a id="navbarDropdown" style="color: white" class="nav-link dropdown-toggle"
                                        href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" v-pre>
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

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>

                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="">
                <select class="form-select" aria-label="Default select example" wire:model="category">
                    <option value="" selected>Pilih Kategori</option>
                    @foreach ($categories as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>



            </div>

            @forelse ($products as $product)
                <a href="{{ route('products.show', [$product->id]) }}"
                    class="col col-6 col-sm-4 col-md-3 col-lg-2 mt-3 text-decoration-none" style="padding: 9px 5px">
                    <div id="card" class="card h-100 border-0 bg-white rounded-4">
                        <img src="{{ asset('storage/uploads/' . $product->image) }}" class="card-img-top rounded-top-4"
                            alt="Dummy Image">
                        <div class="card-body p-1">
                            <p style="font-size: 14px; font-weight: 500; font-family: 'Poppins'; letter-spacing: 0.1px"
                                class="card-title text-limit">{{ $product->title }}</p>

                            <p style="font-size: 17px; color: #FFA500; font-weight: 600;" class="card-title text-limit">
                                Rp.
                                {{ number_format($product->price, 0, ',', '.') }}</p>

                            <div class="d-flex align-items-center mb-3">
                                <img src="{{ asset('img/mini-logo.png') }}" alt="" width="16"
                                    height="16">
                                <p style="font-size: 10px;" class="mb-0 mt-1">ClickCommerce</p>
                            </div>

                            <p style="font-size: 11px;" class="card-title text-limit">Terjual :
                                {{ $product->items_sold }}
                            </p>
                        </div>
                    </div>
                </a>
            @empty
                <div class="alert alert-secondary text-center mt-5" role="alert">
                    <h2>Produk Tidak Di Temukan...</h2>
                </div>
            @endforelse
        </div>
        <div class="text-center col-12 mt-5">
            <button wire:click="loadMore" class="btn btn-dark px-5 py-2" style="font-weight: 700">Produk
                Lainnya</button>
        </div>
    </div>
</div>
