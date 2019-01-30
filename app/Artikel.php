<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    Protected $fillable = ['judul_artikel', 'isi_artikel', 'jenis_golongan'];
}
