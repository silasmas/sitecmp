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
        Schema::create('missionnaires', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'nom');
            $table->date(column: 'birthday');
            $table->string(column: 'age')->nullable();
            $table->text(column: 'adresse')->nullable();
            $table->string(column: 'phone')->nullable();
            $table->string(column: 'email')->unique();
            $table->string(column: 'etat_civil')->nullable();
            $table->string(column: 'profession')->nullable();
            $table->string(column: 'annee_conversion')->nullable();
            $table->string(column: 'lieu_bapteme')->nullable();
            $table->date(column: 'date_bapteme')->nullable();
            $table->string(column: 'eglise_attache')->default("CMP");
            $table->string(column: 'temps_au_cmp')->nullable();
            $table->string(column: 'departement')->nullable();
            $table->string(column: 'participer_mission')->default("0");
            $table->text(column: 'description_mission')->nullable();
            $table->string(column: 'formation_biblique')->default("0");
            $table->string(column: 'niveau')->nullable();
            $table->string(column: 'lecture_bible')->nullable();
            $table->string(column: 'livre_bible')->nullable();
            $table->string(column: 'base_mission')->nullable();
            $table->string(column: 'concepte_familier')->nullable();
            $table->string(column: 'langue_fr')->nullable();
            $table->string(column: 'langue_en')->nullable();
            $table->string(column: 'autres')->nullable();
            $table->text(column: 'competence')->nullable();
            $table->string(column: 'outils_rs')->default("0");
            $table->text(column: 'but_formation')->nullable();
            $table->text(column: 'objectif')->nullable();
            $table->string(column: 'disponible')->default("0");
            $table->string(column: 'validationFormulaire')->default("0");
            $table->string(column: 'note_validation')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('missionnaires');
    }
};
