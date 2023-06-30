<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\ProductCategory;
use Livewire\WithPagination;

class ProductList extends Component
{
    use WithPagination;

    public $listCount = 6;
    public $search;
    public $category;

    public function loadMore()
    {
        $this->listCount += 6;
    }

    public function render()
    {
        $categories = ProductCategory::all();

        $query = Product::latest();

        if ($this->search !== null) {
            $query = $query->where('title', 'like', '%' . $this->search . '%');
        }

        if ($this->category !== null && $this->category !== "") {
            $query = $query->where('id_category', $this->category);
        }

        $products = $query->paginate($this->listCount);

        return view('livewire.product-list', [
            'products' => $products,
            'categories' => $categories,
        ]);
    }
}
