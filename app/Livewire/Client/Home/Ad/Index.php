<?php

namespace App\Livewire\Client\Home\Ad;

use Livewire\Component;

class Index extends Component{
    public function placeholder(){
        //return view('livewire.client.placeholder.first-pag.ad-selecton');
    }


    public function render(){
        sleep(1);
        return view('livewire.client.home.ad.index');
    }
}
