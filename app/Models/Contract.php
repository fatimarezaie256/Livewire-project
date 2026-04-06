<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    //
    protected $fillable = [
        "designation_id",
        "employee_id",
        "start_date",
        "end_date",
        "hire_type",
    ];

    public function employees(){
        return $this->belongsTo(Employee::class);
    }

    
    public function designations(){
        return $this->belongsTo(Designation::class);
    }
}
