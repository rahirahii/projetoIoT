<?php

namespace App\Livewire\Auth\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:6'
    ];

    protected $messages = [
        'email.required' => 'O campo email é obrigatório',
        'email.email' => 'O campo email está incorreto',
        'password.required' => 'O campo senha é obrigatório',
        'password.min' => 'O número minimo de caracteres no campo senha é 6'
    ];

    public function  login()
    {
        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            session()->regenerate();

            return redirect()->route('dashboard');
        }
        session()->flash('error', ' Email ou senha incorretos');
    }

    public function render()
    {
        Auth::logout();
        return view('livewire..auth.auth.login');
    }
}
