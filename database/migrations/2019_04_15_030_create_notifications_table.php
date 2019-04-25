<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->increments('idnotification');
            $table->integer('id_teacher')->unsigned();
            $table->integer('id_student')->unsigned();
            $table->date('date');
            $table->string('description',100);
            $table->timestamps();

            $table->foreign('id_student')->references('idstudent')->on('students');            
            $table->foreign('id_teacher')->references('idteacher')->on('teachers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notifications');
    }
}
