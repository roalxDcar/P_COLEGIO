<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectTeacherDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_teacher_details', function (Blueprint $table) {
            $table->increments('idsubject_teacher_detail');
            $table->integer('id_teacher')->unsigned();
            $table->integer('id_subject_detail')->unsigned();
            $table->timestamps();

            $table->foreign('id_teacher')->references('idteacher')->on('teachers');
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
        Schema::dropIfExists('subject_teacher_details');
    }
}
