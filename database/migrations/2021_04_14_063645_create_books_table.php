<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id_buku');
            $table->string('judul');
            $table->string('isbn', 25)->nullable();
            $table->string('penulis')->nullable();
            $table->string('penerbit')->nullable();
            $table->date('tahun_terbit')->nullable();
            $table->integer('jumlah_buku');
            $table->integer('harga_pokok');
            $table->integer('harga_jual');
            $table->text('ppn')->nullable();
            $table->integer('diskon')->nullable();
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
        Schema::dropIfExists('books');
    }
}
