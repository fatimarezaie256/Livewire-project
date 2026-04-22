<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("contracts")->insert([
            "designation_id"=>2,
            "employee_id"=>1,
            "start_date"=>"4/21/2026",
            "end_date"=>"4/21/2027",
        ]);
    }
}
