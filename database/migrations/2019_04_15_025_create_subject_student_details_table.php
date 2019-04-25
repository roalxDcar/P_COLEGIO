<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectStudentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_student_details', function (Blueprint $table) {
            $table->increments('idsubject_student_detail');
            $table->integer('id_student')->unsigned();
            $table->integer('id_subject_detail')->unsigned();
            $table->timestamps();

            $table->foreign('id_student')->references('idstudent')->on('students');
            $table->foreign('id_subject_detail')->references('idsubject_detail')->on('subject_details');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subject_student_details');
    }
}
