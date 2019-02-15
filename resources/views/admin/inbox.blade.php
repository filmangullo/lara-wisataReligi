@extends('layouts.dashboardLayout')

@section('subhead')
    <h2>INBOX</h2>
@endsection

@section('isi')
<div class="col-lg-12 col-md-12">
        <div class="table-responsive">
            <table class="table">
                <thead >
                    <tr>
                        <th style="width:10%;">#</th>
                        <th style="width:10%;">Tanggal</th>
                        <th style="width:30%;">Topik</th>
                        <th style="width:40%;">Pesan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($inboxs as $index=> $inbox)
                        <tr class="warning">
                        <td>{{ $index+1 }}</td>
                        <td>{{ $inbox->created_at }}</td>
                        <td>{{ $inbox->topik }}</td>
                        <td>{{ $inbox->pesan }}</td>
                        {{-- <td>{{str_limit($inbox->pesan), 200, '...'}}</td> --}}
                        <td> <form action="{{ route('kontak.destroy', $inbox->id)}}" method="post">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form> </td>
                        
                    </tr>
                    @endforeach
                    
                    
                </tbody>
            </table>
        </div>
    </div>
@endsection