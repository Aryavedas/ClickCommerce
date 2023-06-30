@extends('layouts.app-dashboard')
@section('dash-side-create', 'sidebar-active')

@section('content')
    <h1 style="font-family: 'Poppins'">Tambah Produk</h1>
    <div class="row">
        <div class="col-4">
            <div class="card h-100">
                <img src="https://via.placeholder.com/300x300" class="card-img-top show-center-cropped" alt="Dummy Image"
                    id="createImagePreview">
                <div class="card-body p-1">
                    <p style="font-size: 14px; font-weight: 500; font-family: 'Poppins'; letter-spacing: 0.1px"
                        id="createCardTitle" class="card-title text-limit">Nama Produk</p>

                    <p style="font-size: 17px; color: #FFA500; font-weight: 600;" class="card-title text-limit"
                        id="createCardPrice">Rp. Harga
                        Produk
                    </p>

                    <div class="d-flex align-items-center mb-3">
                        <img src="{{ asset('img/mini-logo.png') }}" alt="" width="16" height="16">
                        <p style="font-size: 10px;" class="mb-0 mt-1">ClickCommerce</p>
                    </div>

                    <p style="font-size: 11px;" class="card-title text-limit">Terjual : 0
                    </p>
                </div>
            </div>
        </div>

        <div class="col">
            <form action="{{ route('dashboard.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- Input Foto Produk --}}
                <div class="mb-3">
                    <label for="gambar" class="form-label m-0 ">Gambar Produk</label>
                    <input value="{{ old('gambar_product') }}"
                        class="form-control @error('gambar_product') is-invalid @enderror" type="file"
                        id="createInputImage" name="gambar_product">
                    @if ($errors->has('gambar_product'))
                        @error('gambar_product')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    @else
                        <span style="font-size: 12px; padding: 0px">gunakan gambar ukuran 300x300 piksel</span>
                    @endif
                </div>

                <select class="form-select mb-3" aria-label="Default select example" name="category">
                    <option value="">Pilih Kategori</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category') == $category->id ? 'selected' : '' }}>
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
                    <input value="{{ old('nama_product') }}" type="text" name="nama_product"
                        class="form-control @error('nama_product') is-invalid @enderror" id="createInputTitle"
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
                    <input value="{{ old('harga_product') }}" type="text"
                        class="form-control @error('harga_product') is-invalid @enderror" id="createInputPrice"
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
                        placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px">{{ old('deskripsi_product') }}</textarea>
                    <label for="floatingTextarea2">Deskripsi Produk</label>
                    @error('deskripsi_product')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                {{-- Input Stock Produk --}}
                <div class="form-floating mt-3">
                    <input value="{{ old('stock_product') }}" type="text" name="stock_product"
                        class="form-control @error('stock_product') is-invalid @enderror" id="floatingPassword"
                        placeholder="text">
                    <label for="floatingPassword">Stock Produk</label>
                    @error('stock_product')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <button class="btn btn-success mt-3">Tambah Produk</button>
            </form>
        </div>
    </div>
@endsection
