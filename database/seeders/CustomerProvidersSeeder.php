<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerProvidersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert customer and provider data relation with all tables seeder
        $customerProviders = [
            // Provider 1: Medical Supplier
            [
                'rut' => '76.123.456-7',
                'business_name' => 'MedSupplies S.A.',
                'business_activity_id' => 1, // e.g., "Servicios Médicos"
                'address' => 'Av. Apoquindo 1234',
                'city_id' => 1, // e.g., "Santiago"
                'commune_id' => 1, // e.g., "Las Condes"
                'phone' => '+56212345678',
                'email' => 'contacto@medsupplies.cl',
                'contact' => 'Juan Pérez',
                'paternal_surname' => null,
                'maternal_surname' => null,
                'first_names' => null,
                'job_title_id' => null,
                'salesperson_id' => null,
                'buyer_id' => null,
                'sales_account_id' => null,
                'client_account_id' => null,
                'price_list_id' => null,
                'collector_id' => null,
                'manages_sales_credit' => false,
                'sales_credit_amount' => null,
                'enables_sales_condition' => false,
                'payment_condition_id' => null,
                'installment_count' => null,
                'credit_days' => null,
                'purchase_concept_id' => 1, // e.g., "Arriendos"
                'supplier_account_id' => 1, // e.g., "4.01.03.11"
                'business_unit_id' => 1, // e.g., "Diagnósticos Médicos"
                'honorary_account_id' => null,
                'bank_id' => 1, // e.g., "Banco de Chile"
                'bank_account_type_id' => 1, // e.g., "Cuenta Corriente"
                'bank_account_number' => '1234567890',
                'is_client' => false,
                'is_provider' => true,
                'is_employee' => false,
                'is_honorary' => false,
            ],
            // Provider 2: Equipment Supplier
            [
                'rut' => '77.987.654-3',
                'business_name' => 'Equipos Médicos Ltda.',
                'business_activity_id' => 2, // e.g., "Venta de Equipos"
                'address' => 'Calle San Martín 567',
                'city_id' => 1,
                'commune_id' => 2, // e.g., "Providencia"
                'phone' => '+56298765432',
                'email' => 'ventas@equiposmedicos.cl',
                'contact' => 'María González',
                'paternal_surname' => null,
                'maternal_surname' => null,
                'first_names' => null,
                'job_title_id' => null,
                'salesperson_id' => null,
                'buyer_id' => null,
                'sales_account_id' => null,
                'client_account_id' => null,
                'price_list_id' => null,
                'collector_id' => null,
                'manages_sales_credit' => false,
                'sales_credit_amount' => null,
                'enables_sales_condition' => false,
                'payment_condition_id' => null,
                'installment_count' => null,
                'credit_days' => null,
                'purchase_concept_id' => 2, // e.g., "Equipos"
                'supplier_account_id' => 2, // e.g., "4.02.01.12"
                'business_unit_id' => 1,
                'honorary_account_id' => null,
                'bank_id' => 2, // e.g., "Banco Santander Chile"
                'bank_account_type_id' => 1,
                'bank_account_number' => '9876543210',
                'is_client' => false,
                'is_provider' => true,
                'is_employee' => false,
                'is_honorary' => false,
            ],
            // Client 1: Corporate Client
            [
                'rut' => '78.456.789-0',
                'business_name' => 'Clínica Salud Integral',
                'business_activity_id' => 1,
                'address' => 'Av. Providencia 2000',
                'city_id' => 1,
                'commune_id' => 2,
                'phone' => '+56234567890',
                'email' => 'compras@clinicasalud.cl',
                'contact' => 'Ana López',
                'paternal_surname' => null,
                'maternal_surname' => null,
                'first_names' => null,
                'job_title_id' => null,
                'salesperson_id' => null,
                'buyer_id' => null,
                'sales_account_id' => 3, // e.g., "4.03.01.13"
                'client_account_id' => 4, // e.g., "4.03.01.14"
                'price_list_id' => 1, // e.g., "Lista Estándar"
                'collector_id' => null,
                'manages_sales_credit' => true,
                'sales_credit_amount' => 1000000.00,
                'enables_sales_condition' => true,
                'payment_condition_id' => 1, // e.g., "Crédito 30 días"
                'installment_count' => 3,
                'credit_days' => 30,
                'purchase_concept_id' => null,
                'supplier_account_id' => null,
                'business_unit_id' => null,
                'honorary_account_id' => null,
                'bank_id' => 3, // e.g., "Banco Bice"
                'bank_account_type_id' => 2, // e.g., "Cuenta de Ahorro"
                'bank_account_number' => '4567891234',
                'is_client' => true,
                'is_provider' => false,
                'is_employee' => false,
                'is_honorary' => false,
            ],
            // Client 2: Individual Client
            [
                'rut' => '18.765.432-1',
                'business_name' => 'Empresa de Salud Spa',
                'business_activity_id' => 1,
                'address' => 'Calle Los Alamos 789',
                'city_id' => 1,
                'commune_id' => 3, // e.g., "Ñuñoa"
                'phone' => '+56987654321',
                'email' => 'juan.silva@gmail.com',
                'contact' => 'Juan Silva',
                'paternal_surname' => 'Silva',
                'maternal_surname' => 'Rodríguez',
                'first_names' => 'Juan Ignacio',
                'job_title_id' => null,
                'salesperson_id' => null,
                'buyer_id' => null,
                'sales_account_id' => 3,
                'client_account_id' => 4,
                'price_list_id' => 1,
                'collector_id' => null,
                'manages_sales_credit' => false,
                'sales_credit_amount' => null,
                'enables_sales_condition' => false,
                'payment_condition_id' => null,
                'installment_count' => null,
                'credit_days' => null,
                'purchase_concept_id' => null,
                'supplier_account_id' => null,
                'business_unit_id' => null,
                'honorary_account_id' => null,
                'bank_id' => 4, // e.g., "BancoEstado"
                'bank_account_type_id' => 4, // e.g., "Cuenta RUT"
                'bank_account_number' => '18765432',
                'is_client' => true,
                'is_provider' => false,
                'is_employee' => false,
                'is_honorary' => false,
            ],
        ];

        $now = now();
        $customerProvidersWithTimestamps = array_map(function ($item) use ($now) {
            $item['created_at'] = $now;
            $item['updated_at'] = $now;
            return $item;
        }, $customerProviders);

        DB::table('customer_providers')->insert($customerProvidersWithTimestamps);
    }
}
