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
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-calendar"></i> Data Cuti Karyawan</div>
        <div class="card-body">          
          <div class="table-responsive">
            <table class="table table-bordered table-condensed" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr valign="center" align="center">
                  <td>No</td>
                  <td>Nama Karyawan</td>
                  <td>Mulai Cuti</td>
                  <td>Selesai Cuti</td>
                  <td>Alasan</td>
                  <td>Status</td>
              </tr>
              </thead>
              <tbody>
                <?php $no = 0;?>
                        @foreach ($cuti as $cutis)
                        <?php $no++ ;?>
                            <tr align="center" valign="center">
                                <td>{{ $no }}</td>
                                <td>{{ $cutis->nama_karyawan}}</td>
                                <td>{{ date('d M Y', strtotime($cutis->mulai_cuti))}}</td>
                                <td>{{ date('d M Y', strtotime($cutis->selesai_cuti))}}</td>
                                <td>{{ $cutis->alasan}}</td>    
                                <td><input type="checkbox"<?php if($cutis->status==1){echo "checked";}?>> Setuju
                                  <br>
                                <input type="checkbox"<?php if($cutis->status==2){echo "checked";}?>> Tidak Setuju</td>  
                                </tr>           
                        @endforeach
                      </tbody>
                    </table>
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