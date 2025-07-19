<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PriceListsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // with PriceListsMigration
        $priceLists = [
            ['name' => 'Lista de Precios Básica', 'status' => 'active'],
            ['name' => 'Lista de Precios Premium', 'status' => 'active'],
            ['name' => 'Lista de Precios Corporativa', 'status' => 'active'],
            ['name' => 'Lista de Precios Estándar', 'status' => 'active'],
            ['name' => 'Lista de Precios Especial', 'status' => 'active'],
            ['name' => 'Lista de Precios Internacional', 'status' => 'active'],
            ['name' => 'Lista de Precios Local', 'status' => 'active'],
            ['name' => 'Lista de Precios Temporal', 'status' => 'active'],
            ['name' => 'Lista de Precios Promocional', 'status' => 'active'],
            ['name' => 'Lista de Precios Anual', 'status' => 'active'],
        ];
        $now = now();
        $priceListsWithData = array_map(function ($list) use ($now) {
            return [
                'name' => $list['name'],
                'status' => $list['status'],
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }, $priceLists);

        DB::table('price_lists')->insert($priceListsWithData);
    }
}
