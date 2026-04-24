<?php

namespace App\Livewire\Department;

use App\Models\Department;
use Livewire\Component;

class Index extends Component
{
     public $departments;
    public function mount(){
        $departments = Department::all();
    }
    public function render()
    {
        return view('livewire.department.index');
    }
}
