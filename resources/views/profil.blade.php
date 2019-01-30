@extends('layouts.view')

@section('inner-headline')
<section id="inner-headline">
    <div class="container">
        <div class="row">
        <div class="span12">
            <div class="inner-heading" style="text-align:center">
            <h2>Profil</h2>
            </div>
        </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<div class="container" style="margin-top: -5px;">
  <div class="row">
    <!-- left column -->
    <div class="span4" style="text-align:center;">
        <div class="text-center">
            <img src="img/avatars/{{ $user->avatar }}" class="avatar img-circle img-thumbnail" alt="avatar" style="width:150px;height:150px;">
        </div>
        <a href="/wisata" class="btn btn-small btn-primary" style="margin-top:15px;"></i> Edit Profil</a>
    </div>
    <!-- edit form column -->
    <div class="span8">
        <div id="sendmessage">Your message has been sent. Thank you!</div>
        <div id="errormessage"></div>
        <form action="" method="post" role="form" class="contactForm">
          <div class="row">
                <div class="span12 form-group" style="padding-top:10px; padding-bottom:10px;">
                    <div class="span2 form-group">
                        <label class="col-md-3 control-label">Nama </label>
                    </div>
                    <div class="span4 form-group field">
                        <p>: {{ $user->name }}</p>
                    <div class="validation"></div>
                    </div>
                </div>
                <div class="span12 form-group" style="padding-top:10px; padding-bottom:10px;">
                    <div class="span2 form-group">
                        <label class="col-md-3 control-label">Email </label>
                    </div>
                    <div class="span4 form-group field">
                        <p>: {{ $user->email }}</p>
                    <div class="validation"></div>
                    </div>
                </div>
                <div class="span12 form-group" style="padding-top:10px; padding-bottom:10px;">
                    <div class="span2 form-group">
                        <label class="col-md-3 control-label">Tempat Lahir </label>
                    </div>
                    <div class="span4 form-group field">
                        <p>: {{ $user->email }}</p>
                    <div class="validation"></div>
                    </div>
                </div>
                <div class="span12 form-group" style="padding-top:10px; padding-bottom:10px;">
                    <div class="span2 form-group">
                        <label class="col-md-3 control-label">Tanggal Lahir </label>
                    </div>
                    <div class="span4 form-group field">
                        <p>: {{ $user->email }}</p>
                    <div class="validation"></div>
                    </div>
                </div>
                <div class="span12 form-group" style="padding-top:10px; padding-bottom:10px;">
                    <div class="span2 form-group">
                        <label class="col-md-3 control-label">Jenis Kelamin </label>
                    </div>
                    <div class="span4 form-group field">
                        <p>: {{ $user->email }}</p>
                    <div class="validation"></div>
                    </div>
                </div>
                <div class="span12 form-group" style="padding-top:10px; padding-bottom:10px;">
                    <div class="span2 form-group">
                        <label class="col-md-3 control-label">Alamat </label>
                    </div>
                    <div class="span4 form-group field">
                        <p>: {{ $user->email }}</p>
                    <div class="validation"></div>
                    </div>
                </div>
                <div class="span12 form-group" style="padding-top:10px; padding-bottom:10px;">
                    <div class="span2 form-group">
                        <label class="col-md-3 control-label">No. Telepon </label>
                    </div>
                    <div class="span4 form-group field">
                        <p>: {{ $user->email }}</p>
                    <div class="validation"></div>
                    </div>
                </div>
          </div>
        </form>
      </div>
  </div>
</div>
@endsection