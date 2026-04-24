<?php

namespace App\Livewire\Payment;

use App\Models\Payment;
use Livewire\Component;

class Index extends Component
{
     public $payment;
    public function mount(){
        $payment = Payment::all();
    }
    public function render()
    {
        return view('livewire.payment.index');
    }
}
