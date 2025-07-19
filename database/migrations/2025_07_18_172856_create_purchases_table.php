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
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_providers_id');
            $table->date('purchase_date');
            $table->string('folio');
            $table->date('period_book')->nullable();
            $table->text('glosa')->nullable();
            $table->unsignedBigInteger('purchase_type_id');
            $table->timestamps();

            $table->foreign('customer_providers_id')->references('id')->on('customer_providers')->onDelete('cascade');
            $table->foreign('purchase_type_id')->references('id')->on('purchase_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchases');
    }
};
