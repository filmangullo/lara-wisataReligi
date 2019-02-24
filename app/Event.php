<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['wisata_id', 'nama_event', 'gambar_event', 'tanggal_event', 'jam_event', 'golongan'];

    public function wisata()
    {
        return $this->belongsTo(Wisata::class);
    }
}
