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
        Schema::create('enseignants', function (Blueprint $table) {
            $table->id();
            $table->string('Nom');
            $table->string('Prenom');
            $table->date('DateNaissance');
            $table->string('LieuNaissance');
            $table->string('Sexe');
            $table->string('Nationalite');
            $table->string('SituationMatrimoniale');
            $table->integer('NombreEnfants');
            $table->string('Adresse');
            $table->string('Quartier');
            $table->string('Email');
            $table->string('Telephone');
            $table->string('Statut');
            $table->date('DateArriveeEmploi');
            $table->string('EcolePrestation');
            $table->string('CHI');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enseignants');
    }
};

