<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $companies = [
            [
                'name' => 'Salud Integral S.A.',
                'email' => 'contacto@saludintegral.cl',
                'phone' => '+56223456789',
                'address' => 'Av. Providencia 1234, Santiago',
                'logo' => 'logos/salud_integral.png',
                'website' => 'https://www.saludintegral.cl',
                'rut' => '76.543.210-9',
                'country' => 'CL',
                'currency' => 'CLP',
                'language' => 'es',
                'timezone' => 'America/Santiago',
                'commune_id' => 1, // Ejemplo: Las Condes
                'city_id' => 1,    // Ejemplo: Santiago
                'business_activity_id' => 1, // Ejemplo: Servicios Médicos
                'is_active' => true,
                'legal_representation' => 'María Paz González',
                'email_legal_representation' => 'mpgonzalez@saludintegral.cl',
                'email_dte' => 'facturacion@saludintegral.cl',
                'is_demo' => false,
            ],
            [
                'name' => 'Equipos Médicos Chile Ltda.',
                'email' => 'info@equiposmedicoschile.cl',
                'phone' => '+56229876543',
                'address' => 'Calle San Martín 456, Santiago',
                'logo' => 'logos/equipos_medicos.png',
                'website' => 'https://www.equiposmedicoschile.cl',
                'rut' => '77.654.321-0',
                'country' => 'CL',
                'currency' => 'CLP',
                'language' => 'es',
                'timezone' => 'America/Santiago',
                'commune_id' => 2, // Ejemplo: Providencia
                'city_id' => 1,    // Ejemplo: Santiago
                'business_activity_id' => 2, // Ejemplo: Venta de Equipos
                'is_active' => true,
                'legal_representation' => 'Carlos Soto',
                'email_legal_representation' => 'csoto@equiposmedicoschile.cl',
                'email_dte' => 'facturas@equiposmedicoschile.cl',
                'is_demo' => false,
            ],
            [
                'name' => 'Demo Company',
                'email' => 'demo@company.cl',
                'phone' => '+56229876543',
                'address' => 'Calle 4 N° 432, Providencia, Santiago',
                'logo' => 'logos/company.png',
                'website' => 'https://www.company.cl',
                'rut' => '88.666.900-1',
                'country' => 'CL',
                'currency' => 'CLP',
                'language' => 'es',
                'timezone' => 'America/Santiago',
                'commune_id' => 2,
                'city_id' => 1,
                'business_activity_id' => 2,
                'is_active' => true,
                'legal_representation' => 'Fernanda Hidalgo',
                'email_legal_representation' => 'fhidalgo@company.cl',
                'email_dte' => 'dte@company.cl',
                'is_demo' => true,
            ],
        ];

        $now = Carbon::now();

        $companiesWithTimestamps = array_map(function ($company) use ($now) {
            $company['created_at'] = $now;
            $company['updated_at'] = $now;
            return $company;
        }, $companies);

        DB::table('companies')->insert($companiesWithTimestamps);

    }
}
