<?php

namespace App\Livewire\EB;

use Livewire\Component;
use App\Models\moduloEB;

class ControlEb1 extends Component
{
    public function render()
    {
        $datos = moduloEB::All();
        return view('livewire.EB.control-eb1',compact('datos'));
    }
}
