<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuti extends Model
{
    protected $table = 'cuti';
    protected $fillable = ['id', 'nama_karyawan', 'mulai_cuti', 'selesai_cuti', 'status', 'alasan'];

    public function Status()
    {
    	return $this->belongsTo('App\Status');
    }
    public function presensitostatus()
    {
        return $this->hasMany('App\Status');
    }    
}
