<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kalender extends Model
{
    Protected $fillable = ['tahun_id','bulan_id','tanggal_id','nama_peristiwa'];

    public function tahuns()
    {
        return $this->belongsTo(Tahun::class);
    }
    public function bulans()
    {
        return $this->belongsTo(Bulan::class);
    }
    public function tanggals()
    {
        return $this->belongsTo(Tanggal::class);
    }
}
