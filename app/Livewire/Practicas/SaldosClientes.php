<?php

namespace App\Livewire\Practicas;

use Livewire\Component;
use App\Models\SaldosCliente;

class SaldosClientes extends Component
{
    public function render()
    {   $saldosC = SaldosCliente::All();
        return view('livewire.saldos-clientes',compact('saldosC'));
    }
}
