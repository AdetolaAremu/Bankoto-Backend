<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product as ModelProduct;

class Product extends Component
{
    use WithPagination;

    public function render()
    {
        $products = ModelProduct::with('category')->paginate(10);

        return view('livewire.admin.product', [
            'products' => $products
        ])->layout('layout.admin');
    }
}
