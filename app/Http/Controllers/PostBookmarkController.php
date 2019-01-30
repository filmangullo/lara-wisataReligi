<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Wisata;
use App\Bookmark;
use App\User;



class PostBookmarkController extends Controller
{
    public function index() {
        $dataBookmarks = Bookmark::All();

        $user   = Auth::user();

        return view ('bookmark', compact('dataBookmarks','user'));
    }

    public function store(Request $request, Wisata $wisata)
    {   
       
        Bookmark::create([
            'wisata_id' => $wisata->id,
            'user_id' => auth()->user()->id,
            'wisata_nama' => $request->wisata_nama,
            'wisata_artikel' => $request->wisata_artikel,
            'wisata_gambar' => $request->wisata_gambar,
            'wisata_daerah' => $request->wisata_daerah,
            'wisata_alamat' => $request->wisata_alamat,
            'wisata_golongan' => $request->wisata_golongan,
            'map' => $request->map,
        ]);

        return redirect()->back();
    }
}
