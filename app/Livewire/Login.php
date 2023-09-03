<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Livewire\Forms\LoginForm;

class Login extends Component
{
    public LoginForm $form;
    public function render()
    {
        return view('livewire.login')->title('Login');
    }

    public function authenticate(){
        //dd($this->form->password);
    }

    public function logout(){
        return redirect()->to('/');
    }
}
