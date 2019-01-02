<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetKinerjaCapaian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('det_kinerja_capaian', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('capaian_id');
            $table->unsignedInteger('tipe_masukan_id');

            $table->string('nama');
            $table->unsignedInteger('input_angka');
            $table->decimal('input_desimal', 10, 2);
            $table->decimal('input_persentase', 6, 2);
            $table->decimal('input_nominal', 19, 4);

            $table->text('keterangan');
            $table->date('tanggal');

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
        Schema::dropIfExists('det_kinerja_capaian');
    }
}
