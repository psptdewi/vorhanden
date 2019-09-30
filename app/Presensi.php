<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Presensi extends Model
{
    use Sortable;
    protected $table = 'presensi';
    protected $fillable = ['nama_karyawan', 'id', 'idtahun', 'idbulan', 'satu', 'dua', 'tiga', 'empat', 'lima', 'enam', 'tujuh', 'delapan', 'sembilan', 'sepuluh', 'sebelas', 'duabelas', 'tigabelas', 'empatbelas', 'limabelas', 'enambelas', 'tujuhbelas', 'delapanbelas', 'sembilanbelas', 'duapuluh','duapuluhsatu', 'duapuluhdua', 'duapuluhtiga', 'duapuluhempat', 'duapuluhlima', 'duapuluhenam', 'duapuluhtujuh', 'duapuluhdelapan', 'duapuluhsembilan', 'tigapuluh', 'tigapuluhsatu', 'hadir', 'total_tidak_hadir', 'total_izin'];
    public $sortable = ['nama_karyawan', 'id', 'idtahun', 'idbulan', 'satu', 'dua', 'tiga', 'empat', 'lima', 'enam', 'tujuh', 'delapan', 'sembilan', 'sepuluh', 'sebelas', 'duabelas', 'tigabelas', 'empatbelas', 'limabelas', 'enambelas', 'tujuhbelas', 'delapanbelas', 'sembilanbelas', 'duapuluh','duapuluhsatu', 'duapuluhdua', 'duapuluhtiga', 'duapuluhempat', 'duapuluhlima', 'duapuluhenam', 'duapuluhtujuh', 'duapuluhdelapan', 'duapuluhsembilan', 'tigapuluh', 'tigapuluhsatu', 'hadir', 'total_tidak_hadir', 'total_izin'];

    public function bulan()
    {
    	return $this->belongsTo('App\bulan');
    }
    public function presensitobulan()
    {
        return $this->hasMany('App\Bulan');
    }    
    public function tahun()
    {
        return $this->belongsTo('App\Tahun');
    }
    public function presensitotahun()
    {
        return $this->hasMany('App\Tahun');
    }    
}
