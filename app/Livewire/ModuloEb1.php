<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\moduloEB;
class ModuloEb1 extends Component
{
    public function render()
    {
        $datos = moduloEB::All();
        return view('livewire.modulo-eb1',compact('datos'));
    }
}
