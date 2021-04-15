<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    protected $fillable = ['id_buku', 'judul', 'isbn', 'penulis', 'penerbit', 'tahun_terbit', 'jumlah_buku', 'harga_pokok', 'harga_jual', 'ppn', 'diskon'];
    protected $primaryKey = "id_buku";

    public function pasok()
    {
    	return $this->hasMany('App\Pasok', 'id_buku');
    }
}
