<?php

namespace App\Livewire\Client\Home\Story;

use Livewire\Component;

class Index extends Component{
    public function placeholder(){
        //return view('livewire.client.placeholder.first-pag.stories-selecton');
    }
    public function render(){
        sleep(1);
        return view('livewire.client.home.story.index');
    }
}
