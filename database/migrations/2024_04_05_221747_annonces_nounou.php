<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AnnoncesNounou extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonces_nounous', function (Blueprint $table) {
            $table->id();
            $table->integer('nounou_id');
            $table->string('titte');
            $table->string('Description');
            $table->string('statut');
            $table->string('prix_heure');
            $table->string('description');
            $table->date('date_disponible');
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
        Schema::dropIfExists('annonces_nounous');
    }
}
