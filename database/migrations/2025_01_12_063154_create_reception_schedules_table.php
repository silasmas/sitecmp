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
        Schema::create('reception_schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('minister_id'); // Référence au pasteur
            $table->unsignedBigInteger('bureau_id'); // Référence au bureau
            $table->string('day_of_week'); // Jour de la semaine (Mardi, Mercredi, etc.)
            $table->string('time_slot'); // Plage horaire (08H00-12H00, 13H00-17H00, etc.)
            $table->timestamps();

            // Contraintes
            $table->foreign('minister_id')->references('id')->on()->onDelete('cascade');
            $table->foreign('bureau_id')->references('id')->on('bureau')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reception_schedules');
    }
};
