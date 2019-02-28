<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;

class AdminArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Artikel::all();

        return view('admin.artikel', compact('artikel'));
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
    public function store(Request $request)
    {
        //
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
        $artikelEdit = Artikel::find($id);

        return view('admin.artikelEdit', compact('artikelEdit'));
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
        $updateArtikel = Artikel::find($id);

        $updateArtikel->update([
            'judul_artikel'     => request('judul_artikel'),
            'isi_artikel'       => request('isi_artikel'),
            'sumber'            => request('sumber'),
            'jenis_golongan'    => request('jenis_golongan')
        ]);

        return redirect('dashboards/artikel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikelDelete = Artikel::FindOrFail($id);
        $artikelDelete -> delete();

        return redirect()->back();
    }
}
