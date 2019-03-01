@extends('layouts.dashboardLayout')

@section('subhead')
<h2>EVENT EDIT</h2>    
@endsection

@section('isi')
    <div class="col-md-12">
            <form action="{{ route('event.update', $eventEdit ) }}" method="post" role="form" class="contactForm" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-2 col-md-2">
                            <label>Nama Wisata</label>
                        </div>
                        <div class="col-lg-10 col-md-10">
                            
                        </div><div class="col-lg-10 col-md-10">
                            <select name="wisata_id" class="form-control">
                                @foreach ($wisatas as $wisata)
                                <option value="{{$wisata->id }}">{{$wisata->wisata_nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-2 col-md-2">
                            <label>Nama Event</label>
                        </div>
                        <div class="col-lg-10 col-md-10">
                            <input type="text" name="nama_event" id="judul_artikel" value="{{ $eventEdit->nama_event }}" placeholder="" data-rule="minlen:4" class="form-control" data-msg="Please enter at least 8 chars of subject" />
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-2 col-md-2">
                            <label>Gambar Event</label>
                        </div>
                        <div class="col-lg-10 col-md-10">
                        <input type="file" name="gambar_event" value="" class="form-control">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-2 col-md-2">
                            <label>Tanggal Event</label>
                        </div>
                        <div class="col-lg-10 col-md-10">
                            <input type="date" name="tanggal_event" value="{{ $eventEdit->tanggal_event }}" id="judul_artikel" placeholder="" data-rule="minlen:4" class="form-control" data-msg="Please enter at least 8 chars of subject" />
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-2 col-md-2">
                            <label>Jam Event</label>
                        </div>
                        <div class="col-lg-10 col-md-10">
                            <input type="time" name="jam_event" value="{{ $eventEdit->jam_event }}"  placeholder="" data-rule="minlen:4" class="form-control" data-msg="Please enter at least 8 chars of subject" />
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-2 col-md-2">
                            <label>Jenis Golongan</label>
                        </div>
                        <div class="col-lg-10 col-md-10">
                            <select name="golongan" class="form-control">
                                <option value="Nahdlatul Ulama">Nahdlatul Ulama</option>
                                <option value="Muhammad Diyah">Muhammad Diyah</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-2 col-md-2">
                        </div>
                        <div class="col-lg-10 col-md-10">
                            <button class="btn btn-theme btn-medium margintop10" type="submit">Add</button>
                        </div>
                    </div>
                </div>
                    {{ csrf_field() }}
            </form>
        </div>
    </div>
@endsection