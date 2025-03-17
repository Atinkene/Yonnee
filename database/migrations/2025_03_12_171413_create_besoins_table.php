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
        Schema::create('besoins', function (Blueprint $table) {
            $table->id();
            $table->string('items');
            $table->text('description');
            $table->integer('quantite');
            $table->decimal('prixUnitaire', 10, 2);
            $table->decimal('totaux', 10, 2);
            $table->enum('categorie', [
                'MATERIEL_LABORATOIRE',
                'PRODUITS_LABORATOIRE',
                'PRODUITS_ENTRETIEN',
                'MOBILIER_BUREAU',
                'MATERIEL_FROID',
                'HABILLEMENT_PERSONNEL',
                'FOURNITURES_BUREAU',
                'CONSOMMABLES_INFORMATIQUES',
                'MATERIEL_INFORMATIQUE',
                'MATERIEL_COURS',
                'MATERIEL_IMPRIMERIE',
                'PROJET_TRAVAUX',
                'MATERIEL_ROULANT',
                'AUTRES'
            ]);
            $table->foreignId('idPersonnel')->constrained('users')->onDelete('cascade');
            $table->foreignId('idSession')->constrained('sessions')->onDelete('cascade');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('besoins');
    }
};
