@extends('layouts.app')
@section('breadcumb', "$product->title")

@section('content')
    <div class="container mb-5">
        <div class="row">
            <div class="col-4 mx-auto sticky-top">
                <img src="{{ asset('storage/uploads/' . $product->image) }}" width="370" height="370" class=""
                    alt="">
            </div>

            <div class="col-8">
                <h1 style="font-weight: 600; margin-bottom: 0px;">{{ $product->title }}</h1>
                <p>Terjual <span style="color: rgb(92, 92, 92)">{{ $product->items_sold }}</span></p>
                <h1 style="font-size: 34px; font-family: 'Poppins';  color: #FFA500; font-weight: 600;"
                    class="card-title text-limit mb-4">Rp.
                    {{ number_format($product->price, 0, ',', '.') }}</h1>
                <hr class="w-75">
                <p class="mb-0">Deskripsi Produk :</p>
                <p class="mb-4">{{ $product->description }}</p>
                <hr class="w-75">
                <p>Stock Produk <span style="color: rgb(92, 92, 92)">{{ $product->stocks }}</span></p>
                <button class="btn btn-success">
                    <livewire:add-to-cart :product="$product" />
                </button>
            </div>
        </div>
    </div>

    <div class="container text-center">
        <h2 style="color: #FFA500; font-weight: 800">Produk Lainnya</h2>
    </div>

    <hr class="container w-50" style="border: 2px solid #FFA500; opacity: 2; border-radius: 10px;">

    @livewire('product-list')

@endsection
