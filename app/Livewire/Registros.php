<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Registro;

class Registros extends Component
{
    public function render()
    {
        $registros = Registro::All();
        return view('livewire.registros',compact('registros'));
    }
}
