@extends('layouts.dashboardLayout')

@section('subhead')
<h2>DASHBOARD ARTIKEL</h2>    
@endsection

@section('isi')
<div class="col-lg-12 col-md-12">
        <div class="table-responsive">
            <table class="table">
                <thead >
                    <tr>
                        <th style="width:5%;">#</th>
                        <th style="width:30%;">Judul</th>
                        <th style="width:30%;">Artikel</th>
                        <th style="width:15%;">Artikel</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($artikel as $index => $item)
                    <tr class="warning">
                        <td>{{ $index+1 }}</td>
                        <td>{{ $item->judul_artikel }}</td>
                        <td>{{ $item->isi_artikel }} </td>
                        <td>{{ $item->jenis_golongan }} </td>
                        <td>
                            <a href="{{route('artikel.edit', $item->id)}}" class="btn btn-warning">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('artikel.destroy', $item->id)}}" method="post">
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