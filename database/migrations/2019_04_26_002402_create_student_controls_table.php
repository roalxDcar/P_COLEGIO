<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentControlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_controls', function (Blueprint $table) {
            $table->bigIncrements('idstudent_control');
            $table->integer('id_assignment')->unsigned();
            $table->date('date');
            $table->string('estado',20);
            $table->timestamps();

             $table->foreign('id_assignment')->references('idassignment')->on('assignments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_controls');
    }
}
