<?php

namespace App\Livewire\Client\Home\Offers;

use Livewire\Component;

class Index extends Component{
    public function placeholder(){
        //return view('livewire.client.placeholder.first-pag.offers-selecton');
    }
    public function render(){
        sleep(1);
        return view('livewire.client.home.offers.index');
    }
}
