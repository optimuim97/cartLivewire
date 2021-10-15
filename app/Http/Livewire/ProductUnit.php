<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Cart;

class ProductUnit extends Component
{
    public $product;
    public function mount($product){
        $this->product = $product;
    }

    public function addItem($id){
        $product = Product::where('id', $id)->first(); 
        // dd($product);
        Cart::add(
            ['id' => $product->id, 'name' => $product->title, 'qty' => 1, 'price' => floatval($product->price), 'weight' => 550]
        );

        $this->emit('reload-navbar');
    }

    public function render()
    {
        return view('livewire.product-unit');
    }
}
