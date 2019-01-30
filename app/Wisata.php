<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Gallery;

class Wisata extends Model
{
    protected $fillable = ['wisata_nama','wisata_artikel','wisata_gambar','wisata_daerah','wisata_alamat','wisata_golongan','map'];
   
    public function gallerys()
    {
        return $this->hasMany(Gallery::class);
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function bookmark()
    {
        return $this->hasMany(Bookmark::class);
    }

}
