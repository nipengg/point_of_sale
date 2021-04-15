<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasoksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('pasoks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_distributor')->unsigned();
            $table->integer('id_buku')->unsigned();
            $table->integer('jumlah');
            $table->date('tanggal');
            $table->timestamps();

            $table->foreign('id_distributor')->references('id_distributor')->on('distributions')->onDelete('cascade');
            $table->foreign('id_buku')->references('id')->on('books')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasoks');
    }
}
