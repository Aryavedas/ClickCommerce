@extends('layouts.app-dashboard')
@section('dash-side-show-delete', 'sidebar-active')

@section('content')
    <h1 style="font-family: 'Poppins'">Hapus Produk</h1>
    {{-- Card Product Start --}}
    <div class="container">
        <div class="row">
            @forelse ($products as $product)
                <div class="col col-6 col-sm-4 col-md-3 col-lg-2 p-0">
                    <div class="position-relative h-100" style="padding: 9px 5px">
                        <div class="card h-100">
                            <img src="{{ asset('storage/uploads/' . $product->image) }}" class="card-img-top" alt="Dummy Image">
                            <div class="card-body p-1">
                                <p style="font-size: 14px; font-weight: 500; font-family: 'Poppins'; letter-spacing: 0.1px"
                                    class="card-title text-limit">{{ $product->title }}</p>

                                <p style="font-size: 17px; color: #FFA500; font-weight: 600;" class="card-title text-limit">
                                    Rp. {{ number_format($product->price, 0, ',', '.') }}
                                </p>

                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('img/mini-logo.png') }}" alt="" width="16"
                                        height="16">
                                    <p style="font-size: 10px;" class="mb-0 mt-1">ClickCommerce</p>
                                </div>

                                <p style="font-size: 11px;" class="card-title text-limit">Terjual :
                                    {{ $product->items_sold }}
                                </p>

                                <form action="{{ route('dashboard.destroy', [$product->id]) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger position-absolute top-0 start-0 m-1">Hapus Produk</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
            <div class="alert alert-secondary text-center" role="alert">
                <h2>Produk Tidak Di Temukan...</h2>
            </div>
            @endforelse
        </div>
    </div>
@endsection
