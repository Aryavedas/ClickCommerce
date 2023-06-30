<div>
    <div class="container">
        <h1 style="font-weight: 700" class="mb-5">Keranjang Belanja Kamu</h1>
        <div class="row">
            <div class="col-8">
                @forelse ($cart['products'] ?? [] as $product)
                    <div class="card mb-2">
                        <div class="card-body d-flex align-items-center">

                            <div class="col-2">
                                <img src="{{ 'storage/uploads/' . $product->image }}"
                                    style="width: 100px; height: 100px;">
                            </div>

                            <div class="col-11">
                                <div>
                                    <h5 class="card-title" style="font-weight: 700">{{ $product->title }}</h5>
                                    <p class="card-text" style="margin-top: -7px;">Harga:
                                        Rp.{{ number_format($product->price, 0, ',', '.') }}</p>
                                    <p class="card-text">di jual oleh: ClickCommerce</p>
                                </div>
                            </div>

                            <div class="col-2 text-right">
                                <button wire:click="dropCart({{ $product->id }})" class="btn btn-danger m-2"
                                    style="position: absolute; top: 0; right: 0;">
                                    <i class="fa-solid fa-trash" style="color: #ffffff;"></i>
                                    Hapus
                                </button>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="alert alert-dark text-center">
                        <h1>Keranjang Kamu Kosong</h1>
                    </div>
                @endforelse
            </div>

            {{-- Total CheckOut --}}
            <div class="col">
                <div class="card" style="  position: sticky;
                top: 130px;">
                    <div class="card-body">
                        <h2 style="font-family: 'Poppins'" class="text-center">Ringkasan belanja</h2>
                        <hr>
                        <p>Jumlah Barang : {{ $itemCount }} </p>
                        <p>Total Belanja</p>
                        <p style="margin-top: -19px;font-size: 30px; color: #FFA500; font-weight: 600; font-family: 'Poppins'"
                            class="card-title text-limit">
                            Rp.
                            {{ number_format($totalPrice, 0, ',', '.') }}</p>
                        <a href="{{ route('checkout') }}" class="btn btn-primary col-12"
                            style="font-weight: 700">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
