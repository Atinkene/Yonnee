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
        Schema::create('sousuniteorganisationnelles', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['DIRECTION', 'SERVICE', 'CENTRE', 'BUREAU', 'DEPARTEMENT','ADMINTECH']);
            $table->string('intitule')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sousuniteorganisationnelles');
    }
};
