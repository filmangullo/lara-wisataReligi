<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Wisata;
use Image; 

class AdminEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = Event::all();
        return view('admin.event', compact('event'));
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
        $eventEdit = Event::find($id);

        $wisatas = Wisata::all();

        return view('admin.eventEdit', compact('eventEdit', 'wisatas'));
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
        if ($request->hasFile('gambar_event')) {
            $gambar_event = $request->file('gambar_event');
            $filename = time() . '.' . $gambar_event->getClientOriginalExtension();
            Image::make($gambar_event)->resize(850, 637)->save(public_path('/img/event/' . $filename));
        
            $updateEvent = Event::find($id);
            $updateEvent->update([
            'wisata_id' => request('wisata_id'),
            'nama_event' => request('nama_event'),
            'gambar_event' => '/img/event/'.$filename,
            'tanggal_event' => request('tanggal_event'),
            'jam_event' => request('jam_event'),
            'golongan' => request('golongan')
        ]);
        }
        return redirect()->back();       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eventDelete = Event::FindOrFail($id);
        $eventDelete -> delete();

        return redirect()->back();
    }
}
