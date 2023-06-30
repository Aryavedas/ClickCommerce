<div>
    <div class="container">
        <div class="card w-75 mx-auto">
            <div class="card-body">

                @if ($formCheckout === true)
                    <form wire:submit.prevent="checkout" autocomplete="off">
                        <div class="row">

                            <div class="form-floating mb-3 col">
                                <input wire:model="first_name" name="first_name" type="text"
                                    value="{{ old('first_name') }}"
                                    class="form-control @error('first_name') is-invalid @enderror" id="floatingPassword"
                                    placeholder="Password">
                                <label for="floatingPassword" style="margin-left: 20px;">First Name</label>
                                @error('first_name')
                                    <div class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>

                            <div class="form-floating mb-3 col">
                                <input wire:model="last_name" name="last_name" type="text"
                                    value="{{ old('last_name') }}"
                                    class="form-control @error('last_name') is-invalid @enderror" id="floatingPassword"
                                    placeholder="Password">
                                <label for="floatingPassword" style="margin-left: 20px;">Last Name</label>
                                @error('last_name')
                                    <div class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-floating">
                            <textarea wire:model="addres" name="addres" class="form-control @error('addres') is-invalid @enderror"
                                placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px">{{ old('addres') }}</textarea>
                            <label for="floatingTextarea2">Alamat</label>
                            @error('addres')
                                <div class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>

                        <div class="row mt-3">
                            <div class="form-floating mb-3 col">
                                <input wire:model="city" name="city" type="text" value="{{ old('city') }}"
                                    class="form-control @error('city') is-invalid @enderror" id="floatingInput"
                                    placeholder="name@example.com">
                                <label for="floatingInput" style="margin-left: 20px;">Kota</label>
                                @error('city')
                                    <div class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>

                            <div class="form-floating mb-3 col">
                                <input wire:model="postal_code" name="postal_code" type="text"
                                    value="{{ old('postal_code') }}"
                                    class="form-control @error('postal_code') is-invalid @enderror"
                                    id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword" style="margin-left: 20px;">Kodepos</label>
                                @error('postal_code')
                                    <div class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <button class="btn btn-primary">Submit</button>
                    </form>
                @else
                    <button wire:click="$emit('payment', '{{ $snapToken }}')"
                        class="btn btn-primary">Payment</button>
                    <script>
                        window.livewire.on('payment', function(snapToken) {
                            snap.pay(snapToken, {
                                // Optional
                                onSuccess: function(result) {
                                    window.livewire.emit('emptyCart');
                                    window.location.href = "/";
                                },
                                // Optional
                                onPending: function(result) {
                                    location.reload();
                                },
                                // Optional
                                onError: function(result) {
                                    location.reload();
                                }
                            });
                            window.livewire.emit('emptyCart');
                        });
                    </script>
                    </script>
                @endif
            </div>
        </div>

    </div>
</div>
