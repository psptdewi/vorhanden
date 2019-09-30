<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bulan extends Model
{
    protected $table = 'bulan';
    protected $fillable = ['nama_bulan'];

    public function presensi()
    {
    	return $this->hasMany('App\Presensi');
    }
}
