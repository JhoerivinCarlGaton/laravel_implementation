<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('resumes')->insert([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'address' => '123 Main St',
            'phone' => '123-456-7890',
            'education' => 'Bachelor of Science in Computer Science',
            'experience' => '3 years at Company XYZ'
        ]);
    }
}
