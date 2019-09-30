@extends('layouts.app')

@section('content')

<nav class="col-sm-3 col-md-1 d-none d-sm-block bg-light sidebar" style="background-color: white">
    <ul class="nav nav-pills flex-column">
        <li class="nav-item">
            <a class="nav-link active" href="/vorhanden/public/admin/home" style="color: #666666;">Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="/vorhanden/public/admin/presensi/show" style="color: #666666;">Data</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="/vorhanden/public/admin/presensi/grafik" style="color: #666666;">Grafik</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="/vorhanden/public/admin/presensi/cuti" style="color: #666666;">Cuti</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="{{ route('register') }}" style="color: #666666;">Register User</a>
        </li>
    </ul>
</nav>

<main role="main" class="col-sm-9 ml-sm-auto col-md-11 pt-3">        
    <div class="row">
    <div class="col-lg-4 col-md-6">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3"></div>
                    <div class="col-xs-12 text-center">Karyawan Paling Sering Hadir</div>
                        </div>
                    </div>
                        <div class="panel-footer" style="background-color: white" >
                            <div align="center">{{$max}}</div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-warning">
                    <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3"></div>
                        <div class="col-xs-12 text-center" style="color: #666666">Karyawan Paling Sering Tidak Hadir</div>
                            </div>
                        </div>
                            <div style="background-color: white" class="panel-footer">
                                <div align="center" style="color: #666666">{{$min}}</div>
                                <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="panel" style="background-color: #d9d9d9">
                    <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3"></div>
                        <div class="col-xs-12 text-center">Hari Karyawan Paling Banyak Tidak Hadir</div>
                            </div>
                        </div>
                            <div class="panel-footer" align="center" style="background-color: white" >
                                <a href="/vorhanden/public/admin/presensi/show"><button type="submit" class="btn" align="right" style="color: black; background-color: #d9d9d9">Lihat Data</button></a>
                                <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>

        <div class="panel">
            <div class="panel-heading" style="color: #666666; background-color: #d9d9d9;">Data Presensi Karyawan</div>
                <div class="panel-body">
                    <div>
                    <form form method="post" action="{{url('admin/category')}}">
                            {{csrf_field()}}
                            <div style="margin-left: 0px;">
                            Bulan :
                            <select name="idbulan">
                              <option>Pilih Bulan</option>
                                @foreach ($bulan as $bulans)
                                <option value="{{$bulans->id}}"
                                    >{{$bulans->nama_bulan}}</option>
                                @endforeach
                            </select>   
                        </div>
                        <div style="margin-left: 150px; margin-top: -28px;">
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

                            <form method="post" action="{{url('admin/search')}}" class="navbar-form" role="search">
                                {{csrf_field()}}
                            <div class="input-group custom-search-form">
                                <input type="text" name="search" style="margin-left: -15px; margin-top: 4px;" placeholder="Pencarian Nama">
                                <span class="input-group-btn"><button type="submit" class="btn" style="margin-left: 10px;color: #666666">Pencarian</button></span>
                            </div>
                        </form>
                    </div>
                    <button onclick="uploadData()" class="btn pull-right" style="margin-top: -45px;color:#666666"> Upload Data</button>
                        <br>
                        <table id="users-table" border="1px solid" class="table-hover table-bordred table-striped" style="border: 1px solid #ddd;">
                        <tr align="center" valign="center">
                            <td bgcolor="lavender" rowspan="2" style="color: #389bd8;">No</td>
                            <td width="12%" bgcolor="lavender" rowspan="2" style="color: #389bd8;">@sortablelink('nama_karyawan', 'Nama Karyawan')</td>
                            <td bgcolor="lavender" colspan="31" style="color: #389bd8;">Tanggal</td>
                            <td width="4%" bgcolor="lavender" rowspan="2">@sortablelink('hadir')</td>
                            <td width="4%" bgcolor="lavender" rowspan="2" style="color: #389bd8;">@sortablelink('total_tidak_hadir', 'Tidak Hadir')</td>
                            <td width="4%" bgcolor="lavender" rowspan="2" style="color: #389bd8;">@sortablelink('total_izin', 'Izin')</td>
                            <td width="4%" bgcolor="lavender" rowspan="2" style="color: #389bd8;">Opsi</td>
                        </tr>
                        <tr align="center" valign="center" style="color: #389bd8;" bgcolor="lavender">
                            <td width="2%">@sortablelink('satu', '1')</td><td width="2%">@sortablelink('dua', '2')</td><td width="2%">@sortablelink('tiga', '3')</td><td width="2%">@sortablelink('empat', '4')</td><td width="2%">@sortablelink('lima', '5')</td><td width="2%">@sortablelink('enam', '6')</td><td width="2%">@sortablelink('tujuh', '7')</td><td width="2%">@sortablelink('delapan', '8')</td><td width="2%">@sortablelink('sembilan', '9')</td><td>@sortablelink('sepuluh', '10')</td><td>@sortablelink('sebelas', '11')</td><td>@sortablelink('duabelas', '12')</td><td>@sortablelink('tigabelas', '13')</td><td>@sortablelink('empatbelas', '14')</td><td>@sortablelink('limabelas', '15')</td><td>@sortablelink('enambelas', '16')</td><td>@sortablelink('tujuhbelas', '17')</td><td>@sortablelink('delapanbelas', '18')</td><td>@sortablelink('sembilanbelas', '19')</td><td>@sortablelink('duapuluh', '20')</td><td>@sortablelink('duapuluhsatu', '21')</td><td>@sortablelink('duapuluhdua', '22')</td><td>@sortablelink('duapuluhtiga', '23')</td><td>@sortablelink('duapuluhempat', '24')</td><td>@sortablelink('duapuluhlima', '25')</td><td>@sortablelink('duapuluhenam', '26')</td><td>@sortablelink('duapuluhtujuh', '27')</td><td>@sortablelink('duapuluhdelapan', '28')</td><td>@sortablelink('duapuluhsembilan', '29')</td><td>@sortablelink('tigapuluh', '30')</td><td>@sortablelink('tigapuluhsatu', '31')</td>
                        </tr>
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
                                    <a href="{{ url('/admin/presensi/'.$presensis->id.'/edit')}}" class="btn btn-link">Edit</a>
                                    <form method="post" action="{{ url('/admin/presensi/'.$presensis->id)}}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE')}}
                                        <button onclick="deleteData()" type="submit" name="hapus" class="btn btn-link" align="right" onsubmit="deleteData()">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    <br>
                    <button onclick="tambahData()" class="btn pull-left" style="color:#666666">Tambah Data</button>
                    <div class="pull-right" style="margin-top: -25px;">  
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

            <script type="text/javascript">
                 $(function() {
        $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: 'http://localhost/vorhanden/public/admin/home/get_datatable'
        });
    });
            </script>

    <div class="panel">
                <div class="panel-heading" style="background-color: #d9d9d9;color: #666666">Grafik Karyawan</div>
                {!! Charts::styles() !!}
                <div class="panel-body">
                    <div class="app" class="pull-left">
                            {!! $chart->html() !!}
                    </div>
                    <!-- End Of Main Application -->
                    {!! Charts::scripts() !!}
                    {!! $chart->script() !!}
                    <fieldset class="pull-right" style="margin-top: -400px; margin-right: 60px;">
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
        </main>
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
                       <button type="submit" class="btn btn-primary btn-save" name="simpan">Submit</button>
                       <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
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
                            <div style="margin-left: 0px;">
                            Bulan :
                            <select name="idbulan">
                              <option>Pilih Bulan</option>
                                @foreach ($bulan as $bulans)
                                <option value="{{$bulans->id}}"
                                    >{{$bulans->nama_bulan}}</option>
                                @endforeach
                            </select>   
                        </div>
                        <div style="margin-left: 150px; margin-top: -22px;">
                            Tahun : 
                            <select name="idtahun">
                              <option>Pilih Tahun</option>
                                @foreach ($tahun as $tahuns)
                                <option value="{{$tahuns->id}}"
                                    >{{$tahuns->tahun}}</option>
                                @endforeach
                            </select>                   
                        </div>
                        <br>
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
                       </div>
                   </div>
                   <div class="modal-footer">
                       <button type="submit" name="simpan" class="btn btn-primary" style="margin:0px 0 0 140px;">Simpan Data</button>
                       @include('sweet::alert')
                       <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
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