@extends('layouts.dashboardLayout')

@section('subhead')
    <h2>USER CONTROL</h2>
@endsection

@section('isi')
<div class="col-lg-12 col-md-12">
        <div class="table-responsive">
            <table class="table">
                <thead >
                    <tr>
                        <th style="width:10%;">#</th>
                        <th style="width:30%;">Nama User</th>
                        <th style="width:40%;">Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($datas as $item)
                    @if ($item->admin == false)
                    <tr class="warning">
                        <td>1</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <form action="{{ route('user.destroy', $item->id)}}" method="post">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <td><button type="submit" class="btn btn-danger">Delete</button></td>
                            
                        </form>
                        
                    </tr>
                    @endif
                @endforeach
                     
                </tbody>
            </table>
        </div>
    </div>
@endsection