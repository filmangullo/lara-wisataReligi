@extends('layouts.view')

@section('content')
<div class="container" style="padding-top: 60px;">
  <h1 class="page-header">Edit Profile</h1>
  <div class="row">
    <!-- left column -->
    <div class="span4">
      <div class="text-center">
        <img src="img/avatars/{{ $user->avatar }}" class="avatar img-circle img-thumbnail" alt="avatar" style="width:150px;height:150px;">
        <h6>Upload a different photo...</h6>
        <form enctype="multipart/form-data" action="/profil" method="POST">
        <label>Update Profil Image</label>
        <input type="file" name="avatar" class="text-center center-block well well-sm">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" class="pull-right btn btn-sm btn-primary">
        </form>
    </div>
    </div>
    <!-- edit form column -->
    <div class="span8">
        <h4>Get in touch with us by filling contact form below</h4>

        <div id="sendmessage">Your message has been sent. Thank you!</div>
        <div id="errormessage"></div>
        <form action="" method="post" role="form" class="contactForm">
          <div class="row">
                <div class="span12 form-group">
                    <div class="span2 form-group">
                        <label class="col-md-3 control-label">Nama :</label>
                    </div>
                    <div class="span4 form-group field">
                    <input type="text" name="name" id="name" value="{{ $user->name }}" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                    </div>
                </div>

                <div class="span12 form-group">
                    <div class="span2 form-group">
                        <label class="col-md-3 control-label">Email :</label>
                    </div>
                    <div class="span4 form-group field">
                    <input type="text" name="email" id="email"value="{{ $user->email }}" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                    </div>
                </div>
                <div class="span12 form-group">
                    <div class="span2 form-group">
                        <label class="col-md-3 control-label">Tempat Lahir :</label>
                    </div>
                    <div class="span4 form-group field">
                    <input type="text" name="name" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                    </div>
                </div>
                <div class="span12 form-group">
                    <div class="span2 form-group">
                        <label class="col-md-3 control-label">Tanggal Lahir :</label>
                    </div>
                    <div class="span4 form-group field">
                    <input type="text" name="name" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                    </div>
                </div>
                <div class="span12 form-group">
                    <div class="span2 form-group">
                        <label class="col-md-3 control-label">Jenis Kelamin :</label>
                    </div>
                    <div class="span4 form-group field">
                    <input type="text" name="name" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                    </div>
                </div>
                <div class="span12 form-group">
                    <div class="span2 form-group">
                        <label class="col-md-3 control-label">Alamat :</label>
                    </div>
                    <div class="span4 form-group field">
                    <input type="text" name="name" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                    </div>
                </div>
                <div class="span12 form-group">
                    <div class="span2 form-group">
                        <label class="col-md-3 control-label">No. Telepon :</label>
                    </div>
                    <div class="span4 form-group field">
                    <input type="text" name="name" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                    </div>
                </div>
          </div>
        </form>
      </div>
  </div>
</div>
@endsection