<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    //
    protected $fillable = [
        "gross_salary",
        "payroll_id",
        "employee_id"
    ];

    
    public function employees(){
        return $this->belongsTo(Employee::class);
    }

     public function payrolls(){
        return $this->belongsTo(Payroll::class);
    }

}
