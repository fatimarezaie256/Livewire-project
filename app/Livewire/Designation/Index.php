<?php

namespace App\Livewire\Designation;

use App\Models\Designation;
use Livewire\Component;

class Index extends Component
{
     public $designation;
    public function mount(){
        $designation = Designation::all();
    }
    public function render()
    {
        return view('livewire.designation.index');
    }
}
