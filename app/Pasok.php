<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasok extends Model
{
    protected $table = 'pasoks';
    protected $fillable = ['id','id_distributor', 'id_buku', 'jumlah', 'alamat', 'tanggal', 'created_at', 'updated_at'];

    public function book()
    {
    	return $this->belongsTo('App\Book', 'id_buku');
    }

    public function distributor()
    {
    	return $this->belongsTo('App\Distributor', 'id_distributor');
    }
}
