<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';
    protected $fillable = ['id','id_buku', 'id_kasir', 'jumlah_buku', 'bayar', 'kembalian', 'total harga', 'tanggal', 'created_at', 'updated_at'];
}
