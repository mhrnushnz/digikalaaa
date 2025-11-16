<?php

namespace App\Livewire\Client\Product;
use App\Models\Product;
use Livewire\Component;

class Index extends Component{
    public $products;


    public function mount($p_code){

        $this->products = Product::query()->where('p_code', $p_code)
        ->select('id', 'name', 'p_code', 'price', 'discount', 'discount_duration','category_id', 'stock', 'seller_id','featured',)
        ->with('Images')->firstOrFail();

    }

    public function render(){
        return view('livewire.client.product.index')->layout('layouts.client.app');
    }
}
