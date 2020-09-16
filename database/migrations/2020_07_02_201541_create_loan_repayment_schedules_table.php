<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoanRepaymentSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loan_repayment_schedules', function (Blueprint $table) {
            $table->id();
            $table->string('grade_level');
            $table->integer('approved_ceiling');
            $table->integer('interest_rate');
            $table->integer('monthly_repayment5');
            $table->integer('monthly_repayment10');
            $table->integer('monthly_repayment15');
            $table->integer('monthly_repayment20');
            $table->integer('monthly_repayment25');


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
        Schema::dropIfExists('loan_repayment_schedules');
    }
}
