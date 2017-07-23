<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    protected $table = 'perusahaan';
    protected $primaryKey = 'id_perusahaan'; 
    public $timestamps = false;

    public function Pemilik_usaha(){
   		return $this->belongsTo('App\Pemilik_usaha','id_pemilik');
   }
}
