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
        <div class="panel">
            <div class="panel-heading" style="background-color: #d9d9d9;color: #666666">Data Cuti Karyawan</div>
                <div class="panel-body">
                    <table border="1px solid" class="table-hover table-bordred table-striped" style="border: 1px solid #ddd;" align="center" valign="center">
                        <tr align="center" valign="center">
                            <td width="2%" bgcolor="lavender">No</td>
                            <td width="15%" bgcolor="lavender">Nama Karyawan</td>
                            <td width="5%" bgcolor="lavender">Mulai Cuti</td>
                            <td width="5%" bgcolor="lavender">Selesai Cuti</td>
                            <td width="25%" bgcolor="lavender">Alasan</td>
                        </tr>                 
                        <?php 
                        $no = 1;
                        ?>
                        @foreach ($cuti as $cutis)
                            <tr align="center" valign="center">
                                <td>{{ $no++ }}</td>
                                <td>{{ $cutis->nama_karyawan}}</td>
                                <td>{{ date('d M Y', strtotime($cutis->mulai_cuti))}}</td>
                                <td>{{ date('d M Y', strtotime($cutis->selesai_cuti))}}</td>
                                <td>{{ $cutis->alasan}}</td>
                            </tr>
                         @endforeach
                    </table>
                </div>
            </div>
        </main>
@endsection