<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Reservation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('reservations', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('user_id');
                $table->string('child_fullname');
                $table->date('child_birthdate');
                $table->string('child_gender');
                $table->string('child_address');
                $table->string('parent_fullname');
                $table->string('parent_address');
                $table->string('parent_email');
                $table->string('child_allergies')->nullable();
                $table->string('child_medical_conditions')->nullable();
                $table->string('doctor_phone');
                $table->string('parent_phone');
                $table->string('emergency_contact_name');
                $table->string('emergency_contact_phone');
                $table->string('school_name');
                $table->string('child_grade_level');
                $table->boolean('photo_authorization')->nullable();
                $table->string('special_needs')->nullable();
                $table->string('child_dietary_preferences')->nullable();
                $table->string('parental_authorizations')->nullable();
                $table->string('other_instructions')->nullable();
                $table->date('form_fill_date');
                $table->string('parent_signature');
                $table->boolean('privacy_acceptance');
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
            Schema::dropIfExists('reservations');
        }
}
