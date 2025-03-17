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
        Schema::create('validations', function (Blueprint $table) {
            $table->id();
            $table->boolean('estValide');
            $table->enum('niveauValidation', ['DIRECTION', 'SERVICE', 'CENTRE', 'BUREAU', 'DEPARTEMENT', 'RECTORAT']);
            $table->text('motif');
            $table->foreignId('idBesoin')->constrained('besoins')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('validations');
    }
};
