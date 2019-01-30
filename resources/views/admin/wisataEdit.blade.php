@extends('layouts.dashboardLayout')

@section('subhead')
<h2>WISATA EDIT</h2>    
@endsection

@section('isi')
    <div class="col-md-12">
            <form action="{{ route('wisata.update', $wisataEdit )}}" method="post" role="form" class="contactForm" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-2 col-md-2">
                            <label>Nama</label>
                        </div>
                        <div class="col-lg-10 col-md-10">
                            <input type="text" name="wisata_nama" value="{{ $wisataEdit->wisata_nama }}" id="wisata_nama" placeholder="" data-rule="minlen:4" class="form-control" data-msg="Please enter at least 8 chars of subject" />
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-2 col-md-2">
                            <label>Artikel</label>
                        </div>
                        <div class="col-lg-10 col-md-10">
                            <textarea name="wisata_artikel" rows="5" data-rule="required" class="form-control" placeholder="">{{ $wisataEdit->wisata_artikel }}</textarea>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-2 col-md-2">
                            <label>Gambar</label>
                        </div>
                        <div class="col-lg-10 col-md-10">
                                <input type="file" name="wisata_gambar" class="form-control" >
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
                                <?php
                                $daerah=$wisataEdit->wisata_daerah;
                                if ($daerah== "Jakarta") echo "<option value='Jakarta' selected>Jakarta</option>";
                                else echo "<option value='Jakarta'>Jakarta</option>";
                                if ($daerah== "Medan") echo "<option value='Medan' selected>Medan</option>";
                                else echo "<option value='Medan'></option>";
                                ?>
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
                                <textarea name="wisata_alamat" rows="5" data-rule="required" class="form-control">{{ $wisataEdit->wisata_alamat }}</textarea>
                        </div>
                    </div>
                </div>
                
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2 col-md-2">
                                <label>Map</label>
                            </div>
                            <div class="col-lg-10 col-md-10">
                                <input type="text" name="map" id="map" value="{{ $wisataEdit->map }}" data-rule="minlen:4" class="form-control" />
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
                                <?php
                                $golongan=$wisataEdit->wisata_golongan;
                                if ($golongan== "Nahdlatul Ulama") echo "<option value='Nahdlatul Ulama' selected>Nahdlatul Ulama</option>";
                                else echo "<option value='Nahdlatul Ulama'>Nahdlatul Ulama</option>";
                                if ($golongan== "Muhammad Diyah") echo "<option value='Muhammad Diyah' selected>Muhammad Diyah</option>";
                                else echo "<option value='Muhammad Diyah'>Muhammad Diyah</option>";
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-2 col-md-2">
                        </div>
                        <div class="col-lg-10 col-md-10">
                            <button class="btn btn-theme btn-medium margintop10" type="submit">Simpan</button>
                        </div>
                    </div>
                </div>
                    {{ csrf_field() }}
            </form>
        </div>
    </div>
@endsection