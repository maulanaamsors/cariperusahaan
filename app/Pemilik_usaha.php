<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Pemilik_usaha extends Model
{
    protected $table = "pemilik_usaha";
     protected $primaryKey = 'id_pemilik'; 
    
    public function Perusahaan(){
    	return $this->hasMany('App\Perusahaan','id_prusahaan');
    }

}
