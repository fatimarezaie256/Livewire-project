<?php

use App\Http\Controllers\schoolController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
Route::prefix('dashboard')->middleware(['auth', 'verified'])->group(function (){
//    Route::view('/','dashboard');
   Route::view('profile','profile');
   Route::view('employee','livewire.employee.index');
   Route::view('contract','livewire.contract.index');
   Route::get("school",[schoolController::class,'index'])->name('school.index');
   Route::view('department','livewire.department.index');
   Route::view('designation','livewire.designation.index');
   Route::view('salary','livewire.salary.index');
   Route::view('payment','livewire.payment.index');
   Route::view('payroll','livewire.payroll.index');
});
