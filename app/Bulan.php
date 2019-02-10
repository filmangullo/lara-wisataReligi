<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bulan extends Model
{
    Protected $fillable = ['tahun_id','nama_bulan'];

    public function tahuns()
    {
        return $this->hasMany(Tahun::class);
    }

    public function tanggals()
    {
        return $this->hasOne(Tanggal::class);
    }

    public function kalenders()
    {
        return $this->hasMany(Kalender::class);
    }
}
