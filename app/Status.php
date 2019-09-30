<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'status';
    protected $fillable = ['id','status'];
    public function presensitocuti()
    {
        return $this->hasMany('App\Cuti');
    }    
}
