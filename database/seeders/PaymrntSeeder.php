<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymrntSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("payments")->insert([
            "payment_date"=>"2026/1/12",
            "payment_method"=>"money",
            "employee_id"=>1,
            "payroll_id"=>1,
        ]);
    }
}
