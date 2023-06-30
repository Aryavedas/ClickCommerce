@extends('layouts.app-dashboard')
@section('dash-side-show-edit', 'sidebar-active')

@section('content')
    <h1 style="font-family: 'Poppins'">Edit Data Produk</h1>
    <div class="row">
        <div class="col-4">
            <div class="card h-100">
                <img id="showPreviewImage" src="{{ asset('storage/uploads/' . $product->image) }}" class="card-img-top show-center-cropped"
                    alt="Dummy Image">
                <div class="card-body p-1">

                    {{-- Nama Product --}}
                    <p id="showCardTitle"
                        style="font-size: 14px; font-weight: 500; font-family: 'Poppins'; letter-spacing: 0.1px"
                        class="card-title text-limit">{{ $product->title }}</p>

                    {{-- Harga Product --}}
                    <p id="showPriceProduct" style="font-size: 17px; color: #FFA500; font-weight: 600;"
                        class="card-title text-limit">Rp. {{ number_format($product->price ?? 0, 0, ',', '.') }}
                    </p>

                    <div class="d-flex align-items-center mb-3">
                        <img src="{{ asset('img/mini-logo.png') }}" alt="" width="16" height="16">
                        <p style="font-size: 10px;" class="mb-0 mt-1">ClickCommerce</p>
                    </div>

                    {{-- Terjual --}}
                    <p style="font-size: 11px;" class="card-title text-limit">Terjual : {{ $product->items_sold }}
                    </p>
                </div>
            </div>
        </div>

        <div class="col">
            <form action="{{ route('dashboard.update', [$product->id]) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                {{-- Input Foto Produk --}}
                <span id="gantiFotoProduct" class="btn btn-primary mb-1">Ganti Foto Product</span>
                <div class="mb-3">
                    <input class="form-control @error('gambar_produk') is-invalid @enderror" type="file"
                        name="gambar_product" style="display:none" id="showInputImage"">
                    @error('gambar_product')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <select class="form-select mb-3" aria-label="Default select example" name="category">
                    <option value="">Pilih Kategori</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $product->id_category == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                    @endforeach
                </select>

                @error('category')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                {{-- Input Nama Produk --}}
                <div class="form-floating mb-3">
                    <input value="{{ old('nama_product') ?? ($product->title ?? '') }}" type="text" name="nama_product"
                        class="form-control @error('nama_product') is-invalid @enderror" id="showInputProduct"
                        placeholder="nama">
                    <label for="floatingInput">Nama Produk</label>
                    @error('nama_product')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                {{-- Input Harga Produk --}}
                <div class="form-floating">
                    <input value="{{ old('harga_product') ?? ($product->price ?? '') }}" type="text"
                        class="form-control @error('harga_product') is-invalid @enderror" id="showCardPrice"
                        name="harga_product" placeholder="text">
                    <label for="floatingPassword">Harga Produk</label>
                    @error('harga_product')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                {{-- Deskripsi Produk --}}
                <div class="form-floating mt-3">
                    <textarea name="deskripsi_product" class="form-control @error('deskripsi_product') is-invalid @enderror"
                        placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px">{{ old('deskripsi_product') ?? ($product->description ?? '') }}</textarea>
                    <label for="floatingTextarea2">Deskripsi Produk</label>
                    @error('deskripsi_product')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                {{-- Input Stock Produk --}}
                <div class="form-floating mt-3">
                    <input value="{{ old('stock_product') ?? ($product->stocks ?? '') }}" type="text"
                        name="stock_product" class="form-control @error('stock_product') is-invalid @enderror"
                        id="floatingPassword" placeholder="text">
                    <label for="floatingPassword">Stock Produk</label>
                    @error('stock_product')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <button class="btn btn-success mt-3">Simpan Perubahan</button>
                <a href="{{ route('dashboard.showEdit') }}" class="btn btn-danger mt-3">Kembali</a>
            </form>
        </div>
    </div>
@endsection
