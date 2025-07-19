<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customer_providers', function (Blueprint $table) {
            $table->id();
            $table->string('rut', 20)->unique(); // Obligatorio, e.g., RUT in Chile
            $table->string('business_name', 255)->nullable(); // Razón Social
            $table->foreignId('business_activity_id')->nullable()->constrained('business_activities')->onDelete('set null'); // Giro
            $table->string('address', 255)->nullable(); // Dirección
            $table->foreignId('city_id')->nullable()->constrained('cities')->onDelete('set null'); // Ciudad
            $table->foreignId('commune_id')->nullable()->constrained('communes')->onDelete('set null'); // Comuna
            $table->string('phone', 20)->nullable(); // Teléfono
            $table->string('email', 255)->nullable(); // Email
            $table->string('contact', 255)->nullable(); // Contacto (name, email, or phone)
            $table->string('paternal_surname', 100)->nullable(); // Apellido Paterno
            $table->string('maternal_surname', 100)->nullable(); // Apellido Materno
            $table->string('first_names', 100)->nullable(); // Nombres
            $table->foreignId('job_title_id')->nullable()->constrained('jobs_titles')->onDelete('set null'); // Cargo
            $table->foreignId('salesperson_id')->nullable()->constrained('customer_providers')->onDelete('set null'); // Vendedor
            $table->foreignId('buyer_id')->nullable()->constrained('customer_providers')->onDelete('set null'); // Comprador
            $table->foreignId('sales_account_id')->nullable()->constrained('accounting_accounts')->onDelete('set null'); // CuentaVentas
            $table->foreignId('client_account_id')->nullable()->constrained('accounting_accounts')->onDelete('set null'); // CuentaClientes
            $table->foreignId('price_list_id')->nullable()->constrained('price_lists')->onDelete('set null'); // ListaPrecio
            $table->foreignId('collector_id')->nullable()->constrained('customer_providers')->onDelete('set null'); // Cobrador
            $table->boolean('manages_sales_credit')->default(false); // ManejaCreditoVentas (S/N)
            $table->decimal('sales_credit_amount', 10, 2)->nullable(); // MontoCreditoVentas
            $table->boolean('enables_sales_condition')->default(false); // HabilitaCondicionVenta (S/N)
            $table->foreignId('payment_condition_id')->nullable()->constrained('payment_conditions')->onDelete('set null'); // TipoCondicionVenta
            $table->integer('installment_count')->nullable(); // CantidadCuotas
            $table->integer('credit_days')->nullable(); // CantidadDias
            $table->foreignId('purchase_concept_id')->nullable()->constrained('purchase_concepts')->onDelete('set null'); // ConceptoCompras
            $table->foreignId('supplier_account_id')->nullable()->constrained('accounting_accounts')->onDelete('set null'); // CuentaProveedor
            $table->foreignId('business_unit_id')->nullable()->constrained('business_units')->onDelete('set null'); // UnidadNegocioCompras
            $table->foreignId('honorary_account_id')->nullable()->constrained('accounting_accounts')->onDelete('set null'); // CuentaHonorario
            $table->foreignId('bank_id')->nullable()->constrained('banks')->onDelete('set null'); // Banco
            $table->foreignId('bank_account_type_id')->nullable()->constrained('bank_account_types')->onDelete('set null'); // TipoCuenta
            $table->string('bank_account_number', 50)->nullable(); // NumeroCuenta
            $table->boolean('is_client')->default(false); // EsCliente (S/N)
            $table->boolean('is_provider')->default(false); // EsProveedor (S/N)
            $table->boolean('is_employee')->default(false); // EsEmpleado (S/N)
            $table->boolean('is_honorary')->default(false); // EsHonorario (S/N)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_providers');
    }
};
