<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUOfficialDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('u_official_data', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unique();
            $table->string('MDA');
            $table->string('division');
            $table->string('rank');
            $table->string('service_no');
            $table->string('date_first_app')->nullable();
            $table->string('date_present_app')->nullable();
            $table->string('grade_level');
            $table->string('step');
            $table->string('pensionable');
            $table->string('gazette');
            $table->string('pen_administrator');
            $table->string('pen_id');
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
        Schema::dropIfExists('u_official_data');
    }
}
