@extends('layouts.app-dashboard')
@section('dash-side-index', 'sidebar-active')

@section('content')
    <h1 style="font-family: 'Poppins'">Daftar Produk</h1>
    {{-- Card Product Start --}}
    <div class="container">
        <div class="row">
            @forelse ($products as $product)
                <a href="{{ route('products.show', [$product->id]) }}"
                    class="col col-6 col-sm-4 col-md-3 col-lg-2 text-decoration-none" style="padding: 9px 5px">
                    <div id="card" class="card h-100">
                        <img src="{{ ("storage/uploads/".$product->image) }}" class="card-img-top center-cropped" alt="Product Image">
                        <div class="card-body p-1">
                            <p style="font-size: 13px; font-weight: 500; font-family: 'Poppins'; letter-spacing: 0.1px"
                                class="card-title text-limit">{{ $product->title }}</p>

                            <p style="font-size: 17px; color: #FFA500; font-weight: 600;" class="card-title text-limit">Rp.
                                {{ number_format($product->price, 0, ',', '.') }}</p>


                            <div class="d-flex align-items-center mb-3">
                                <img src="{{ asset('img/mini-logo.png') }}" alt="" width="16" height="16">
                                <p style="font-size: 10px;" class="mb-0 mt-1">ClickCommerce</p>
                            </div>

                            <p style="font-size: 11px;" class="card-title text-limit">Terjual : {{ $product->items_sold }}
                            </p>
                        </div>
                    </div>
                </a>
            @empty
            <div class="alert alert-secondary text-center" role="alert">
                <h2>Produk Tidak Di Temukan...</h2>
            </div>
            @endforelse
        </div>
    </div>
@endsection
