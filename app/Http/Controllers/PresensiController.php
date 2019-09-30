<?php

namespace App\Http\Controllers;

use App\Presensi;
use App\Bulan;
use App\Cuti;
use App\Tahun;
use App\Status;
use Illuminate\Http\Request;
use Excel;
use Illuminate\Support\Facades\Input;
use DB;
use Charts;
use Alert;

class PresensiController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $presensi = Presensi::all();

        //menjumlahkan nilai maksimum dengan ouput nama
        $max = DB::table('presensi')
                ->select('nama_karyawan')
                ->where('hadir', DB::raw("(select max(`hadir`) from presensi)"))
                ->value('nama_karyawan');
        //menjumlahkan nilai minimum dengan ouput nama
        $min = DB::table('presensi')
                ->select('nama_karyawan')
                ->where('hadir', DB::raw("(select min(`hadir`) from presensi)"))
                ->value('nama_karyawan');

        $bulan = Bulan::all();
        $tahun = Tahun::all();
        //untuk menampilkan grafik
        $data = DB::table('presensi')
                ->select('idbulan', DB::raw('sum(satu+ dua+tiga+empat+lima+enam+tujuh+delapan+sembilan+sepuluh+sebelas+duabelas+tigabelas+empatbelas+limabelas+enambelas+tujuhbelas+delapanbelas+sembilanbelas+duapuluh+duapuluhsatu+duapuluhdua+duapuluhtiga+duapuluhempat+duapuluhlima+duapuluhenam+duapuluhtujuh+duapuluhdelapan+duapuluhsembilan+tigapuluh+tigapuluhsatu) as hadir'))
                ->groupBy('idbulan')
                ->where('idtahun', '1')
                ->get();
        $chart = Charts::create('bar', 'highcharts')
                ->title('Grafik Data Kehadiran Perbulan pada Tahun 2017')
                ->elementLabel("Total Kehadiran Perbulan")
                ->dimensions(900, 500)
                ->responsive(false)
                ->labels($data->pluck('idbulan'))
                ->values($data->pluck('hadir'));
        return view('presensi.index2', ['presensi' => $presensi, 'bulan' => $bulan, 'max'=>$max, 'chart' => $chart, 'min' => $min, 'tahun' => $tahun]);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nama_karyawan = $request->nama_karyawan;
        $id = $request->id;
        $satu = $request->satu;
        $dua = $request->dua;
        $tiga = $request->tiga;
        $empat = $request->empat;
        $lima = $request->lima;
        $enam = $request->enam;
        $tujuh = $request->tujuh;
        $delapan = $request->delapan;
        $sembilan = $request->sembilan;
        $sepuluh = $request->sepuluh;
        $sebelas = $request->sebelas;
        $duabelas = $request->duabelas;
        $tigabelas = $request->tigabelas;
        $empatbelas = $request->empatbelas;
        $limabelas = $request->limabelas;
        $enambelas = $request->enambelas;
        $tujuhbelas = $request->tujuhbelas;
        $delapanbelas = $request->delapanbelas;
        $sembilanbelas = $request->sembilanbelas;
        $duapuluh = $request->duapuluh;
        $duapuluhsatu = $request->duapuluhsatu;
        $duapuluhdua = $request->duapuluhdua;
        $duapuluhtiga = $request->duapuluhtiga;
        $duapuluhempat = $request->duapuluhempat;
        $duapuluhlima = $request->duapuluhlima;
        $duapuluhenam = $request->duapuluhenam;
        $duapuluhtujuh = $request->duapuluhtujuh;
        $duapuluhdelapan = $request->duapuluhdelapan;
        $duapuluhsembilan = $request->duapuluhsembilan;
        $tigapuluh = $request->tigapuluh;
        $tigapuluhsatu = $request->tigapuluhsatu;
        $hadir = $request->hadir;
        $total_tidak_hadir = $request->total_tidak_hadir;
        $total_izin = $request->total_izin;
        $idbulan = $request->idbulan;
        $idtahun = $request->idtahun;

        $presensi = new Presensi;
        if(isset($request['simpan'])) {
            $presensi->create([
                'id' => $id, 'nama_karyawan' => $nama_karyawan, 'satu' => $satu, 'dua' => $dua, 'tiga' => $tiga, 'empat' => $empat, 'lima' => $lima, 'enam' => $enam, 'tujuh' => $tujuh, 'delapan' => $delapan, 'sembilan' => $sembilan, 'sepuluh' => $sepuluh, 'sebelas' => $sebelas, 'duabelas' => $duabelas, 'tigabelas' => $tigabelas, 'empatbelas' => $empatbelas, 'limabelas' => $limabelas, 'enambelas' => $enambelas, 'tujuhbelas' => $tujuhbelas, 'delapanbelas' => $delapanbelas, 'sembilanbelas' => $sembilanbelas, 'duapuluh' => $duapuluh, 'duapuluhsatu' => $duapuluhsatu, 'duapuluhdua' => $duapuluhdua, 'duapuluhtiga' => $duapuluhtiga, 'duapuluhempat' => $duapuluhempat, 'duapuluhlima' => $duapuluhlima, 'duapuluhenam' => $duapuluhenam, 'duapuluhtujuh' => $duapuluhtujuh, 'duapuluhdelapan' => $duapuluhdelapan, 'duapuluhsembilan' => $duapuluhsembilan, 'tigapuluh' => $tigapuluh, 'tigapuluhsatu' => $tigapuluhsatu, 'hadir' => $hadir, 'total_tidak_hadir' => $total_tidak_hadir, 'total_izin' => $total_izin, 'idbulan'=>$idbulan, 'idtahun'=>$idtahun]);
            alert()->success('Data Telah Ditambahkan', 'Berhasil')->persistent('OK');
            return back();
        }
        return $request->all();        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $presensi = Presensi::all();
        $bulan = Bulan::all();
        $tahun = Tahun::all();
        return view('presensi.show', ['presensi' => $presensi, 'bulan' => $bulan, 'tahun' => $tahun]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $presensi = Presensi::find($id);
        $bulan = Bulan::all();
        $tahun = Tahun::all();
        return view('presensi.edit', ['presensi' => $presensi, 'bulan' => $bulan, 'tahun' => $tahun]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       if(isset($request['simpanedit'])) {
        $presensi = Presensi::findOrFail($id);
        $this->validate($request, [
            'nama_karyawan' => 'required',
            'satu' => 'required',
            'dua' => 'required',
            'tiga' => 'required',
            'empat' => 'required',
            'lima' => 'required',
            'enam' => 'required',
            'tujuh' => 'required',
            'delapan' => 'required',
            'sembilan' => 'required',
            'sepuluh' => 'required',
            'sebelas' => 'required',
            'duabelas' => 'required',
            'tigabelas' => 'required',
            'empatbelas' => 'required',
            'limabelas' => 'required',
            'enambelas' => 'required',
            'tujuhbelas' => 'required',
            'delapanbelas' => 'required',
            'sembilanbelas' => 'required',
            'duapuluh' => 'required',
            'duapuluhsatu' => 'required',
            'duapuluhdua' => 'required',
            'duapuluhtiga' => 'required',
            'duapuluhempat' => 'required',
            'duapuluhlima' => 'required',
            'duapuluhenam' => 'required',
            'duapuluhtujuh' => 'required',
            'duapuluhdelapan' => 'required',
            'duapuluhsembilan' => 'required',
            'tigapuluh' => 'required',
            'tigapuluhsatu' => 'required',
            'hadir' => 'required',
            'total_tidak_hadir' => 'required',
            'total_izin' => 'required'
        ]);
        $input = $request->all();
        $presensi->fill($input)->save();
        alert()->success('Data Telah Diubah', 'Berhasil')->persistent('OK');
        return redirect('/admin/home');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $presensi=Presensi::find($id);
        $presensi->delete();
        return redirect('/admin/presensi/show');
    }

    public function upload(Request $request){
        if($request->hasFile('file')){
            $path=$request->file('file')->getRealPath();
            $data=Excel::load($path,function($reader){
                $reader->calculate();
            })->get();
            if(!empty($data)&&$data->count()){
                foreach ($data as $key => $value) {
                    $nama_karyawan = $value->nama_karyawan;
                    $idbulan = $value->idbulan;
                    $presensi = Presensi::firstOrNew(['idbulan' => $idbulan, 'nama_karyawan'=>$nama_karyawan]);
                    $presensi->nama_karyawan = $value->nama_karyawan;
                    $presensi->id = $value->id;
                    $presensi->satu = $value->satu;
                    $presensi->dua = $value->dua;
                    $presensi->tiga = $value->tiga;
                    $presensi->empat = $value->empat;
                    $presensi->lima = $value->lima;
                    $presensi->enam = $value->enam;
                    $presensi->tujuh = $value->tujuh;
                    $presensi->delapan = $value->delapan;
                    $presensi->sembilan = $value->sembilan;
                    $presensi->sepuluh = $value->sepuluh;
                    $presensi->sebelas = $value->sebelas;
                    $presensi->duabelas = $value->duabelas;
                    $presensi->tigabelas = $value->tigabelas;
                    $presensi->empatbelas = $value->empatbelas;
                    $presensi->limabelas = $value->limabelas;
                    $presensi->enambelas = $value->enambelas;
                    $presensi->tujuhbelas = $value->tujuhbelas;
                    $presensi->delapanbelas = $value->delapanbelas;
                    $presensi->sembilanbelas = $value->sembilanbelas;
                    $presensi->duapuluh = $value->duapuluh;
                    $presensi->duapuluhsatu = $value->duapuluhsatu;
                    $presensi->duapuluhdua = $value->duapuluhdua;
                    $presensi->duapuluhtiga = $value->duapuluhtiga;
                    $presensi->duapuluhempat = $value->duapuluhempat;
                    $presensi->duapuluhlima = $value->duapuluhlima;
                    $presensi->duapuluhenam = $value->duapuluhenam;
                    $presensi->duapuluhtujuh = $value->duapuluhtujuh;
                    $presensi->duapuluhdelapan = $value->duapuluhdelapan;
                    $presensi->duapuluhsembilan = $value->duapuluhsembilan;
                    $presensi->tigapuluh = $value->tigapuluh;
                    $presensi->tigapuluhsatu = $value->tigapuluhsatu;
                    $presensi->hadir = $value->hadir;
                    $presensi->total_tidak_hadir = $value->total_tidak_hadir;
                    $presensi->total_izin = $value->total_izin;
                    $presensi->idbulan = $value->idbulan;
                    $presensi->idtahun = $value->idtahun;
                    $presensi->save();
                }
            }
        }     
        alert()->success('Data Telah Berhasil Diupload', 'Berhasil')->persistent('OK');
        return back();
    }

    public function search(Request $request)
    {
        $bulan = Bulan::all();
        $tahun = Tahun::all();
        $search = $request->input('search');
        $presensi = Presensi::where('nama_karyawan', 'like', '%'.$search.'%')->get()->sortByDesc('hadir');
        return view('presensi.search', ['presensi' => $presensi, 'bulan' => $bulan, 'tahun' => $tahun]);
    }

   public function category(Request $request)
    {
        $tahun = Tahun::all();
        $bulan = Bulan::all();
        $search = $request->input('idbulan');
        $search2 = $request->input('idtahun');
        $presensi = Presensi::where('idbulan', 'like', '%'.$search.'%')
                    ->where('idtahun', 'like', '%'.$search2.'%')
                    ->get()
                    ->sortByDesc('hadir');
        return view('presensi.category', ['presensi' => $presensi, 'bulan' => $bulan, 'tahun' => $tahun]);
    }

    public function grafik()
    {
       $data = DB::table('presensi')
                ->select('idbulan', DB::raw('sum(hadir) as hadir'))
                ->groupBy('idbulan')
                ->where('idtahun', '1')
                ->get();
        $chart = Charts::create('bar', 'highcharts')
                ->title('Grafik Data Kehadiran Perbulan pada Tahun 2016')
                ->elementLabel("Total Kehadiran Perbulan")
                ->dimensions(900, 500)
                ->responsive(false)
                ->labels($data->pluck('idbulan'))
                ->values($data->pluck('hadir'));

        $data = DB::table('presensi')
                ->select('idbulan', DB::raw('sum(hadir) as hadir'))
                ->groupBy('idbulan')
                ->where('idtahun', '2')
                ->get();
        $chart1 = Charts::create('bar', 'highcharts')
                ->title('Grafik Data Kehadiran Perbulan pada Tahun 2017')
                ->elementLabel("Total Kehadiran Perbulan")
                ->dimensions(900, 500)
                ->responsive(false)
                ->labels($data->pluck('idbulan'))
                ->values($data->pluck('hadir'));

        $data = DB::table('presensi')
                ->select('idbulan', DB::raw('sum(hadir) as hadir'))
                ->groupBy('idbulan')
                ->where('idtahun', '3')
                ->get();
        $chart2 = Charts::create('bar', 'highcharts')
                ->title('Grafik Data Kehadiran Perbulan pada Tahun 2018')
                ->elementLabel("Total Kehadiran Perbulan")
                ->dimensions(900, 500)
                ->responsive(false)
                ->labels($data->pluck('idbulan'))
                ->values($data->pluck('hadir'));

        $data = DB::table('presensi')
                ->select('idbulan', DB::raw('sum(hadir) as hadir'))
                ->groupBy('idbulan')
                ->where('idtahun', '4')
                ->get();
        $chart3 = Charts::create('bar', 'highcharts')
                ->title('Grafik Data Kehadiran Perbulan pada Tahun 2019')
                ->elementLabel("Total Kehadiran Perbulan")
                ->dimensions(900, 500)
                ->responsive(false)
                ->labels($data->pluck('idbulan'))
                ->values($data->pluck('hadir'));

        $data = DB::table('presensi')
                ->select('idbulan', DB::raw('sum(hadir) as hadir'))
                ->groupBy('idbulan')
                ->where('idtahun', '5')
                ->get();
        $chart4 = Charts::create('bar', 'highcharts')
                ->title('Grafik Data Kehadiran Perbulan pada Tahun 2020')
                ->elementLabel("Total Kehadiran Perbulan")
                ->dimensions(900, 500)
                ->responsive(false)
                ->labels($data->pluck('idbulan'))
                ->values($data->pluck('hadir'));
        return view('presensi.grafik', ['chart' => $chart, 'chart1' => $chart1, 'chart2' => $chart2, 'chart3' => $chart3, 'chart4' => $chart4]);
    }

    public function cuti()
    {
        $cuti = Cuti::all();
        $status = Status::all();
        return view('presensi.cuti2', ['cuti' => $cuti, 'status' => $status]);
    }  

    public function editcuti($id)
    {
        $cuti = Cuti::find($id);
        $status = Status::all();
        return view('presensi.editcuti', ['cuti' => $cuti, 'status' => $status]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatecuti(Request $request, $id)
    {
       if(isset($request['simpanedit'])) {
        $cuti = Cuti::findOrFail($id);
        $this->validate($request, [
            'status' => 'required'
        ]);
        $input = $request->all();
        $cuti->fill($input)->save();
        alert()->success('Data Telah Diubah', 'Berhasil')->persistent('OK');
        return redirect('/admin/presensi/cuti');
        }
    }
}