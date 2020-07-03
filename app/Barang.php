<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
   	protected $table = 'barangs';
	protected $primaryKey = 'id_brg';

    public function pengadaan()
    {
    	return $this->belongsTo('App\Model\Barang', 'id_brg');
    }
}