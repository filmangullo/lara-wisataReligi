<?php

use Illuminate\Database\Seeder;
use App\Bulan;

class AddBulan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['tahun_id'=>'1','nama_bulan'=>'Januari'],
            ['tahun_id'=>'1','nama_bulan'=>'Februari'],
            ['tahun_id'=>'1','nama_bulan'=>'Maret'],
            ['tahun_id'=>'1','nama_bulan'=>'April'],
            ['tahun_id'=>'1','nama_bulan'=>'Mei'],
            ['tahun_id'=>'1','nama_bulan'=>'Juni'],
            ['tahun_id'=>'1','nama_bulan'=>'Juli'],
            ['tahun_id'=>'1','nama_bulan'=>'Agustus'],
            ['tahun_id'=>'1','nama_bulan'=>'September'],
            ['tahun_id'=>'1','nama_bulan'=>'Oktober'],
            ['tahun_id'=>'1','nama_bulan'=>'November'],
            ['tahun_id'=>'1','nama_bulan'=>'Desember'],
        ];
        foreach ($data as $key => $value) {
        	Bulan::create($value);
        }
    }
}
