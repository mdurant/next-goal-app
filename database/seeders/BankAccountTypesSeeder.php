<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BankAccountTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bankAccountTypes = [
            ['name' => 'Cuenta Corriente'],
            ['name' => 'Cuenta Vista/RUT'],
            ['name' => 'Cuenta de Ahorro'],
            ['name' => 'Cuenta de Ahorro a Plazo Fijo'],
        ];
        $now = \Carbon\Carbon::now();
        $accountTypesWithData = array_map(function ($type) use ($now) {
            return [
                'name' => $type['name'],
                'status' => 'active',
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }, $bankAccountTypes);

        DB::table('bank_account_types')->insert($accountTypesWithData);
    }
}
