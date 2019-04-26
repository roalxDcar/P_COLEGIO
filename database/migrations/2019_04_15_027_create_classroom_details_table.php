<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassroomDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classroom_details', function (Blueprint $table) {
            $table->increments('idclassroom_detail');
            $table->integer('id_degree')->unsigned();
            $table->integer('id_classroom')->unsigned();
            $table->integer('id_parallel')->unsigned();
            $table->integer('id_hour')->unsigned();
            $table->date('management');
            $table->timestamps();

            $table->foreign('id_degree')->references('iddegree')->on('degrees');
            $table->foreign('id_classroom')->references('idclassroom')->on('classrooms');
            $table->foreign('id_parallel')->references('idparallel')->on('parallels');
            $table->foreign('id_hour')->references('idhour')->on('hours');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classroom_details');
    }
}
