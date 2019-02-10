<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tanggal extends Model
{
    Protected $fillable = ['tahun_id','bulan_id','tanggal'];

    public function bulans()
    {
        return $this->hasMany(Bulan::class);
    }

    public function kalenders()
    {
        return $this->hasMany(Kalender::class);
    }
}
