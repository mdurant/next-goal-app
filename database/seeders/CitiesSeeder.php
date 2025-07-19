<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            ['name' => 'Santiago'],
            ['name' => 'Valparaíso'],
            ['name' => 'Concepción'],
            ['name' => 'La Serena'],
            ['name' => 'Antofagasta'],
            ['name' => 'Temuco'],
            ['name' => 'Puerto Montt'],
            ['name' => 'Rancagua'],
            ['name' => 'Talca'],
            ['name' => 'Iquique'],
            ['name' => 'Arica'],
            ['name' => 'Coquimbo'],
            ['name' => 'Osorno'],
            ['name' => 'Chillán'],
            ['name' => 'Calama'],
            ['name' => 'Punta Arenas'],
            ['name' => 'Copiapó'],
            ['name' => 'Los Ángeles'],
            ['name' => 'Curicó'],
            ['name' => 'San Antonio'],
            ['name' => 'Quillota'],
            ['name' => 'Melipilla'],
            ['name' => 'San Fernando'],
            ['name' => 'Villa Alemana'],
            ['name' => 'La Calera'],
        ];

        $now = Carbon::now();
        $citiesWithData = array_map(function ($city) use ($now) {
            return [
                'name' => $city['name'],
                'status' => 'active',
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }, $cities);
        DB::table('cities')->insert($citiesWithData);
    }
}
