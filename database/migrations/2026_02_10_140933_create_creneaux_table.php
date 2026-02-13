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
        Schema::create('creneaux', function (Blueprint $table) {
            $table->id('id_creneau');
            $table->time('heure_debut');
            $table->time('heure_fin');
            $table->foreignId('restaut_id')->constrained('restaurants', 'id_restaut');
            $table->foreignId('horaire_id')->constrained('horaires_service', 'id_horaire');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('creneaux');
    }
};
