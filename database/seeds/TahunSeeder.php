<?php

use Illuminate\Database\Seeder;
use App\Tahun;

class TahunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tahun::create([
            'tahun' => '2016'
        ]);
        Tahun::create([
        	'tahun' => '2017'
        ]);
        Tahun::create([
            'tahun' => '2018'
        ]);
        Tahun::create([
            'tahun' => '2019'
        ]);
        Tahun::create([
            'tahun' => '2020'
        ]);
    }
}
