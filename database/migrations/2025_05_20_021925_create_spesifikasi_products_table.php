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
        Schema::create('spesifikasi_products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('department');
            $table->string('phone_number');
            $table->string('company_name');
            $table->string('company_address');
            $table->string('no_urs');
            $table->text('detail_spesification');
            $table->string('delivery_address');
            $table->string('pic');
            $table->boolean('is_stock');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spesifikasi_products');
    }
};
