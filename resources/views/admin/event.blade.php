@extends('layouts.dashboardLayout')

@section('subhead')
<h2>DASHBOARD EVENT</h2>    
@endsection

@section('isi')
<div class="col-lg-12 col-md-12">
        <div class="table-responsive">
            <table class="table">
                <thead >
                    <tr>
                        <th style="width:5%;">#</th>
                        <th style="width:30%;">Nama</th>
                        <th style="width:30%;">Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($event as $index => $item)
                    <tr class="warning">
                        <td>{{ $index+1 }}</td>
                        <td>{{ $item->nama_event }}</td>
                        <td>{{ $item->tanggal_event }} </td>
                        <td>
                            <form action="{{ route('event.destroy', $item->id)}}" method="post">
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