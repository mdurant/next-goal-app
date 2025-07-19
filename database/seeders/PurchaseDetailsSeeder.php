<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PurchaseDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        $purchaseDetails = [
            [
                'purchase_id' => 1, // Debe existir en purchases
                'purchase_concept_id' => 1, // Debe existir en purchase_concepts
                'quantity' => 10,
                'unit_measure' => 'unidad',
                'unit_price' => 15000.00,
                'discount_percent' => 10.00,
                'discount_amount' => 15000.00,
                'total' => 135000.00,
                'net_total' => 113445.38,
                'exempt_amount' => 0.00,
                'iva_percent' => 19.00,
                'iva_amount' => 21554.62,
                'document_total' => 135000.00,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'purchase_id' => 1,
                'purchase_concept_id' => 2,
                'quantity' => 5,
                'unit_measure' => 'caja',
                'unit_price' => 22000.00,
                'discount_percent' => 0.00,
                'discount_amount' => 0.00,
                'total' => 110000.00,
                'net_total' => 92436.97,
                'exempt_amount' => 0.00,
                'iva_percent' => 19.00,
                'iva_amount' => 17563.03,
                'document_total' => 110000.00,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'purchase_id' => 2,
                'purchase_concept_id' => 1,
                'quantity' => 2,
                'unit_measure' => 'unidad',
                'unit_price' => 500000.00,
                'discount_percent' => 5.00,
                'discount_amount' => 50000.00,
                'total' => 950000.00,
                'net_total' => 798319.33,
                'exempt_amount' => 0.00,
                'iva_percent' => 19.00,
                'iva_amount' => 151680.67,
                'document_total' => 950000.00,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        DB::table('purchase_details')->insert($purchaseDetails);
    }
}
