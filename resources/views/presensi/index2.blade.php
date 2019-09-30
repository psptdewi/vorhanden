@extends('layouts.app2')
@section('content')
@include('sweet::alert')
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{ url('/admin/home') }}">Dashboard</a>
        </li>
      </ol>
      <div class="row">
        <div class="col-xl-6 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-thumbs-o-up"></i>
              </div>
              <div class="mr-5 text-center">Karyawan Paling Sering Hadir</div>
            </div>
            <a class="card-footer text-white clearfix small z-1 text-center">
              <span class="float-center" style="font-size: 15px;">{{$max}}</span>
            </a>
          </div>
        </div>
        <div class="col-xl-6 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-thumbs-o-down"></i>
              </div>
              <div class="mr-5 text-center">Karyawan Paling Sering Tidak Hadir</div>
            </div>
            <a class="card-footer text-white clearfix small z-1 text-center">
              <span class="float-center" style="font-size: 15px;">{{$min}}</span>
            </a>
          </div>
        </div>
        </div>
      </div>
    <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-pie-chart"></i> Grafik Presensi Karyawan</div>
        <div class="card-body">          
                {!! Charts::styles() !!}
                <div class="panel-body">
                    <div class="app" class="pull-left">
                            {!! $chart->html() !!}
                    </div>
                    <!-- End Of Main Application -->
                    {!! Charts::scripts() !!}
                    {!! $chart->script() !!}
                    <fieldset class="pull-right" style="margin-top: -400px;">
                        <table>
                        <tr>
                            <td align="left" valign="left">Keterangan :</td>
                        </tr><br>
                        <tr>
                            <td align="left" valign="left">1 : Januari</td>
                        </tr>
                        <tr>
                            <td align="left" valign="left">2 : Februari</td>
                        </tr>
                        <tr>
                            <td align="left" valign="left">3 : Maret</td>
                        </tr>
                        <tr>
                            <td align="left" valign="left">4 : April</td>
                        </tr>
                        <tr>
                            <td align="left" valign="left">5 : Mei</td>
                        </tr>
                        <tr>
                            <td align="left" valign="left">6 : Juni</td>
                        </tr>
                        <tr>
                            <td align="left" valign="left">7 : Juli</td>
                        </tr>
                        <tr>
                            <td align="left" valign="left">8 : Agustus</td>
                        </tr>
                        <tr>
                            <td align="left" valign="left">9 : September</td>
                        </tr>
                        <tr>
                            <td align="left" valign="left">10 : Oktober</td>
                        </tr>
                        <tr>
                            <td align="left" valign="left">11 : November</td>
                        </tr>
                        <tr>
                            <td align="left" valign="left">12 : Desember</td>
                        </tr>
                        </table>
                    </fieldset>
                </div>
                </div>
            </div>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Presensi Karyawan</div>
        <div class="card-body">          
          <div class="table-responsive">
            <table class="table table-bordered table-condensed" id="dataTable" width="100%" cellspacing="0">
              <br>
              <div>
                    <form form method="post" action="{{url('admin/category')}}">
                            {{csrf_field()}}
                            <div style="margin-left: 15px;">
                            Bulan :
                            <select name="idbulan">
                              <option>Pilih Bulan</option>
                                @foreach ($bulan as $bulans)
                                <option value="{{$bulans->id}}"
                                    >{{$bulans->nama_bulan}}</option>
                                @endforeach
                            </select>   
                        </div>
                        <div style="margin-left: 180px; margin-top: -30px;">
                            Tahun : 
                            <select name="idtahun">
                              <option>Pilih Tahun</option>
                                @foreach ($tahun as $tahuns)
                                <option value="{{$tahuns->id}}"
                                    >{{$tahuns->tahun}}</option>
                                @endforeach
                            </select>                                                      
                            <button class="btn " style="margin-left: 10px; color: #666666";>Lihat Data</button> </a> 
                        </div>
                    </form>
                    </div>
                    <button onclick="tambahData()" class="btn pull-right" type="button" style="margin-top: -40px;  margin-right: 150px; color:#666666"><i class="fa fa-plus"></i> Tambah Data</button>
                    <button onclick="uploadData()" class="btn pull-right" type="button" style="margin-top: -40px; color:#666666"><i class="fa fa-upload"></i> Upload Data</button>
                    <br>
              <thead>
                <tr valign="center" align="center">
                <td rowspan="2">No</td>
                <td rowspan="2">Nama Karyawan</td>
                <td colspan="31">Tanggal</td>
                <td rowspan="2">Hadir</td>
                <td rowspan="2">Tidak Hadir</td>
                <td rowspan="2">Izin</td>
                <td rowspan="2">Opsi</td>
              </tr>
              <tr valign="center" align="center">
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>7</td>
                <td>8</td>
                <td>9</td>
                <td>10</td>
                <td>11</td>
                <td>12</td>
                <td>13</td>
                <td>14</td>
                <td>15</td>
                <td>16</td>
                <td>17</td>
                <td>18</td>
                <td>19</td>
                <td>20</td>
                <td>21</td>
                <td>22</td>
                <td>23</td>
                <td>24</td>
                <td>25</td>
                <td>26</td>
                <td>27</td>
                <td>28</td>
                <td>29</td>
                <td>30</td>
                <td>31</td>
              </tr>
              </thead>
              <tbody>
                <?php $no = 0;?>
                        @foreach ($presensi as $presensis)
                        <?php $no++ ;?>
                            <tr align="center" valign="center">
                                <td>{{ $no }}</td>
                                <td>{{ $presensis->nama_karyawan }}</td>
                                <td>{{ $presensis->satu }}</td>
                                <td>{{ $presensis->dua }}</td>
                                <td>{{ $presensis->tiga }}</td>
                                <td>{{ $presensis->empat }}</td>
                                <td>{{ $presensis->lima }}</td>
                                <td>{{ $presensis->enam }}</td>
                                <td>{{ $presensis->tujuh }}</td>
                                <td>{{ $presensis->delapan }}</td>
                                <td>{{ $presensis->sembilan }}</td>
                                <td>{{ $presensis->sepuluh }}</td>
                                <td>{{ $presensis->sebelas }}</td>
                                <td>{{ $presensis->duabelas }}</td>
                                <td>{{ $presensis->tigabelas }}</td>
                                <td>{{ $presensis->empatbelas }}</td>
                                <td>{{ $presensis->limabelas }}</td>
                                <td>{{ $presensis->enambelas }}</td>
                                <td>{{ $presensis->tujuhbelas }}</td>
                                <td>{{ $presensis->delapanbelas }}</td>
                                <td>{{ $presensis->sembilanbelas }}</td>
                                <td>{{ $presensis->duapuluh }}</td>
                                <td>{{ $presensis->duapuluhsatu }}</td>
                                <td>{{ $presensis->duapuluhdua }}</td>
                                <td>{{ $presensis->duapuluhtiga }}</td>
                                <td>{{ $presensis->duapuluhempat }}</td>
                                <td>{{ $presensis->duapuluhlima }}</td>
                                <td>{{ $presensis->duapuluhenam }}</td>
                                <td>{{ $presensis->duapuluhtujuh }}</td>
                                <td>{{ $presensis->duapuluhdelapan }}</td>
                                <td>{{ $presensis->duapuluhsembilan }}</td>
                                <td>{{ $presensis->tigapuluh }}</td>
                                <td>{{ $presensis->tigapuluhsatu }}</td>
                                <td>{{ $presensis->hadir }}</td>
                                <td>{{ $presensis->total_tidak_hadir }}</td>
                                <td>{{ $presensis->total_izin }}</td>
                                <td>
                                    <a href="{{ url('/admin/presensi/'.$presensis->id.'/edit')}}" class="btn btn-link"><i class="fa fa-pencil-square-o"></i> Edit</a>
                                    <form method="post" action="{{ url('/admin/presensi/'.$presensis->id)}}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE')}}
                                    <button onclick="deleteData()" type="submit" name="hapus" class="btn btn-link" align="right" onsubmit="deleteData()"><i class="fa fa-trash-o"></i> Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
    
    <script type="text/javascript">
            function deleteData(){
              event.preventDefault(); 
              var form = event.target.form; 
                      swal({
                title: "Anda yakin?",
                text: "Data Yang Sudah Terhapus Tidak Bisa Dikembalikan Lagi!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Ya, Hapus!",
                cancelButtonText: "Cancel!",
                closeOnConfirm: false,
                closeOnCancel: false
              },
              function(isConfirm){
                if (isConfirm) {
                  swal("Terhapus!", "Data Berhasil Dihapus.", "success");
                  form.submit();          
                } else {
                  swal("Cancelled", "Data Tidak Jadi Dihapus :)", "error");
                }
              });
              }
          </script>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
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