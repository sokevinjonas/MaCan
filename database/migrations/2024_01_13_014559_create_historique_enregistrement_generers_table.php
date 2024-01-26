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
        Schema::create('historique_enregistrement_generers', function (Blueprint $table) {
            $table->uuid('id_enregistrement')->primary();
            $table->string('nom');
            $table->string('prenom');
            $table->string('chiffre');
            $table->string('couleur')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historique_enregistrement_generers');
    }
};
