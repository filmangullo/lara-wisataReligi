@extends('layouts.dashboardLayout')

@section('subhead')
<h2>ARTKEL BARU</h2>    
@endsection

@section('isi')
    <div class="col-md-12">
            <form action="{{ route('artikel.store') }}" method="post" role="form" class="contactForm">
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-2 col-md-2">
                            <label>Judul</label>
                        </div>
                        <div class="col-lg-10 col-md-10">
                            <input type="text" name="judul_artikel" id="judul_artikel" placeholder="" data-rule="minlen:4" class="form-control" data-msg="Please enter at least 8 chars of subject" />
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-2 col-md-2">
                            <label>Isi Artikel</label>
                        </div>
                        <div class="col-lg-10 col-md-10">
                                <textarea name="isi_artikel" rows="5" data-rule="required" data-msg="Please write something for us" class="form-control" placeholder=""></textarea>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-2 col-md-2">
                            <label>Jenis</label>
                        </div>
                        <div class="col-lg-10 col-md-10">
                            <select name="jenis_golongan" class="form-control">
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