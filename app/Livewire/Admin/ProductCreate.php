<?php

namespace App\Livewire\Admin;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class ProductCreate extends Component
{
    public $product_name;
    public $product_title;
    public $product_description;
    public $category_id;
    public $tags;
    public $size;
    public $weight;
    public $sku;
    public $colour;

    protected $rules = [
        'product_name' => 'required|string|max:255',
        'product_title' => 'required|string|max:255',
        'product_description' => 'required|string|max:1000',
        'category_id' => 'required|exists:categories,id',
        'tags' => 'nullable|string',
        'size' => 'required|string|max:255',
        'weight' => 'required|string|max:255',
        'sku' => 'required|string|max:255|unique:products,sku',
        'colour' => 'required|string|max:255',
    ];

    public function createProduct()
    {
        $this->validate();

        Product::create([
            'product_name' => $this->product_name,
            'product_title' => $this->product_title,
            'product_description' => $this->product_description,
            'category_id' => $this->category_id,
            'tags' => $this->tags,
            'size' => $this->size,
            'weight' => $this->weight,
            'sku' => $this->sku,
            'colour' => $this->colour,
        ]);

        $this->reset();

        return $this->dispatch('notify', "Product created successfully", 'Success', 'success');
    }

    public function render()
    {
        $categories = Category::get();

        return view('livewire.admin.product-create', [
            'categories'=> $categories,
        ])->layout('layout.admin');
    }

}
