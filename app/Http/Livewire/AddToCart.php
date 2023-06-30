<?php

namespace App\Http\Livewire;

use App\Facades\Cart;
use App\Models\Product;
use Livewire\Component;

class AddToCart extends Component
{
    public $product;

    public function addToCart()
    {
        $product = Product::find($this->product->id);
        Cart::add($product);
        $this->emit('addToCart');
    }

    public function render()
    {
        return view('livewire.add-to-cart');
    }
}
