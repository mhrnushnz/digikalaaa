<?php

namespace App\Livewire\Client\Home\Slider;

use Livewire\Component;

class Index extends Component
{


    public function placeholder(){
        return view('layouts.client.placeholder.first-page.slider-selecton');
    }

    public function render(){
        sleep(1);
        return view('livewire.client.home.slider.index');
    }
}
