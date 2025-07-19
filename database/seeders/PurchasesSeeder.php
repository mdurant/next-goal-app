<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PurchasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        $purchases = [
            [
                'customer_providers_id' => 1, // Ejemplo: MedSupplies S.A.
                'purchase_date' => '2024-06-01',
                'folio' => 'F001-0001',
                'period_book' => '2024-06-01',
                'glosa' => 'Compra de insumos médicos',
                'purchase_type_id' => 1, // Ejemplo: Factura
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'customer_providers_id' => 2, // Ejemplo: Equipos Médicos Ltda.
                'purchase_date' => '2024-06-03',
                'folio' => 'F001-0002',
                'period_book' => '2024-06-01',
                'glosa' => 'Adquisición de equipo de rayos X',
                'purchase_type_id' => 2, // Ejemplo: Boleta
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'customer_providers_id' => 1,
                'purchase_date' => '2024-06-05',
                'folio' => 'F001-0003',
                'period_book' => '2024-06-01',
                'glosa' => 'Compra de insumos médicos',
                'purchase_type_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];
        DB::table('purchases')->insert($purchases);

    }
}
