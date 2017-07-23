<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    protected $table = 'master_kokab';
    protected $primaryKey = 'kota_id'; 
    public $timestamps = false;

    public function Kecamatan(){
    	return $this->hasMany('App\Kecamatan','kota_id');
    }
}
