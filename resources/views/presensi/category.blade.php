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
        <li class="breadcrumb-item active">Data Presensi</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-calendar"></i> Hasil Data Karyawan Berdasarkan Bulan dan Tahun</div>
        <div class="card-body">          
          <div class="table-responsive">
            <table class="table table-bordered table-condensed" id="dataTable" width="100%" cellspacing="0">
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
   @endsection