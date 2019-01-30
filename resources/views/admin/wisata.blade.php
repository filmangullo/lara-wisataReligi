@extends('layouts.dashboardLayout')

@section('subhead')
<h2>DASHBOARD WISATA</h2>    
@endsection

@section('isi')
<div class="col-lg-12 col-md-12">
        <div class="table-responsive">
            <table class="table">
                <thead >
                    <tr>
                        <th style="width:5%;">#</th>
                        <th style="width:30%;">Judul</th>
                        <th style="width:30%;">Daerah</th>
                        <th style="width:15%;">Golongan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($wisatas as $index => $item)
                    <tr class="warning">
                        <td>{{ $index+1 }}</td>
                        <td>{{ $item->wisata_nama }}</td>
                        <td>{{ $item->wisata_daerah }}</td>
                        <td>{{ $item->wisata_golongan }}</td>
                        <td>
                            <a href="{{route('wisata.edit', $item->id)}}" class="btn btn-warning">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('wisata.destroy', $item->id)}}" method="post">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form> 
                        </td>
                        
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection