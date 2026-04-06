<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    protected $fillable = [
        "payment_method",
        "employee_id",
        "payroll_id",
    ];

    
    public function employees(){
        return $this->belongsTo(Employee::class);
    }

    
    public function payrolls(){
        return $this->belongsTo(Payroll::class);
    }
}
