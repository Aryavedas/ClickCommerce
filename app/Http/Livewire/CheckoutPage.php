<?php

namespace App\Http\Livewire;

use App\Facades\Cart;
use App\Models\Product;
use Livewire\Component;

class CheckoutPage extends Component
{
    public $first_name;
    public $last_name;
    public $addres;
    public $city;
    public $postal_code;
    public $formCheckout;
    public $snapToken;

    protected $listeners = [
        'emptyCart' => 'emptyCartHandler',
    ];

    public function mount()
    {
        $this->formCheckout = true;
    }

    public function render()
    {
        return view('livewire.checkout-page');
    }

    public function checkout()
    {
        $this->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'addres' => 'required',
            'city' => 'required',
            'postal_code' => 'required|numeric',
        ]);

        $cart = Cart::get()['products'];
        $amount = array_sum(
            array_column($cart, 'price')
        );

        $customerDetails = [
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'addres' => $this->addres,
            'city' => $this->city,
            'postal_code' => $this->postal_code
        ];

        $transactionDetails = [
            'order_id' => time(),
            'gross_amount' => $amount
        ];

        $payload = [
            'transaction_details' => $transactionDetails,
            'customer_details' => $customerDetails,
        ];

        $this->formCheckout = false;

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('services.midtrans.serverKey');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = config('services.midtrans.isProduction');
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = config('services.midtrans.isSanitized');
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = config('services.midtrans.is3ds');

        $snapToken = \Midtrans\Snap::getSnapToken($payload);

        $this->snapToken = $snapToken;

        // Update product sales count
        $this->updateProductSales();
    }

    public function updateProductSales()
    {
        $cart = Cart::get()['products'];
        foreach ($cart as $item) {
            $product = Product::where('id', $item['id'])->first();
            if ($product) {
                $product->items_sold += $item['quantity'];
                $product->save();
            }
        }
    }

    public function emptyCartHandler()
    {
        Cart::clear();
        $this->emit('cartClear');
    }
}
