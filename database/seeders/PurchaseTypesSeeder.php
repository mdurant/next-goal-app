<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PurchaseTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $purchaseTypes = [
            ['name' => 'Compra Nacional', 'description' => 'Compra de productos o servicios dentro del país', 'status' => 'active'],
            ['name' => 'Importación', 'description' => 'Compra de productos desde el extranjero', 'status' => 'active'],
            ['name' => 'Exportación', 'description' => 'Venta de productos al extranjero', 'status' => 'active'],
            ['name' => 'Servicios Profesionales', 'description' => 'Contratación de servicios profesionales', 'status' => 'active'],
            ['name' => 'Otros', 'description' => 'Tipos de compra no especificados anteriormente', 'status' => 'active'],
        ];

        foreach ($purchaseTypes as $type) {
            DB::table('purchase_types')->insert([
                'name' => $type['name'],
                'description' => $type['description'],
                'status' => $type['status'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
