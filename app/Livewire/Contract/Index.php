<?php

namespace App\Livewire\Contract;

use App\Models\Contract;
use Livewire\Component;

class Index extends Component
{
     public $contracts;
    public function mount(){
        $contracts = Contract::all();
    }
    public function render()
    {
        return view('livewire.contract.index');
    }
}
