<?php

namespace App\Livewire\Practicas;

use Livewire\Component;
use App\Models\User;

class Usuarios extends Component
{
    public function render()
    {

        $usuarios = User::All();
        return view('livewire.Practicas.usuarios',compact('usuarios'));
    }
}
