<?php

namespace App\Livewire\Client\Home\Slider;

use Livewire\Component;

class Index extends Component
{
    public function placeholder(){
        //return view('livewire.client.placeholder.first-pag.slider-selecton');
    }
    public function render()
    {
        sleep(1);
        return view('livewire.client.home.slider.index');
    }
}
