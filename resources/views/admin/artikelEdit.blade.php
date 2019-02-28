@extends('layouts.dashboardLayout')

@section('subhead')
<h2>EDIT ARTIKEL</h2>    
@endsection

@section('isi')
    <div class="col-md-12">
            <form action="{{ route('artikel.update', $artikelEdit )}}" method="post" role="form" class="contactForm">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-2 col-md-2">
                            <label>Judul</label>
                        </div>
                        <div class="col-lg-10 col-md-10">
                            <input type="text" name="judul_artikel" value="{{ $artikelEdit->judul_artikel }}" id="judul_artikel" data-rule="minlen:4" class="form-control"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-2 col-md-2">
                            <label>Isi Artikel</label>
                        </div>
                        <div class="col-lg-10 col-md-10">
                                <textarea name="isi_artikel" rows="5" id="article-ckeditor" data-rule="required" class="form-control">{{ $artikelEdit->isi_artikel }}</textarea>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-2 col-md-2">
                            <label>Sumber</label>
                        </div>
                        <div class="col-lg-10 col-md-10">
                            <input type="text" name="sumber" value="{{ $artikelEdit->sumber }}" id="judul_artikel" data-rule="minlen:4" class="form-control"/>
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
                                <?php
                                $golongan=$artikelEdit->jenis_golongan;
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
                            <button class="btn btn-theme btn-medium margintop10" type="submit">Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'article-ckeditor' );
</script>
@endsection