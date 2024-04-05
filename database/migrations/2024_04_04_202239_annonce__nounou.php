<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AnnonceNounou extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profil_nounous', function (Blueprint $table) {
            $table->id();
            $table->integer('nounou_id');
            $table->string('name');
            $table->string('lastname');
            $table->integer('age'); // Champ Age de type entier
            $table->string('fonction');
            $table->string('Competence');
            $table->string('status');
            $table->integer('Annee_Exp'); // Champ Annee_Exp de type entier
            $table->string('description');
            $table->integer('price_hour'); // Champ price_per_hour de type entier
            $table->string('date_disponible');
            $table->foreign('nounou_id')->references('id')->on('nounous');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profil_nounous');

    }
}
