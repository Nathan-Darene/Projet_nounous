<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAvatarToNounous extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nounous', function (Blueprint $table) {
            // if not exist, add the new column
            if (!Schema::hasColumn('nounous', 'avatar')) {
                $table->string('avatar')->default(config('chatify.user_avatar.default'));
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nounous', function (Blueprint $table) {
            $table->dropColumn('avatar');
        });
    }
}
