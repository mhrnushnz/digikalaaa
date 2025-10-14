<?php
namespace App\Livewire\Client\Home\Offers;
use Livewire\Component;

class Index extends Component{
    public function placeholder(){
        return view('layouts.client.placeholder.first-page.offers-selecton');
    }

    public function render(){
        sleep(1);
        return view('livewire.client.home.offers.index');
    }
}
