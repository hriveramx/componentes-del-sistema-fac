<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class Usuarios extends Component
{
    public function render()
    {

        $usuarios = User::All();
        return view('livewire.usuarios',compact('usuarios'));
    }
}
