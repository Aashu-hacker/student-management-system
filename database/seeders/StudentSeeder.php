<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    public function run()
    {
        DB::table('students')->insert([
            ['student_name' => 'Alice Brown', 'class_teacher_id' => 1, 'class' => '5th Grade', 'admission_date' => '2023-08-01', 'yearly_fees' => 500.00],
            ['student_name' => 'Bob Green', 'class_teacher_id' => 2, 'class' => '6th Grade', 'admission_date' => '2023-08-01', 'yearly_fees' => 600.00],
        ]);
    }
};

