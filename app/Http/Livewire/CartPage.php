<?php

namespace App\Http\Livewire;

use App\Facades\Cart;
use Livewire\Component;

class CartPage extends Component
{
    public $cart;
    public $itemCount = 0;
    public $totalPrice;

    public function mount()
    {
        $this->cart = Cart::get();
    }

    public function dropCart($productId)
    {
        Cart::remove($productId);
        $this->cart = Cart::get();
        $this->emit('dropCart');
    }

    public function render()
    {
        $cart = Cart::get();
        $this->itemCount = !empty($cart['products']) ? count($cart['products']) : 0;

        $totalPrice = 0;
        if (!empty($cart['products'])) {
            foreach ($cart['products'] as $product) {
                $totalPrice += $product->price;
            }
        }

        $this->totalPrice = $totalPrice;

        return view('livewire.cart-page');
    }
}
