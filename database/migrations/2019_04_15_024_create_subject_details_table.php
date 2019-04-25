<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_details', function (Blueprint $table) {
            $table->increments('idsubject_detail');
            $table->integer('id_degree')->unsigned();
            $table->integer('id_subject')->unsigned();
            $table->timestamps();

            $table->foreign('id_degree')->references('iddegree')->on('degrees');
            $table->foreign('id_subject')->references('idsubject')->on('subjects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subject_details');
    }
}
