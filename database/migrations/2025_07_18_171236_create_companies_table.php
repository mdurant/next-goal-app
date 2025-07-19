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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            #data tipical in company configuration
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('logo')->nullable();
            $table->string('website')->nullable();
            $table->string('rut')->unique()->nullable(); // RUT or equivalent
            $table->string('country')->default('CL'); // Default to Chile
            $table->string('currency')->default('CLP'); // Default to Chilean Peso
            $table->string('language')->default('es'); // Default to Spanish
            $table->string('timezone')->default('America/Santiago'); // Default to Santiago timezone
            #relation with commune, cities, and business activities
            $table->foreignId('commune_id')->nullable()->constrained('communes')->onDelete('set null');
            $table->foreignId('city_id')->nullable()->constrained('cities')->onDelete('set null');
            $table->foreignId('business_activity_id')->nullable()->constrained('business_activities')->onDelete('set null');
            $table->boolean('is_active')->default(true); // To indicate if the company is active
            $table->string('legal_representation')->nullable(); // Legal representation name
            $table->string('email_legal_representation')->nullable();
            $table->string('email_dte')->nullable();
            $table->boolean('is_demo')->default(false); // To indicate if the company is a demo company
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
