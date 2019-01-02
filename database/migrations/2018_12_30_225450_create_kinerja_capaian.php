<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKinerjaCapaian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kinerja_capaian', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('indikator_id');
            $table->unsignedInteger('sumber_data_id');
            $table->unsignedInteger('unit_kd');
            $table->unsignedInteger('tipe_masukan_id');

            $table->unsignedInteger('input_angka');
            $table->decimal('input_desimal', 10, 2);
            $table->decimal('input_persentase', 6, 2);
            $table->decimal('input_nominal', 19, 4);

            $table->text('keterangan');
            $table->date('tanggal');

            $table->boolean('has_detail');
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
        Schema::dropIfExists('kinerja_capaian');
    }
}
