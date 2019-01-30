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
                        <th style="width:30%;">Topik</th>
                        <th style="width:40%;">Pesan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($inboxs as $inbox)
                        <tr class="warning">
                        <td>1</td>
                        <td>{{ $inbox->topik }}</td>
                        <td>{{str_limit($inbox->pesan), 200, '...'}}</td>
                        <td><a href="#" class="btn btn-info">Show</a> <a href="#" class="btn btn-danger">Delete</a></td>
                        
                    </tr>
                    @endforeach
                    
                    
                </tbody>
            </table>
        </div>
    </div>
@endsection