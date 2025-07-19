<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComunesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $communes = [
            ['name' => 'Santiago', 'city_id' => 1],
            ['name' => 'Providencia', 'city_id' => 1],
            ['name' => 'Las Condes', 'city_id' => 1],
            ['name' => 'Ñuñoa', 'city_id' => 1],
            ['name' => 'La Florida', 'city_id' => 1],
            ['name' => 'Maipú', 'city_id' => 1],
            ['name' => 'Puente Alto', 'city_id' => 1],
            ['name' => 'San Bernardo', 'city_id' => 1],
            ['name' => 'Quilicura', 'city_id' => 1],
            ['name' => 'Pudahuel', 'city_id' => 1],
        ];
        $now = Carbon::now();
        $comunesWithData = array_map(function ($comune) use ($now) {
            return [
                'name' => $comune['name'],
                'city_id' => $comune['city_id'],
                'status' => 'active',
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }, $communes);
        DB::table('comunes')->insert($comunesWithData);
    }
}
