<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNumberStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('number_stdents', function (Blueprint $table) {
            $table->increments('idnumber_student');
            $table->integer('id_degree')->unsigned();
            $table->integer('id_parallel')->unsigned();
            $table->integer('quantity')->nullable();
            $table->timestamps();

            $table->foreign('id_degree')->references('iddegree')->on('degrees');
            $table->foreign('id_parallel')->references('idparallel')->on('parallels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('number_stdents');
    }
}
