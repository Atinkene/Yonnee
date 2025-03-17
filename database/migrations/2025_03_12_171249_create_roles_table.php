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
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->enum('intitule', ['DIRECTEUR', 'CHEF_SERVICE', 'CHEF_CENTRE', 'CHEF_BUREAU', 'CHEF_DEPARTEMENT', 'RECTEUR','PERSONNEL', 'ADMIN', 'ADMIN_ETAB', 'ADMIN_DEP','ADMIN_SERV', 'ADMIN_BUR', 'ADMIN_CENT']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
