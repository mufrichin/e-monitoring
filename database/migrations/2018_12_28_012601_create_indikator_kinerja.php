<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndikatorKinerja extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indikator_kinerja', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sasaran_id')->comment('sasaran_strategis');
            $table->integer('sumber_data_id')->comment('sumber_data');
            $table->string('nama', 100);
            $table->string('added_by', 20);
            $table->string('updated_by', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('indikator_kinerja');
    }
}
