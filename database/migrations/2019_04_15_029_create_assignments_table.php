<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignments', function (Blueprint $table) {
            $table->increments('assignment');
            $table->integer('id_subject_student_detail')->unsigned();
            $table->integer('id_subject_teacher_detail')->unsigned();
            $table->integer('id_classroom_detail')->unsigned();
            $table->integer('id_secretary')->unsigned();
            $table->integer('b1');
            $table->integer('b2');
            $table->integer('b3');
            $table->integer('b4');
            $table->integer('average');
            $table->string('management',40);
            $table->timestamps();

            $table->foreign('id_subject_student_detail')->references('idsubject_student_detail')->on('subject_student_details');
            $table->foreign('id_subject_teacher_detail')->references('idsubject_teacher_detail')->on('subject_teacher_details');
            $table->foreign('id_classroom_detail')->references('idclassroom_detail')->on('classroom_details');
            $table->foreign('id_secretary')->references('idsecretary')->on('secretaries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assignments');
    }
}
