@extends('layouts.app3')
@section('content')
@include('sweet::alert')
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{ url('/home') }}">Data Cuti</a>
        </li>
        <li class="breadcrumb-item active">Form Cuti</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-file-text"></i> Form Cuti Karyawan</div>
        <div class="card-body">          
    <main role="main" class="col-sm-9 ml-sm-auto col-md-11 pt-3">
        <div class="panel">
            <div class="panel-body">
                    <form method="post" action="{{url('cuti')}}">
                            {{csrf_field()}}
                    <fieldset style="width: 500px;margin: auto;padding: 5px;">
                        <table>
                            <tr>
                                <td>ID</td>
                                <td>:</td>
                                <td><input type="text" name="id" required></td>
                            </tr>
                            <tr>
                                <td>Nama Karyawan</td>
                                <td>:</td>
                                <td><input type="text" name="nama_karyawan" required></td>
                            </tr>
                            <tr>
                                <td>Mulai Cuti</td>
                                <td>:</td>
                                <td><input type="date" name="mulai_cuti" required></td>
                            </tr>
                            <tr>
                                <td>Selesai Cuti</td>
                                <td>:</td>
                                <td><input type="date" name="selesai_cuti" required></td>
                            </tr>
                        
                            <tr>
                                <td>Alasan</td>
                                <td>:</td>
                                <td><textarea name="alasan" rows="5" cols="40" required></textarea></td>        
                                </tr>
                        </table>
                        <br>
                        <button type="submit" name="simpan" class="btn" style="margin:5px 0 0 140px;color: #666666">Simpan Data</button>
                    </fieldset>
                </form>
            </div>
            </div>
        </main>
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
    @endsection