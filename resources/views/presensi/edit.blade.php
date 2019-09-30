@extends('layouts.app2')
@section('content')
@include('sweet::alert')
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-pencil-square-o"></i>Edit Karyawan</div>
        <div class="card-body">          
        <div class="panel">
            <div class="panel-body">
                        <button onclick="tambahData()" class="btn pull-right" style="margin-top: 5px;color: #666666;  margin-right: 20px;"><i class="fa fa-plus"></i> Tambah Data</button>
                        <br>
                        <form method="post" action="{{ url('/admin/presensi/'.$presensi->id)}}" style="margin-top: 40px;">
                            {{ method_field('PUT')}}
                            {{ csrf_field() }}
                        <div class="table-responsive">
                        <table class="table table-bordered table-condensed" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr valign="center" align="center">
                              <td rowspan="2">Nama Karyawan</td>
                              <td colspan="31">Tanggal</td>
                              <td rowspan="2">Hadir</td>
                              <td rowspan="2">Tidak Hadir</td>
                              <td rowspan="2">Izin</td>
                          </tr>
                          <tr align="center" valign="center">
                            <td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td><td>11</td><td>12</td><td>13</td><td>14</td><td>15</td><td>16</td><td>17</td><td>18</td><td>19</td><td>20</td><td>21</td><td>22</td><td>23</td><td>24</td><td>25</td><td>26</td><td>27</td><td>28</td><td>29</td><td>30</td><td>31</td>
                        </tr>
                          </thead>
                            <tr align="center" valign="center">
                                <td><input type="text" name ="nama_karyawan" value="{{ $presensi->nama_karyawan }}" style="width: 110px; text-align: center;"></td>
                                <td><input type="text" name ="satu" value="{{ $presensi->satu }}" style="width: 50px; text-align: center;"></td>
                                <td><input type="text" name ="dua" value="{{ $presensi->dua }}" style="width: 50px; text-align: center;"></td>
                                <td><input type="text" name ="tiga" value="{{ $presensi->tiga }}" style="width: 50px; text-align: center;"></td>
                                <td><input type="text" name ="empat" value="{{ $presensi->empat }}" style="width: 50px; text-align: center;"></td>
                                <td><input type="text" name ="lima" value="{{ $presensi->lima }}" style="width: 50px; text-align: center;"></td>
                                <td><input type="text" name ="enam" value="{{ $presensi->enam }}" style="width: 50px; text-align: center;"></td>
                                <td><input type="text" name ="tujuh" value="{{ $presensi->tujuh }}" style="width: 50px; text-align: center;"></td>
                                <td><input type="text" name ="delapan" value="{{ $presensi->delapan }}" style="width: 50px; text-align: center;"></td>
                                <td><input type="text" name ="sembilan" value="{{ $presensi->sembilan }}" style="width: 50px; text-align: center;"></td>
                                <td><input type="text" name ="sepuluh" value="{{ $presensi->sepuluh }}" style="width: 50px; text-align: center;"></td>
                                <td><input type="text" name ="sebelas" value="{{ $presensi->sebelas }}" style="width: 50px; text-align: center;"></td>
                                <td><input type="text" name ="duabelas" value="{{ $presensi->duabelas }}" style="width: 50px; text-align: center;"></td>     
                                <td><input type="text" name ="tigabelas" value="{{ $presensi->tigabelas }}" style="width: 50px; text-align: center;"></td>     
                                <td><input type="text" name ="empatbelas" value="{{ $presensi->empatbelas }}" style="width: 50px; text-align: center;"></td>     
                                <td><input type="text" name ="limabelas" value="{{ $presensi->limabelas }}" style="width: 50px; text-align: center;"></td>     
                                <td><input type="text" name ="enambelas" value="{{ $presensi->enambelas }}" style="width: 50px; text-align: center;"></td>
                                <td><input type="text" name ="tujuhbelas" value="{{ $presensi->tujuhbelas }}" style="width: 50px; text-align: center;"></td>     
                                <td><input type="text" name ="delapanbelas" value="{{ $presensi->delapanbelas }}" style="width: 50px; text-align: center;"></td>     
                                <td><input type="text" name ="sembilanbelas" value="{{ $presensi->sembilanbelas }}" style="width: 50px; text-align: center;"></td>   
                                <td><input type="text" name ="duapuluh" value="{{ $presensi->duapuluh }}" style="width: 50px; text-align: center;"></td>     
                                <td><input type="text" name ="duapuluhsatu" value="{{ $presensi->duapuluhsatu }}" style="width: 50px; text-align: center;"></td>     
                                <td><input type="text" name ="duapuluhdua" value="{{ $presensi->duapuluhdua }}" style="width: 50px; text-align: center;"></td>     
                                <td><input type="text" name ="duapuluhtiga" value="{{ $presensi->duapuluhtiga }}" style="width: 50px; text-align: center;"></td>     
                                <td><input type="text" name ="duapuluhempat" value="{{ $presensi->duapuluhempat }}" style="width: 50px; text-align: center;"></td>   
                                <td><input type="text" name ="duapuluhlima" value="{{ $presensi->duapuluhlima }}" style="width: 50px; text-align: center;"></td>
                                <td><input type="text" name ="duapuluhenam" value="{{ $presensi->duapuluhenam }}" style="width: 50px; text-align: center;"></td>     
                                <td><input type="text" name ="duapuluhtujuh" value="{{ $presensi->duapuluhtujuh }}" style="width: 50px; text-align: center;"></td>
                                <td><input type="text" name ="duapuluhdelapan" value="{{ $presensi->duapuluhdelapan }}" style="width: 50px; text-align: center;"></td>
                                <td><input type="text" name ="duapuluhsembilan" value="{{ $presensi->duapuluhsembilan }}" style="width: 50px; text-align: center;"></td>
                                <td><input type="text" name ="tigapuluh" value="{{ $presensi->tigapuluh }}" style="width: 50px; text-align: center;"></td>
                                <td><input type="text" name ="tigapuluhsatu" value="{{ $presensi->tigapuluhsatu }}" style="width: 50px; text-align: center;"></td>   
                                <td><input type="text" name ="hadir" value="{{ $presensi->hadir }}" style="width: 50px; text-align: center;"></td>
                                <td><input type="text" name ="total_tidak_hadir" value="{{ $presensi->total_tidak_hadir }}" style="width: 50px; text-align: center;"></td> 
                                <td><input type="text" name ="total_izin" value="{{ $presensi->total_izin }}" style="width: 50px; text-align: center;"></td>         
                            </tr>
                        </table>
                    <br>
                    <div align="right">
                    <button type="submit" name="simpanedit" class="btn" align="right" style="color: #666666">Simpan Data</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

<footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Klimaks</small>
        </div>
      </div>
    </footer>

    <div class="modal" id="modal-upload" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
       <div class="modal-dialog modal-lg">
           <div class="modal-content">
               <form method="post" action="{{url('admin/presensi/upload')}}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                   {{csrf_field()}}
                   <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       </button>
                       <h3 class="modal-title">Upload Data Presensi</h3>
                   </div>
                                           
                   <div class="modal-body" style="margin-top: 10px">
                       <div class="form-group">
                           <label for="file" class="col-md-3 control-label">Upload</label>
                           <div class="col-md-6">
                               <input type="file" id="file" name="file" class="form-control" autofocus required>
                               <span class="help-block with-errors"></span>
                           </div>
                       </div>
                   </div>
                   <div class="modal-footer">
                       <button type="submit" class="btn btn-save" name="simpan" style="color:#666666">Submit</button>
                       <button type="button" class="btn btn-default" data-dismiss="modal" style="color:#666666">Cancel</button>
                   </div>
               </form>
           </div>
       </div>
   </div>
   <script type="text/javascript">
       function uploadData(){
        $('#modal-upload').modal('show');
        $('#modal-upload form')[0].reset();
       }
   </script>

   <div class="modal" id="modal-tambahdata" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
       <div class="modal-dialog modal-lg">
           <div class="modal-content">
               <form method="post" action="/vorhanden/public/admin/presensi">
                            {{csrf_field()}}
                   <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       </button>
                       <h3 class="modal-title">Tambah Data Presensi</h3>
                   </div>
                   <div class="modal-body" style="margin-top: 10px">
                       <div class="form-group">
                           <div>
                            <div>
                            Bulan :
                            <select name="idbulan">
                              <option>Pilih Bulan</option>
                                @foreach ($bulan as $bulans)
                                <option value="{{$bulans->id}}"
                                    >{{$bulans->nama_bulan}}</option>
                                @endforeach
                            </select>   
                        </div>
                        <div style="margin-left: 170px; margin-top: -25px;">
                            Tahun : 
                            <select name="idtahun">
                              <option>Pilih Tahun</option>
                                @foreach ($tahun as $tahuns)
                                <option value="{{$tahuns->id}}"
                                    >{{$tahuns->tahun}}</option>
                                @endforeach
                            </select>                   
                        </div>
                        <fieldset style="margin: auto; padding: 5px; width: 500px">
                        <table align="center">
                        <tr>
                            <td align="center" valign="center">ID</td>
                            <td style="padding: 5px;">: </td>
                            <td><input type="text" name ="id" placeholder="Masukkan ID" required></td>
                        </tr>
                        <tr>
                            <td align="center" valign="center">Nama Karyawan</td>
                            <td style="padding: 5px;">: </td>
                            <td><input type="text" name ="nama_karyawan" placeholder="Masukkan Nama" required></td>
                        </tr>
                        </table>
                      </fieldset>
                      </div>
                    </div>
                    <div class="modal-footer">
                       <button type="submit" name="simpan" class="btn" style="margin:0px 0 0 140px; color:#666666;">Simpan Data</button>
                       <button type="button" class="btn btn-default" data-dismiss="modal" style="color:#666666">Cancel</button>
                   </div>
                  </div>
                 </form>
           </div>
       </div>
   </div>
   <script type="text/javascript">
       function tambahData(){
        $('#modal-tambahdata').modal('show');
        $('#modal-tambahdata form')[0].reset();
       }
   </script>
   @endsection