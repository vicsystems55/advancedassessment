<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradeSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grade_sessions', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->bigInteger('user_id');
            $table->string('weight1');
            $table->string('length_change1');
            $table->string('weight2');
            $table->string('length_change2');
            $table->string('weight3');
            $table->string('length_change3');
            $table->string('weight4');
            $table->string('length_change4');
            $table->string('weight5');
            $table->string('length_change5');
            $table->string('weight6');
            $table->string('length_change6');

            $table->string('score')->nullable();

            $table->string('status')->default('active');
           

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
        Schema::dropIfExists('grade_sessions');
    }
}
