<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
    protected $table = 'distributions';
    protected $fillable = ['id_distributor', 'nama_distributor', 'alamat', 'telpon', 'created_at', 'updated_at'];
    protected $primaryKey = "id_distributor";

    public function pasok()
    {
    	return $this->hasMany('App\Pasok', 'id_distributor');
    }
}
