<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusinessActivitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $activities = [
            ['name' => 'Servicios Médicos'],
            ['name' => 'Comercio Minorista'],
            ['name' => 'Educación'],
            ['name' => 'Tecnología de la Información'],
            ['name' => 'Construcción'],
        ];
        $now = Carbon::now();
        $activitiesWithData = array_map(function ($activity) use ($now) {
            return [
                'name' => $activity['name'],
                'status' => 'active',
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }, $activities);
        DB::table('business_activities')->insert($activitiesWithData);
    }
}
