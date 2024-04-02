<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('lastname');
            $table->string('firstname');
            $table->string('phone');
            $table->date('birthdate');
            $table->string('city');
            $table->string('postalcode')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('privacy_acceptance');
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
        Schema::dropIfExists('users');
    }
}
