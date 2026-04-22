<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $designations=[
            [
                "name"=>"Manager",
                "department_id"=>1
            ],
            [
                "name"=>"MaleInstructor",
                "department_id"=>1
            ],
            [
                "name"=>"FemaleInstructor",
                "department_id"=>1
            ]

        ];
        DB::table("designations")->insert($designations);
    }
}
