@extends('layouts.app2')
@section('content')
@include('sweet::alert')
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-pencil-square-o"></i> Edit Cuti</div>
        <div class="card-body">          
        <div class="panel">
            <div class="panel-body">
                <form method="post" action="{{ url('/admin/cuti/'.$cuti->id)}}" style="margin-top: 40px;">
                            {{ method_field('PUT')}}
                            {{ csrf_field() }}
                        <div class="table-responsive">
                        <table class="table table-bordered table-condensed" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr valign="center" align="center">
                              <td>Nama Karyawan</td>
                              <td>Mulai Cuti</td>
                              <td>Selesai Cuti</td>
                              <td>Alasan</td>
                              <td>Status</td>
                          </tr>
                          </thead>
                            <tr align="center" valign="center">
                                <td>{{ $cuti->nama_karyawan}}</td>  
                                <td>{{ date('d M Y', strtotime($cuti->mulai_cuti))}}</td>
                                <td>{{ date('d M Y', strtotime($cuti->selesai_cuti))}}</td>
                                <td>{{ $cuti->alasan}}</td>
                                <td>
                                  <select name="status">
                                  @foreach ($status as $statuss)
                                  <option name="status" value="{{$statuss->id}}">{{$statuss->status}}</option>
                                  @endforeach
                                </select></td>
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

<footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Klimaks</small>
        </div>
      </div>
    </footer>
   @endsection