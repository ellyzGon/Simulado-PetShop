<?php

namespace App\Livewire;

use Livewire\Component;

class LoginCreate extends Component
{
    public $email;
    public $senha;
    
    public function render()
    {
        return view('livewire.login-create');
    }
}
