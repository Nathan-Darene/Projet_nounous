<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableCheckboxNounou extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendriers', function (Blueprint $table) {
            $table->id();
            $table->boolean('lun_avant_ecole')->default(false);
            $table->boolean('mar_avant_ecole')->default(false);
            $table->boolean('mer_avant_ecole')->default(false);
            $table->boolean('jeu_avant_ecole')->default(false);
            $table->boolean('ven_avant_ecole')->default(false);
            $table->boolean('sam_avant_ecole')->default(false);
            $table->boolean('dim_avant_ecole')->default(false);
            $table->boolean('lun_matin')->default(false);
            $table->boolean('mar_matin')->default(false);
            $table->boolean('mer_matin')->default(false);
            $table->boolean('jeu_matin')->default(false);
            $table->boolean('ven_matin')->default(false);
            $table->boolean('sam_matin')->default(false);
            $table->boolean('dim_matin')->default(false);
            $table->boolean('lun_midi')->default(false);
            $table->boolean('mar_midi')->default(false);
            $table->boolean('mer_midi')->default(false);
            $table->boolean('jeu_midi')->default(false);
            $table->boolean('ven_midi')->default(false);
            $table->boolean('sam_midi')->default(false);
            $table->boolean('dim_midi')->default(false);
            $table->boolean('lun_après_midi')->default(false);
            $table->boolean('mar_après_midi')->default(false);
            $table->boolean('mer_après_midi')->default(false);
            $table->boolean('jeu_après_midi')->default(false);
            $table->boolean('ven_après_midi')->default(false);
            $table->boolean('sam_après_midi')->default(false);
            $table->boolean('dim_après_midi')->default(false);
            $table->boolean('lun_après_école')->default(false);
            $table->boolean('mar_après_école')->default(false);
            $table->boolean('mer_après_école')->default(false);
            $table->boolean('jeu_après_école')->default(false);
            $table->boolean('ven_après_école')->default(false);
            $table->boolean('sam_après_école')->default(false);
            $table->boolean('dim_après_école')->default(false);
            $table->boolean('lun_en_soirée')->default(false);
            $table->boolean('mar_en_soirée')->default(false);
            $table->boolean('mer_en_soirée')->default(false);
            $table->boolean('jeu_en_soirée')->default(false);
            $table->boolean('ven_en_soirée')->default(false);
            $table->boolean('sam_en_soirée')->default(false);
            $table->boolean('dim_en_soirée')->default(false);
            $table->boolean('lun_nuit')->default(false);
            $table->boolean('mar_nuit')->default(false);
            $table->boolean('mer_nuit')->default(false);
            $table->boolean('jeu_nuit')->default(false);
            $table->boolean('ven_nuit')->default(false);
            $table->boolean('sam_nuit')->default(false);
            $table->boolean('dim_nuit')->default(false);
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
        Schema::dropIfExists('calendriers');
    }
}
