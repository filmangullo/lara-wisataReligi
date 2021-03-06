@extends('layouts.dashboardLayout')

@section('subhead')
<h2>WISATA BARU</h2>    
@endsection

@section('isi')
    <div class="col-md-12">
            <form action="{{ route('wisata.store') }}" method="post" role="form" class="contactForm" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-2 col-md-2">
                            <label>Nama</label>
                        </div>
                        <div class="col-lg-10 col-md-10">
                            <input type="text" name="wisata_nama" id="wisata_nama" placeholder="" data-rule="minlen:4" class="form-control" data-msg="Please enter at least 8 chars of subject" />
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-2 col-md-2">
                            <label>Artikel</label>
                        </div>
                        <div class="col-lg-10 col-md-10">
                                <textarea name="wisata_artikel" rows="5" data-rule="required" data-msg="Please write something for us" class="form-control" placeholder=""></textarea>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-2 col-md-2">
                            <label>Gambar</label>
                        </div>
                        <div class="col-lg-10 col-md-10">
                                <input type="file" name="wisata_gambar" class="form-control">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-2 col-md-2">
                            <label>Daerah</label>
                        </div>
                        <div class="col-lg-10 col-md-10">
                            <select name="wisata_daerah" class="form-control">
                                <option value="Medan">Medan</option>
                                <option value="Jakarta">Jakarta</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-2 col-md-2">
                            <label>Alamat</label>
                        </div>
                        <div class="col-lg-10 col-md-10">
                                <textarea name="wisata_alamat" rows="5" data-rule="required" data-msg="Please write something for us" class="form-control" placeholder=""></textarea>
                        </div>
                    </div>
                </div>
                
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2 col-md-2">
                                <label>Map</label>
                            </div>
                            <div class="col-lg-10 col-md-10">
                                <input type="text" name="map" id="wisata_nama" placeholder="" data-rule="minlen:4" class="form-control" data-msg="Please enter at least 8 chars of subject" />
                            </div>
                        </div>
                    </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-2 col-md-2">
                            <label>Golongan</label>
                        </div>
                        <div class="col-lg-10 col-md-10">
                            <select name="wisata_golongan" class="form-control">
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