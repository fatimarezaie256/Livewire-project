<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payroll extends Model
{
    //
    protected $fillable = [
        "year",
        "month",
        "school_id"
    ];

    
    public function scholl(){
        return $this->belongsTo(School::class);
    }

    
    public function salaries(){
        return $this->hasMany(Employee::class);
}

      
    public function payments(){
        return $this->hasMany(Payment::class);
    }
}
