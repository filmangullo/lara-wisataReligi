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
                        <td>{{$index->tanggal_id}} / {{$index->bulan_id}} / 2019</td>
                        <td>{{$index->nama_peristiwa}}</td>
                        <td> 
                            <form action="{{ route('peristiwa.destroy', $index->id)}}" method="post">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <td><button type="submit" class="btn btn-danger">Delete</button></td>
                                
                            </form>
                        </td>
                        
                    </tr>
                    @endforeach
                    
                    
                </tbody>
            </table>
        </div>
    </div>
@endsection