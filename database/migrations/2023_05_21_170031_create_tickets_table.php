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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('courriel');
            $table->string('telephone');
            $table->string('adresse');
            $table->string('codepostal');
            $table->boolean('entreprise');
            $table->string('entreprise_nom');
            $table->string('entreprise_adresse');
            $table->string('entreprise_codepostal');
            $table->longText('message');
            $table->string('categories');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
