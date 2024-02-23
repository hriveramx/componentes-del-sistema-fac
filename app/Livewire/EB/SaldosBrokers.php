<?php

namespace App\Livewire\EB;

use App\Models\SaldosBroker;
use Livewire\Component;

class SaldosBrokers extends Component
{
    public function render()
    {
        $saldosBrokers = SaldosBroker::All();
        return view('livewire.EB.saldos-brokers',compact('saldosBrokers'));
    }
}
