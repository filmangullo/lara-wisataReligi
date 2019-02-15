<?php

namespace App\Http\Controllers;

use App\Tahun;
use App\Bulan;
use App\Tanggal;

use Illuminate\Http\Request;
use Carbon;

class KalenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $now = Carbon\Carbon::now()->format('m');

        $now_day = Carbon\Carbon::now()->format('d');

        // dd($now);
        $next = $now + 1;
        // dd ($next);
        $bulanAktif = Bulan::find($now);

        // // dd($bulanAktif);

        return view('kalender', compact('bulanAktif','now_day'));
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
     * @param  \App\Kalender  $kalender
     * @return \Illuminate\Http\Response
     */
    public function show(Kalender $kalender)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kalender  $kalender
     * @return \Illuminate\Http\Response
     */
    public function edit(Kalender $kalender)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kalender  $kalender
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kalender $kalender)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kalender  $kalender
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kalender $kalender)
    {
        //
    }

    public function jan()
    {
        // dd ($next);
        $bulanJan = Bulan::find('1');

        // dd($bulanAktif);

        return view('kalender.januari', compact('bulanJan'));
    }

    public function feb()
    {
        // dd ($next);
        $bulanFeb = Bulan::find('2');

        // dd($bulanAktif);

        return view('kalender.februari', compact('bulanFeb'));
    }

    public function mar()
    {
        // dd ($next);
        $bulanMar = Bulan::find('3');

        // dd($bulanAktif);

        return view('kalender.maret', compact('bulanMar'));
    }

    public function apr()
    {
        // dd ($next);
        $bulanApr = Bulan::find('4');

        // dd($bulanAktif);

        return view('kalender.april', compact('bulanApr'));
    }

    public function mei()
    {
        // dd ($next);
        $bulanMei = Bulan::find('5');

        // dd($bulanAktif);

        return view('kalender.mei', compact('bulanMei'));
    }

    public function jun()
    {
        // dd ($next);
        $bulanJun = Bulan::find('6');

        // dd($bulanAktif);

        return view('kalender.juni', compact('bulanJun'));
    }

    public function jul()
    {
        // dd ($next);
        $bulanJul = Bulan::find('7');

        // dd($bulanAktif);

        return view('kalender.juli', compact('bulanJul'));
    }

    public function agu()
    {
        // dd ($next);
        $bulanAgu = Bulan::find('8');

        // dd($bulanAktif);

        return view('kalender.agustus', compact('bulanAgu'));
    }

    public function sep()
    {
        // dd ($next);
        $bulanSep = Bulan::find('9');

        // dd($bulanAktif);

        return view('kalender.september', compact('bulanSep'));
    }

    public function okt()
    {
        // dd ($next);
        $bulanOkt = Bulan::find('10');

        // dd($bulanAktif);

        return view('kalender.oktober', compact('bulanOkt'));
    }

    public function nov()
    {
        // dd ($next);
        $bulanNov = Bulan::find('11');

        // dd($bulanAktif);

        return view('kalender.november', compact('bulanNov'));
    }

    public function des()
    {
        // dd ($next);
        $bulanDes = Bulan::find('12');

        // dd($bulanAktif);

        return view('kalender.desember', compact('bulanDes'));
    }
}
