@extends('layouts.view')

@section('inner-headline')
  <section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="inner-heading" style="text-align:center">
            <h2>{{ $wisata->wisata_nama }}</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('content')
<section id="content">
<div class="container">
  <div class="row">
      @if($message=Session::get('successUpload'))
      <div class="alert alert-success alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Success!</strong> {{$message}}
        </div>
      @endif

      @if($message=Session::get('successBookmark'))
      <div class="alert alert-info alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Info!</strong> {{$message}}
        </div>
        @endif
      <div class="clearfix"></div>
      <div class="row">
        <section id="projects">
          <ul id="thumbs" class="grid cs-style-4 portfolio">

            <li class="item-thumbs span5 design" data-id="id-1" data-type="icon">
              <div class="item" >
                  <div><img src="{{$wisata->wisata_gambar}}" alt="" /></div>
              </div>
            </li>
  
            <li class="item-thumbs span7 design" data-id="id-1" data-type="icon">
                <div class="item" style="height:275px;">
                  
                  <iframe src="{{ $wisata->map}}" width="725" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
              </li>
          </ul>
        </section>
        <section id="projects">
            <ul id="thumbs" class="grid cs-style-4 portfolio">
  
              <li class="item-thumbs span12 design" data-id="id-1" data-type="icon">
                  <div class="item">
                      {{ $wisata->wisata_alamat}}
                  </div>
  
                </li>
            </ul>
          </section>

      </div>
    </div>
    <div class="span6" style="margin-top:-5%; margin-left:-2.5%;">
        <button type="button" class="btn btn-success btn-small animated fadeInUp" data-toggle="modal" data-target="#exampleModal">
          <i class="icon-link"></i> Bookmark
        </button>
        <a href="{{ route('event', $wisata ) }}" class="btn btn-theme btn-small animated fadeInUp"><i class="icon-download"></i> Ivent</a>
        <a href="{{ route('gallery', $wisata ) }}" class="btn btn-theme btn-small animated fadeInUp"><i class="icon-download"></i> Gallery</a>
      </div>
    <article>
        <div class="row" style="margin-left:-5.3%;">
            <div class="span12">
            <div class="post-entry">
                <p>
                {{$wisata->wisata_artikel}}
                </p>
               
            </div>
            </div>
        </div>
    </article>
  </div>
</div>
</section>

<!-- Modal Bookmark-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="{{ route('post.bookmark.store', $wisata) }}" method="POST">
        {{ csrf_field() }}
        <div class="modal-body">
          Bookmark Wisata {{ $wisata->wisata_nama }}..?
        </div>
        <input type="hidden" name="wisata_nama" value="{{ $wisata->wisata_nama}}">
        <input type="hidden" name="wisata_artikel" value="{{$wisata->wisata_artikel}}">
        <input type="hidden" name="wisata_gambar" value="{{$wisata->wisata_gambar}}">
        <input type="hidden" name="wisata_daerah" value="{{$wisata->wisata_daerah}}">
        <input type="hidden" name="wisata_alamat" value="{{$wisata->wisata_alamat}}">
        <input type="hidden" name="wisata_golongan" value="{{$wisata->wisata_golongan}}">
        <input type="hidden" name="map" value="{{ $wisata->map }}">

        <div class="modal-body" style="float:right;">
          <input type="button" value="Cancel" class="btn btn-default" data-dismiss="modal">
          <input type="submit" value="OK" class="btn btn-primary">
        </div>
      </form>
    </div>
  </div>
</div>
@endsection