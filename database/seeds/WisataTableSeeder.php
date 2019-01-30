<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use app\Wisata;

class WisataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $wisatasize = 50;

        for($i = 1; $i <= $wisatasize; $i++){
            // insert data ke table pegawai menggunakan Faker
            $wisata = new Wisata();
            $wisata->wisata_nama = $faker->name;
            $wisata->wisata_artikel = $faker->paragraphs($nb = 3, $asText = false);
            $wisata->wisata_jenis = 1;
            $wisata->wisata_gambar = "/img/img-wisata/wisata_001.jpeg";
            $wisata->wisata_lokasi = $faker->address;
            $wisata->latitude = $faker->latitude;
            $wisata->longtitude = $faker->longitude;
            
            $wisata->save();
        
        }
    }
}
