<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUPersonalInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('u_personal_infos', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unique();
            $table->string('user_name')->unique();
            $table->string('user_email')->unique();
            $table->string('user_phone');
            $table->string('user_gender');
            $table->string('user_dob');
            $table->string('user_state');
            $table->string('user_lga');
            $table->string('user_address');
            $table->string('user_sign');
            $table->string('status');
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
        Schema::dropIfExists('u_personal_infos');
    }
}
