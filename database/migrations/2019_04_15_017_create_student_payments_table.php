<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_payments', function (Blueprint $table) {
            $table->increments('idstudent_payment');
            $table->integer('id_monthly_payment')->unsigned();
            $table->integer('id_user')->unsigned();
            $table->date('extension');
            $table->string('state',20);
            $table->string('observation',100);
            $table->date('date');
            $table->string('invoice_number',45);
            $table->string('invoice_name',45);
            $table->string('nit_ci',45);
            $table->timestamps();

            $table->foreign('id_monthly_payment')->references('idmonthly_payment')->on('monthly_payments');
            $table->foreign('id_user')->references('iduser')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_payments');
    }
}
