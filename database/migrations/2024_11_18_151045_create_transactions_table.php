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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'orderNumber')->nullable();
            $table->string(column: 'reference')->unique();
            $table->string(column: 'montant')->nullable();
            $table->string(column: 'devise')->nullable();
            $table->string(column: 'type_paiement')->nullable();
            $table->string(column: 'num_paiement')->nullable();
            $table->string(column: 'operateur')->nullable();
            $table->string(column: 'status')->default("0");
            $table->string(column: 'message')->nullable();
            $table->string(column: 'description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
