<?php

namespace App\Livewire\Client\Footer;

use Livewire\Component;

class Footer extends Component{
    public function render()
    {
        return view('livewire.client.footer.footer')->layout('layouts.client.app');
    }
}
