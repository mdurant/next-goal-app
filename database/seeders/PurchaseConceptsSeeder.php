<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PurchaseConceptsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $purchaseConcepts = [
            ['name' => 'Compra de Mercaderías', 'account_code' => 1],
            ['name' => 'Compra de Servicios', 'account_code' => 2],
            ['name' => 'Compra de Activos Fijos', 'account_code' => 1],
            ['name' => 'Compra de Materias Primas', 'account_code' => 1],
            ['name' => 'Compra de Bienes de Consumo', 'account_code' => 2],
            ['name' => 'Compra de Inventarios', 'account_code' => 2],
            ['name' => 'Compra de Suministros', 'account_code' => 2],
            ['name' => 'Compra de Servicios Profesionales', 'account_code' => 2],
            ['name' => 'Compra de Servicios de Mantenimiento', 'account_code' => 2],
            ['name' => 'Compra de Servicios de Publicidad', 'account_code' => 2],
            ['name' => 'Compra de Servicios de Transporte', 'account_code' => 2],
            ['name' => 'Compra de Servicios de Consultoría', 'account_code' => 2],
            ['name' => 'Compra de Servicios de Tecnología', 'account_code' => 2],
            ['name' => 'Compra de Servicios de Limpieza', 'account_code' => 2],
            ['name' => 'Compra de Servicios de Seguridad', 'account_code' => 2],
        ];

        $now = now();
        $purchaseConceptsWithData = array_map(function ($concept) use ($now) {
            return [
                'name' => $concept['name'],
                'account_code' => $concept['account_code'],
                'status' => 'active',
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }, $purchaseConcepts);

        DB::table('purchase_concepts')->insert($purchaseConceptsWithData);
    }
}
