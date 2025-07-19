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
        Schema::create('purchase_concepts', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255); // e.g., "Arriendos"
            $table->string('account_code', 50); // e.g., "4.01.03.11 Arriendos"
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_concepts');
    }
};
