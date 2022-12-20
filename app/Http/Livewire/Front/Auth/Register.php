<?php

namespace App\Http\Livewire\Front\Auth;

use Livewire\Component;

class Register extends Component
{
    public $name, $email, $password, $password_confirmation;
    public $place_of_birth, $date_of_birth, $province_id;
    public $regency_id, $district_id;

    public function register()
    {
        // code
    }

    public function render()
    {
        return view('livewire.front.auth.register');
    }
}
