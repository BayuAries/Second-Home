<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomestayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homestay', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_pemilik');
            $table->string('nama_pemilik');
            $table->string('nama_homestay');
            $table->string('no_hp');
            $table->string('alamat');
            $table->string('email');
            $table->string('harga');
            $table->integer('kamar');
            $table->text('keterangan');
            $table->string('kabupaten');
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
        Schema::dropIfExists('homestay');
    }
}
