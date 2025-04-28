<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class CandidateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('candidates')->insert([
            [
                'name' => 'Alice Johnson',
                'email' => 'alice.johnson@example.com',
                'phone' => '123-456-7890',
                'resume_summary' => 'Experienced marketing specialist with a background in digital campaigns and brand management.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bob Smith',
                'email' => 'bob.smith@example.com',
                'phone' => '987-654-3210',
                'resume_summary' => 'Software engineer passionate about backend development and scalable architecture.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Carol Davis',
                'email' => 'carol.davis@example.com',
                'phone' => '555-123-4567',
                'resume_summary' => 'Graphic designer with 7 years of experience in creating branding and marketing materials.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'David Wilson',
                'email' => 'david.wilson@example.com',
                'phone' => null,
                'resume_summary' => 'Operations manager skilled in logistics, team leadership, and process improvement.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Eve Martinez',
                'email' => 'eve.martinez@example.com',
                'phone' => '321-654-0987',
                'resume_summary' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
