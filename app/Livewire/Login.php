<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class Login extends Component
{
    public function render()
    {
        return view('livewire.login')->title('Login');
    }
}
