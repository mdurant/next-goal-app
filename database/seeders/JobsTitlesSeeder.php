<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobsTitlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        #Based with Migration JobsTitles
        $jobTitles = [
            ['name' => 'Software Engineer'],
            ['name' => 'Data Scientist'],
            ['name' => 'Product Manager'],
            ['name' => 'UX/UI Designer'],
            ['name' => 'DevOps Engineer'],
            ['name' => 'Quality Assurance Engineer'],
            ['name' => 'Systems Analyst'],
            ['name' => 'Network Administrator'],
            ['name' => 'Database Administrator'],
            ['name' => 'Technical Support Specialist'],
        ];
        $now = Carbon::now();
        $jobTitlesWithData = array_map(function ($jobTitle) use ($now) {
            return [
                'name' => $jobTitle['name'],
                'status' => 'active',
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }, $jobTitles);

        DB::table('jobs_titles')->insert($jobTitlesWithData);

    }
}
