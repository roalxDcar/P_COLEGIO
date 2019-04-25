<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetClassroomDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_classroom_details', function (Blueprint $table) {
            $table->increments('idasset_classroom_detail');
            $table->integer('id_classroom')->unsigned();
            $table->integer('id_asset')->unsigned();
            $table->integer('quantity');
            $table->string('observation',100);
            $table->timestamps();


            $table->foreign('id_classroom')->references('idclassroom')->on('classrooms');
            $table->foreign('id_asset')->references('idasset')->on('assets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asset_classroom_details');
    }
}
