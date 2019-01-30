<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wisata;
use Image;
use DB;

class PostWisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.wisataPost');
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
        if ($request->hasFile('wisata_gambar')) {
            $wisata_gambar = $request->file('wisata_gambar');
            $filename = time() . '.' . $wisata_gambar->getClientOriginalExtension();
            Image::make($wisata_gambar)->resize(850, 637)->save(public_path('/img/wisata/' . $filename));
        

        Wisata::create([
            'wisata_nama' => request('wisata_nama'),
            'wisata_artikel' => request('wisata_artikel'),
            'wisata_gambar' => '/img/wisata/'.$filename,
            'wisata_daerah' => request('wisata_daerah'),
            'wisata_alamat' => request('wisata_alamat'),
            'wisata_golongan' => request('wisata_golongan'),
            'map' => request('map')
        ]);
        }
        return redirect()->back();
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
        //
    }
}
