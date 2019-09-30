<?php

use Illuminate\Database\Seeder;
use App\Bulan;

class BulanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bulan::create([
        	'nama_bulan' => 'Januari'
        ]);

        Bulan::create([
        	'nama_bulan' => 'Februari'
        ]);

        Bulan::create([
        	'nama_bulan' => 'Maret'
        ]);

        Bulan::create([
        	'nama_bulan' => 'April'
        ]);

        Bulan::create([
        	'nama_bulan' => 'Mei'
        ]);

        Bulan::create([
        	'nama_bulan' => 'Juni'
        ]);

        Bulan::create([
        	'nama_bulan' => 'Juli'
        ]);

        Bulan::create([
        	'nama_bulan' => 'Agustus'
        ]);

        Bulan::create([
        	'nama_bulan' => 'September'
        ]);

        Bulan::create([
        	'nama_bulan' => 'Oktober'
        ]);

        Bulan::create([
        	'nama_bulan' => 'November'
        ]);

        Bulan::create([
        	'nama_bulan' => 'Desember'
        ]);
    }
}
