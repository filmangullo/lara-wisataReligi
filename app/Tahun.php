<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tahun extends Model
{
    Protected $fillable = ['nama_tahun'];

    public function bulans()
    {
        return $this->hasOne(Bulan::class);
    }

    public function kalenders()
    {
        return $this->hasMany(Kalender::class);
    }
}
