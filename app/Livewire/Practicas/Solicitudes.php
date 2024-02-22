<?php

namespace App\Livewire\Practicas;

use Livewire\Component;
use App\Models\Solicitud;

class Solicitudes extends Component
{
    public function render()
    {
        $solicitudes = Solicitud::All();
        return view('livewire.Practicas.solicitudes',compact('solicitudes'));
    }
}
