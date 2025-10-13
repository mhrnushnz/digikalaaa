<?php
namespace App\Livewire\Client\Auth;
use App\Repositories\client\ClientAuthRepository;
use Laravel\Socialite\Facades\Socialite;
use Livewire\Component;

class Index extends Component{

    public function redirectToProvider(){
        return Socialite::driver('google')->redirect();    //این میره وصل میشه به گوگل
    }


    public function handelProviderCallback(){
        $repository = new ClientAuthRepository();     //به روش های تابع boot نمی تونیم از ریپازیتوری استفاده کنیم برای همین اینجوری از همون ریپازیتوری شی میسازیم!
        $gmailUser = Socialite::driver('google')->stateless()->user();    //کاربر رو میسازه اکانت گوگلش رو
        $repository->CheckUser($gmailUser);
        return redirect()->route('home');
    }


    public function render(){
        return view('livewire.client.auth.index')->layout('layouts.client.app.auth');
    }
}
