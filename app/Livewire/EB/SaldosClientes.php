<?php

namespace App\Livewire\EB;

use App\Models\SaldosCliente;
use Livewire\Component;

class SaldosClientes extends Component
{
    public function render()
    {
        $saldosClientes = SaldosCliente::All();
        return view('livewire.EB.saldos-clientes', compact('saldosClientes'));
    }
}
