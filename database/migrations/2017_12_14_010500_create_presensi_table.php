<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresensiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presensi', function (Blueprint $table) {
            $table->integer('id')->nullable();
            $table->integer('idtahun')->nullable()->unsigned();
            $table->foreign('idtahun')->references('id')->on('tahun');
            $table->integer('idbulan')->nullable()->unsigned();
            $table->foreign('idbulan')->references('id')->on('bulan');
            $table->string('nama_karyawan')->nullable();
            $table->integer('satu')->nullable();
            $table->integer('dua')->nullable();
            $table->integer('tiga')->nullable();
            $table->integer('empat')->nullable();
            $table->integer('lima')->nullable();
            $table->integer('enam')->nullable();
            $table->integer('tujuh')->nullable();
            $table->integer('delapan')->nullable();
            $table->integer('sembilan')->nullable();
            $table->integer('sepuluh')->nullable();
            $table->integer('sebelas')->nullable();
            $table->integer('duabelas')->nullable();
            $table->integer('tigabelas')->nullable();
            $table->integer('empatbelas')->nullable();
            $table->integer('limabelas')->nullable();
            $table->integer('enambelas')->nullable();
            $table->integer('tujuhbelas')->nullable();
            $table->integer('delapanbelas')->nullable();
            $table->integer('sembilanbelas')->nullable();
            $table->integer('duapuluh')->nullable();
            $table->integer('duapuluhsatu')->nullable();
            $table->integer('duapuluhdua')->nullable();
            $table->integer('duapuluhtiga')->nullable();
            $table->integer('duapuluhempat')->nullable();
            $table->integer('duapuluhlima')->nullable();
            $table->integer('duapuluhenam')->nullable();
            $table->integer('duapuluhtujuh')->nullable();
            $table->integer('duapuluhdelapan')->nullable();
            $table->integer('duapuluhsembilan')->nullable();
            $table->integer('tigapuluh')->nullable();
            $table->integer('tigapuluhsatu')->nullable();
            $table->integer('hadir')->nullable();
            $table->integer('total_tidak_hadir')->nullable();
            $table->integer('total_izin')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('presensi');
    }
}
