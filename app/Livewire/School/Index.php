<?php

namespace App\Livewire\School;

use App\Models\School;
use Livewire\Component;

class Index extends Component
{

    public $schools;
    public function mount(){
        $schools = School::all();
    }
    public function render()
    {
        
        return view('livewire.school.index');
    }
}
