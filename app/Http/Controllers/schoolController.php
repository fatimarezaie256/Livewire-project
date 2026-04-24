<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;

class schoolController extends Controller
{
    //
    public function index(){
       $school = School::all();
       return $school;
    }
}
