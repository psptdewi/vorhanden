@extends('layouts.app2')
@section('content')
    <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{ url('/admin/home') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Grafik</li>
      </ol>
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
        <div class="card-body">          
                {!! Charts::styles() !!}
                <div class="panel-body">
                    <div class="app" class="pull-left">
                            {!! $chart1->html() !!}
                    </div>
                    <!-- End Of Main Application -->
                    {!! Charts::scripts() !!}
                    {!! $chart1->script() !!}
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
            <div class="card-body">          
                {!! Charts::styles() !!}
                <div class="panel-body">
                    <div class="app" class="pull-left">
                            {!! $chart2->html() !!}
                    </div>
                    <!-- End Of Main Application -->
                    {!! Charts::scripts() !!}
                    {!! $chart2->script() !!}
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
             <div class="card-body">          
                {!! Charts::styles() !!}
                <div class="panel-body">
                    <div class="app" class="pull-left">
                            {!! $chart3->html() !!}
                    </div>
                    <!-- End Of Main Application -->
                    {!! Charts::scripts() !!}
                    {!! $chart3->script() !!}
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
            <div class="card-body">          
                {!! Charts::styles() !!}
                <div class="panel-body">
                    <div class="app" class="pull-left">
                            {!! $chart4->html() !!}
                    </div>
                    <!-- End Of Main Application -->
                    {!! Charts::scripts() !!}
                    {!! $chart4->script() !!}
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