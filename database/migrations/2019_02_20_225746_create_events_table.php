<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('wisata_id')->unsigned()->index();
            $table->string('nama_event');
            $table->text('gambar_event');
            $table->date('tanggal_event')->nullable();
            $table->time('jam_event');
            $table->text('golongan');
            $table->timestamps();

            $table->foreign('wisata_id')->references('id')->on('wisatas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
