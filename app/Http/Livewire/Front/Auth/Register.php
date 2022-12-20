<?php

namespace App\Http\Livewire\Front\Auth;

use Livewire\Component;

class Register extends Component
{
    public $name;
    public $email;
    public $alamat;
    public $place_of_birth;
    public $date_of_birth;
    public $jenis_kelamin;
    public $password;
    public $password_validator;
    public $province;
    public $regency;
    public $district,$village;

    public function simpan()
    {
        # code...
    }

    public function render()
    {
        return view('livewire.front.auth.register');
    }
}
