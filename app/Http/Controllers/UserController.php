<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Cuti;
use Alert;
use App\Status;
class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * show dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cuti = Cuti::all();
        $status = Status::all();
        return view('user', ['cuti' => $cuti, 'status' => $status]);
    }
    public function create()
    {
        return view('formcuti');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->id;
        $nama_karyawan = $request->nama_karyawan;
        $mulai_cuti = $request->mulai_cuti;
        $selesai_cuti = $request->selesai_cuti;
        $alasan = $request->alasan;

        $cuti = new Cuti;
        if(isset($request['simpan'])) {
            $cuti->create([
                'id' => $id, 'nama_karyawan' => $nama_karyawan, 'mulai_cuti' => $mulai_cuti, 'selesai_cuti' => $selesai_cuti, 'alasan' => $alasan]);
            alert()->success('Data Telah Ditambahkan', 'Berhasil')->persistent('OK');
           return redirect('/home');
        }
        return $request->all();        
    }
}