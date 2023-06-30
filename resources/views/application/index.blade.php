@extends('layouts.app')
@section('hide-briedcrumb', 'd-none')
@section('hide-navbar', 'd-none')

@section('content')
    {{-- Carousel  --}}
    <div id="carouselExampleFade" class="carousel container slide carousel-fade" data-bs-ride="carousel"
        data-bs-interval="2000">
        <div class="carousel-inner">
            <div class="carousel-item align-content-center active">
                <img src="{{ asset('img/carousel-1.jpg') }}" class="d-block rounded-4 w-75" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/carousel-2.jpg') }}" class="d-block rounded-4 w-75" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/carousel-3.jpg') }}" class="d-block rounded-4 w-75" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/carousel-4.jpg') }}" class="d-block rounded-4 w-75" alt="...">
            </div>
        </div>



        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <i class="fa-solid fa-circle-chevron-left" style="color: #000000; font-size: 30px"></i>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <i class="fa-solid fa-circle-chevron-right" style="color: #000000; font-size: 30px"></i>
        </button>
    </div>

    {{-- Daftar Produk --}}
    <div class="text-center mt-4">
        <h2 style="color: #FFA500; font-weight: 800">Daftar Produk</h2>
    </div>
    <hr class="container w-50" style="border: 2px solid #FFA500; opacity: 2; border-radius: 10px;">

    {{-- Card Product Start --}}
    @livewire('product-list')



@endsection
