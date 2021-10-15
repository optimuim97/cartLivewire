<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductContainer extends Component
{
    public function render()
    {
        return view('livewire.product-container', ['products'=>Product::all()]);
    }
}
