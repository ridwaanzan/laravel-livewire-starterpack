<?php

namespace App\Http\Livewire\Front\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    // variable data login
    public $email;
    public $password;
    public $generals;

    public function login()
    {
        $this->validate([
            'email'    => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            // redirect admin.
            return redirect()->to('admin');
        } else {
            // return custom error login.
            return $this->addError('generals.error', 'Oops! Please check your credentials.');
        }
    }

    public function render()
    {
        return view('livewire.front.auth.login');
    }
}
