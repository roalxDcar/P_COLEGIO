<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('iduser');           
            $table->integer('id_rol')->unsigned();         
            $table->integer('id_punishment')->unsigned(); 
            $table->string('name',45);
            $table->string('paternal',45);
            $table->string('maternal',45)->nullable();
            $table->string('gender',45);
            $table->string('address',50);
            $table->string('email')->unique();
            $table->string('ci',45)->unique();
            $table->string('cellphone',15);
            $table->integer('attempts');
            $table->boolean('estate');
            $table->integer('total_attempts')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('phone',15)->nullable();
            $table->timestamps();

            $table->foreign('id_rol')->references('idrol')->on('rols');
            $table->foreign('id_punishment')->references('idpunishment')->on('punishments');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
