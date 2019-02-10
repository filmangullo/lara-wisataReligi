<?php

use Illuminate\Database\Seeder;
use App\Tahun;

class AddTahun2019 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        	['nama_tahun'=>'2019'],
        ];
        foreach ($data as $key => $value) {
        	Tahun::create($value);
        }
    }
}
