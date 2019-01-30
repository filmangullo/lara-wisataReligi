<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Wisata;
use Image;
use App\Gallery;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Wisata::latest()->paginate(8);

        return view('wisata', compact('data'));

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
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Wisata $wisata)
    {
        return view('wisataDetail', compact('wisata'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function gallery(Wisata $wisata)
    {
        return view('gallery', compact('wisata'));
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function galleryUpload(Wisata $wisata)
    {
        return view('galleryUpload', compact('wisata'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function galleryAdd(Request $request, Wisata $wisata)
    {
        $this->validate($request, [
        'select_file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
      ]);

        $image = $request->file('select_file');
        $new_name = time() . '.' . $image->getClientOriginalExtension();
        // $image->move (public_path("img/img-wisata/gallery"), $new_name);
        // Image::make($image)->resize(2250, 1500)->save(storage_path('app/public/files/' . $new_name));
        Image::make($image)->resize(2250, 1500)->save(public_path('/storage/gallery/' . $new_name));

        Gallery::create([
          'wisata_id' => $wisata->id,
          'user_id' => auth()->id(),
          // 'gallery_gambar' => 'app/public/files/'.$new_name
          'gallery_gambar' => '/storage/gallery/'.$new_name
      ]);
        return redirect()->back()->with('success', 'Image Uploaded Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function event(Wisata $wisata)
    {
        return view('event', compact('wisata'));
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
