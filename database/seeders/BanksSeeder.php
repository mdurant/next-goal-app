<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BanksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $banks = [
            ['code' => '046', 'name' => 'Abn Amro Bank (Chile)'],
            ['code' => '028', 'name' => 'Banco Bice'],
            ['code' => '704', 'name' => 'Banco Conosur'],
            ['code' => '055', 'name' => 'Banco Consorcio'],
            ['code' => '027', 'name' => 'Banco Corpbanca'],
            ['code' => '001', 'name' => 'Banco de Chile'],
            ['code' => '016', 'name' => 'Banco de Crédito e Inversiones'],
            ['code' => '043', 'name' => 'Banco de la Nación Argentina'],
            ['code' => '507', 'name' => 'Banco del Desarrollo'],
            ['code' => '012', 'name' => 'Banco del Estado de Chile'],
            ['code' => '017', 'name' => 'Banco do Brasil S.A.'],
            ['code' => '051', 'name' => 'Banco Falabella'],
            ['code' => '009', 'name' => 'Banco Internacional'],
            ['code' => '057', 'name' => 'Banco Paris'],
            ['code' => '056', 'name' => 'Banco Penta'],
            ['code' => '053', 'name' => 'Banco Ripley'],
            ['code' => '037', 'name' => 'Banco Santander Chile'],
            ['code' => '049', 'name' => 'Banco Security'],
            ['code' => '504', 'name' => 'BBVA Banco Bhif'],
            ['code' => '052', 'name' => 'Deutsche Bank (Chile)'],
            ['code' => '011', 'name' => 'Dresdner Bank Leteinamerika'],
            ['code' => '031', 'name' => 'HSBC Bank Chile'],
            ['code' => '039', 'name' => 'Itaú Corpbanca'],
            ['code' => '041', 'name' => 'JP Morgan Chase Bank'],
            ['code' => '054', 'name' => 'Rabobank Chile'],
            ['code' => '014', 'name' => 'Scotiabank Chile'],
            ['code' => '045', 'name' => 'The Bank Of Tokio - Mitsubishi'],
            ['code' => '672', 'name' => 'Banco Coopeuch'],
            ['code' => '730', 'name' => 'Tenpo'],
            ['code' => '732', 'name' => 'Tapp Caja Los Andes'],
            ['code' => '875', 'name' => 'MercadoPago S.A.'],
            ['code' => '738', 'name' => 'Global Card S.A.'],
            ['code' => '729', 'name' => 'Prepago Los Héroes'],
        ];
        $now = \Carbon\Carbon::now();
        $banksWithTimestamps = array_map(function ($bank) use ($now) {
            $bank['created_at'] = $now;
            $bank['updated_at'] = $now;
            return $bank;
        }, $banks);

        DB::table('banks')->insert($banksWithTimestamps);
    }
}
