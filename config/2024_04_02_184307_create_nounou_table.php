<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNounouTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nounou', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('lastname');
            $table->string('firstname');
            $table->string('phone')->unique();
            $table->date('birthdate');
            $table->string('imageUpload')->unique();
            $table->string('city');
            $table->string('postalcode')->nullable();
            $table->string('email')->unique();
            $table->string('password');
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
        Schema::dropIfExists('nounou');
    }
}
