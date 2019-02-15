@extends('layouts.dashboardLayout')

@section('subhead')
    <h2>GALLERI</h2>
@endsection

@section('isi')
<div class="col-lg-12 col-md-12">
        <div class="table-responsive">
            <table class="table">
                <thead >
                    <tr>
                        <th style="width:10%;">#</th>
                        <th style="width:10%;">Tanggal</th>
                        <th style="width:40%; text-align:center;">Requet Galleri</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($galeri as $index=> $item)
                        <tr class="warning">
                        <td>{{ $index+1 }}</td>
                        <td> {{ $item->created_at }} </td>
                        <td style="text-align:center"><img src="{{ URL::asset($item->gallery_gambar) }}"  style="heigh:100px; width:100px;"> </td>
                        {{-- <td>{{str_limit($inbox->pesan), 200, '...'}}</td> --}}
                        <td>    @if($item->status == '1')
                                    Di Setujui
                                @elseif ($item->status == '0')
                                    Request 
                                @endif
                        </td>
                        <td> <form action="{{ route('galleri.update', $item->id )}}" method="post">

                                <button class="btn btn-theme btn-primary" type="submit">Setujui</button>
                                {{ csrf_field() }}
                                {{ method_field('PATCH') }}
                            </form> 
                            <form action="{{ route('galleri.destroy', $item->id)}}" method="post">
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