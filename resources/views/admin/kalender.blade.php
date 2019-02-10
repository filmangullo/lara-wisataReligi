@extends('layouts.dashboardLayout')

@section('subhead')
    <h2>PERITIWA KALENDER/h2>
@endsection

@section('isi')
<div class="col-lg-12 col-md-12">
        <div class="table-responsive">
            <table class="table">
                <thead >
                    <tr>
                        <th style="width:10%;">#</th>
                        <th style="width:30%;">Tanggal</th>
                        <th style="width:40%;">Peristiwa</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($peristiwa as $no=> $index)
                        <tr class="warning">
                        <td>{{$no+1}}</td>
                        @foreach ($peristiwa as $bulan)
                        <td>{{$bulan->nama_bulan}}</td>
                        @endforeach
                        <td>{{$index->nama_peristiwa}}</td>
                        <td><a href="#" class="btn btn-info">Show</a> <a href="#" class="btn btn-danger">Delete</a></td>
                        
                    </tr>
                    @endforeach

                    @foreach ($peristiwa as $bulan)
                        <td>{{$bulan->nama_bulan}}</td>
                        @endforeach
                    
                    
                </tbody>
            </table>
        </div>
    </div>
@endsection