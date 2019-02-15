@extends('layouts.view')

@section('content')
<section id="content">
<div class="container">
  <div class="row">

    <div class="span12">

      <article class="single">
        <div class="row">

          <div class="span12">
            <div class="post-image">
              <div class="post-heading">
                <h3><a>{{ $artikel->judul_artikel}}</a></h3>
              </div>
              <img src="img/dummies/blog/img1.jpg" alt="" />
            </div>
            
              {!! $artikel->isi_artikel !!}
          



          </div>
        </div>
      </article>

    </div>

  </div>
</div>
</section>
@endsection