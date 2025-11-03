<?php
namespace App\Livewire\Client\Home\Offers;
use App\Models\Product;
use Illuminate\Support\Carbon;
use Livewire\Component;

class Index extends Component{
    public $featuredproducts=[];
    public function mount(){

        $visitTime=Carbon::now();      //زمان حال رو میده و میریزه تو متغیر با تابع کربن!

        $this->featuredproducts=Product::query()->
        with('coverImage')->
        select('id','name','price','discount','p_code')->
        where('discount_duration','>',$visitTime)->
        where('featured',1)->get();
    }

    public function placeholder(){
        return view('layouts.client.placeholder.first-page.offers-selecton');
    }

    public function render(){
        sleep(1);
        return view('livewire.client.home.offers.index');
    }


}
