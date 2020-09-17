<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHookeVariationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hooke_variations', function (Blueprint $table) {
            $table->id();
            $table->string('weight1');
            $table->string('weight2');
            $table->string('weight3');
            $table->string('weight4');
            $table->string('weight5');
            $table->string('weight6');
            
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
        Schema::dropIfExists('hooke_variations');
    }
}
