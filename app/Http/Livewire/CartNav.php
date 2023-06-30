<?php

namespace App\Http\Livewire;

use App\Facades\Cart;
use Livewire\Component;

class CartNav extends Component
{
    public $cartTotal = 0;
    protected $listeners = [
        'addToCart' => 'updateCartTotal',
        'dropCart' => 'updateCartTotal',
        'cartClear' => 'updateCartTotal',
    ];

    public function mount()
    {
        $this->updateCartTotal();
    }

    public function updateCartTotal()
    {
        $cart = Cart::get();
        if ($cart && isset($cart['products'])) {
            $this->cartTotal = count($cart['products']);
        } else {
            $this->cartTotal = 0;
        }
    }

    public function render()
    {
        return view('livewire.cart-nav');
    }
}
