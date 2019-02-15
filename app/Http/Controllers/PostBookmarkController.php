<?php

namespace App\Http\Controllers;
use Auth;
use App\Wisata;
use App\Bookmark;
use App\User;

use Illuminate\Http\Request;

class PostBookmarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataBookmarks = Bookmark::All();

        $user   = Auth::user();

        return view ('bookmark', compact('dataBookmarks','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

        return redirect()->back()->with('successBookmark', 'Satu wisata telah di tambahkan di sebagai bookmark anda');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        $delete = Bookmark::FindOrFail($id);
        $delete -> delete();

        return redirect()->back();
    }
}
