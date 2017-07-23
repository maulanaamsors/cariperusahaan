<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $table = 'master_kecam';
    protected $primaryKey = 'kecam_id'; 
    public $timestamps = false;

    public function Kota(){
    	return $this->belongsTo('App\Kota','kota_id');
    }
}
