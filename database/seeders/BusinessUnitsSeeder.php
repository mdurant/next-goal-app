<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusinessUnitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $businessUnits = [
            ['name' => 'Unidad de Ventas', 'status' => 'active'],
            ['name' => 'Unidad de Compras', 'status' => 'active'],
            ['name' => 'Unidad de Finanzas', 'status' => 'active'],
            ['name' => 'Unidad de Recursos Humanos', 'status' => 'active'],
            ['name' => 'Unidad de Marketing', 'status' => 'active'],
        ];

        $now = now();
        $unitsWithData = array_map(function ($unit) use ($now) {
            return [
                'name' => $unit['name'],
                'status' => $unit['status'],
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }, $businessUnits);

        DB::table('business_units')->insert($unitsWithData);
    }
}
