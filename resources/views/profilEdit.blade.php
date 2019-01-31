@extends('layouts.view')

@section('inner-headline')
<section id="inner-headline">
    <div class="container">
        <div class="row">
        <div class="span12">
            <div class="inner-heading" style="text-align:center">
            <h2>Edit Profil</h2>
            </div>
        </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<form enctype="multipart/form-data" action="{{route('profil.update', $user)}}" method="POST">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}  
    <div class="container" style="padding-top: 60px;">
    <div class="row">
        <!-- left column -->
        <div class="span4">
            <div class="text-center">
                <img src="{{ URL::asset($user->avatar) }}" class="avatar img-circle img-thumbnail" alt="avatar" style="width:150px;height:150px;">
                <h6>Upload a different photo...</h6>
                <label>Update Profil Image</label>
                <input type="file" name="avatar" class="text-center center-block well well-sm">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </div>
        </div>
        <!-- edit form column -->
        <div class="span8">
            <h4>Get in touch with us by filling contact form below</h4>
            <div id="errormessage"></div>
            <div class="row">
                    <div class="span12 form-group">
                        <div class="span2 form-group">
                            <label class="col-md-3 control-label">Nama :</label>
                        </div>
                        <div class="span4 form-group field">
                        <input type="text" name="name" id="name" value="{{ $user->name }}" data-rule="minlen:4" />
                        <div class="validation"></div>
                        </div>
                    </div>

                    <div class="span12 form-group">
                        <div class="span2 form-group">
                            <label class="col-md-3 control-label">Email :</label>
                        </div>
                        <div class="span4 form-group field">
                        <input type="text" name="email" id="email"value="{{ $user->email }}" data-rule="minlen:4"  />
                        <div class="validation"></div>
                        </div>
                    </div>
                    <div class="span12 form-group">
                        <div class="span2 form-group">
                            <label class="col-md-3 control-label">Tempat Lahir :</label>
                        </div>
                        <div class="span4 form-group field">
                        <input type="text" name="tempat_lahir" id="tempat_lahir" value="{{ $user->profils['tempat_lahir'] }}" placeholder="Your Name" data-rule="minlen:4" />
                        <div class="validation"></div>
                        </div>
                    </div>
                    <div class="span12 form-group">
                        <div class="span2 form-group">
                            <label class="col-md-3 control-label">Tanggal Lahir :</label>
                        </div>
                        <div class="span4 form-group field">
                        <input type="text" name="tanggal_lahir" id="tanggal_lahir" value="{{ $user->profils['tanggal_lahir'] }}" placeholder="Your Name" data-rule="minlen:4" />
                        <div class="validation"></div>
                        </div>
                    </div>
                    <div class="span12 form-group">
                        <div class="span2 form-group">
                            <label class="col-md-3 control-label">Jenis Kelamin :</label>
                        </div>
                        <div class="span4 form-group field">
                        <input type="text" name="jenis_kelamin" id="jenis_kelamin" value="{{ $user->profils['jenis_kelamin'] }}" placeholder="Your Name" data-rule="minlen:4" />
                        <div class="validation"></div>
                        </div>
                    </div>
                    <div class="span12 form-group">
                        <div class="span2 form-group">
                            <label class="col-md-3 control-label">Alamat :</label>
                        </div>
                        <div class="span4 form-group field">
                        <input type="text" name="alamat" id="alamat" value="{{ $user->profils['alamat'] }}" placeholder="Your Name" data-rule="minlen:4"  />
                        <div class="validation"></div>
                        </div>
                    </div>
                    <div class="span12 form-group">
                        <div class="span2 form-group">
                            <label class="col-md-3 control-label">No. Telepon :</label>
                        </div>
                        <div class="span4 form-group field">
                        <input type="text" name="no_telp" id="no_telp" value="{{ $user->profils['no_telp'] }}" placeholder="Your Name" data-rule="minlen:4"  />
                        <div class="validation"></div>
                        </div>
                    </div>
                    <div class="span12 form-group">
                        <div class="span2 form-group" style="text-align:left;">
                            <input type="submit" value="Simpan" class="pull-right btn btn-sm btn-primary">
                        </div>
                    </div>
            </div>
            
        </div>
    </div>
    </div>
</form>
@endsection