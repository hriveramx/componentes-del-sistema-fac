<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Solicitud;

class Solicitudes extends Component
{
    public function render()
    {
        $solicitudes = Solicitud::All();
        return view('livewire.solicitudes',compact('solicitudes'));
    }
}
