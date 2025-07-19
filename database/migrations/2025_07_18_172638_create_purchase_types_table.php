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
        Schema::create('purchase_types', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique(); // Nombre del tipo de compra
            $table->text('description')->nullable(); // Descripción opcional
            $table->enum('status', ['active', 'inactive'])->default('active'); // Estado del tipo de compra
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_types');
    }
};
