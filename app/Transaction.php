<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';
    protected $fillable = ['id_transaksi','id_buku', 'id_kasir', 'jumlah_buku', 'bayar', 'kembalian', 'total_harga', 'tanggal', 'created_at', 'updated_at'];
    protected $primaryKey = "id_transaksi";

    public function book()
    {
    	return $this->belongsTo('App\Book', 'id_buku');
    }

    public function user()
    {
    	return $this->belongsTo('App\User', 'id');
    }
}
