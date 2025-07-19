<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentConditionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $paymentConditions = [
            ['name' => 'Contado', 'status' => 'active'],
            ['name' => 'Crédito 30 días', 'status' => 'active'],
            ['name' => 'Crédito 60 días', 'status' => 'active'],
            ['name' => 'Crédito 90 días', 'status' => 'active'],
            ['name' => 'Crédito 120 días', 'status' => 'active'],
            ['name' => 'Pago anticipado', 'status' => 'active'],
            ['name' => 'Pago parcial', 'status' => 'active'],
        ];

        $now = now();
        $paymentConditionsWithData = array_map(function ($condition) use ($now) {
            return [
                'name' => $condition['name'],
                'status' => $condition['status'],
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }, $paymentConditions);

        DB::table('payment_conditions')->insert($paymentConditionsWithData);
    }
}
