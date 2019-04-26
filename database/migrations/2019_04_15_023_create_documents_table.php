<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->increments('iddocument');
            $table->integer('id_student')->unsigned();
            $table->integer('ci_photocopy');
            $table->integer('birth_certificate_original');
            $table->integer('rude');
            $table->integer('photocopy_legalized_notebook');
            $table->integer('original_notepad');
            $table->timestamps();

            $table->foreign('id_student')->references('idstudent')->on('students');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documents');
    }
}
