<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Wisata;
use App\User;

class Bookmark extends Model
{
    protected $fillable = ['wisata_id', 'user_id', 'wisata_nama','wisata_artikel','wisata_gambar','wisata_daerah','wisata_alamat','wisata_golongan','map'];

    public function wisatas()
    {
        return $this->belongsTo(Wisata::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
