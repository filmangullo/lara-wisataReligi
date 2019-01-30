@extends('layouts.view')

@section('inner-headline')
<section id="inner-headline">
    <div class="container">
        <div class="row">
        <div class="span12">
            <div class="inner-heading" style="text-align:center">
            <h2>Hubungin Kami</h2>
            </div>
        </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<section id="content">
        <div class="container" style="text-align:center;">
          <div class="row">
            <div class="span8" style="margin-left:17%;">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="{{ route('kontak.store') }}" method="post" role="form" class="contactForm">
                <div class="row">
                  
                  <div class="span8 form-group" style="text-align:left;">
                    <label for="name" class="col-md-4 col-form-label text-md-right" style="">Topik</label>
                    <input type="text" name="topik" id="topik" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validation"></div>
                  </div>
                  <div class="span8 form-group" style="text-align:left;">
                    <label for="name" class="col-md-4 col-form-label text-md-right" style="">Pesan</label>
                    <textarea name="pesan" rows="5" data-rule="required" data-msg="Please write something for us"
                      placeholder=""></textarea>
                    <div class="validation"></div>
                    <div class="text-center">
                      <button class="btn btn-theme btn-medium margintop10" type="submit">Kirim</button>
                    </div>
                  </div>
                </div>
                {{ csrf_field() }}
              </form>
            </div>
            
          </div>
        </div>
      </section>
@endsection