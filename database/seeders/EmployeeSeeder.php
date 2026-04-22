<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("employees")->insert([
            "firstName"=>"Ali",
            "lastName"=>"Rezaie",
            "tazkira_number"=>"120140289453",
            "email"=>"ali@gmail.com",
            "phone"=>"07985674533",
            "designation_id"=>2,
        ]);
    }
}
