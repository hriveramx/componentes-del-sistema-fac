<?php

namespace App\Livewire\EB;

use App\Models\SaldosCtas;
use Livewire\Component;

class SaldosCuentas extends Component
{
    public function render()
    {
        $saldosCuentas = SaldosCtas::All();
        return view('livewire.EB.saldos-cuentas',compact('saldosCuentas'));
    }
}
