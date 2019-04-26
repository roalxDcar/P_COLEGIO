<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classrooms', function (Blueprint $table) {
            $table->increments('idclassroom');
            $table->integer('id_type_classroom')->unsigned();
            $table->string('classroom_description',45);
            $table->string('classroom_floor',45);
            $table->integer('capacity');
            $table->string('classroom_characteristic',45);
            $table->integer('state');
            $table->timestamps();

            $table->foreign('id_type_classroom')->references('idtype_classroom')->on('type_classrooms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classrooms');
    }
}
