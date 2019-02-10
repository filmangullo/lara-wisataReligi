<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKalendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kalenders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tahun_id')->unsigned()->index();
            $table->integer('bulan_id')->unsigned()->index();
            $table->integer('tanggal_id')->unsigned()->index();
            $table->string('nama_peristiwa');
            $table->timestamps();

            $table->foreign('tahun_id')->references('id')->on('tahuns');
            $table->foreign('bulan_id')->references('id')->on('bulans');
            $table->foreign('tanggal_id')->references('id')->on('tanggals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kalenders');
    }
}
