<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountingAccountsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $accountingAccounts = [
            ['name' => 'Caja', 'code' => '1001'],
            ['name' => 'Bancos', 'code' => '1002'],
            ['name' => 'Clientes', 'code' => '1101'],
            ['name' => 'Proveedores', 'code' => '2101'],
            ['name' => 'Inventarios', 'code' => '1201'],
            ['name' => 'Activos Fijos', 'code' => '1301'],
            ['name' => 'Capital Social', 'code' => '3001'],
            ['name' => 'Utilidades Retenidas', 'code' => '3101'],
            ['name' => 'Ingresos por Ventas', 'code' => '4001'],
            ['name' => 'Gastos de Operación', 'code' => '5001'],
            ['name' => 'Gastos Financieros', 'code' => '5101'],
            ['name' => 'Impuestos por Pagar', 'code' => '6001'],
            ['name' => 'Provisión de Impuestos', 'code' => '6101'],
            ['name' => 'Gastos Administrativos', 'code' => '5201'],
            ['name' => 'Gastos de Ventas', 'code' => '5301']
        ];
        $now = Carbon::now();
        $accountingAccountsWithData = array_map(function ($account) use ($now) {
            return [
                'name' => $account['name'],
                'code' => $account['code'],
                'status' => 'active',
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }, $accountingAccounts);
        DB::table('accounting_accounts')->insert($accountingAccountsWithData);
    }
}
