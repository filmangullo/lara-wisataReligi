@extends('layouts.view')

@section('inner-headline')
  <section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="inner-heading" style="text-align:center">
            <h2>Bookmark</h2>
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
        <div class="span12">
          <div class="row">
            <section id="team">
              <ul id="thumbs" class="team">

                <!-- Item Project and Filter Name -->
                @foreach ($dataBookmarks as $wisata)
                @if($wisata->user_id == $user->id)
                <li class="item-thumbs span3 design" data-id="id-0" data-type="design">
                  
                  <div class="team-box thumbnail">
                      <div style="float:right; margin-bottom:-20px; margin-top:-20px; margin-right:-20px;">
                          <form action="{{ route('bookmark.delete', $wisata->id)}}" method="post">
                              {{csrf_field()}}
                              {{method_field('DELETE')}}
                              <button type="submit" class="btn btn-default">X</button>
                          </form> 
                      </div>
                    <a href="{{ route('wisataDetail', $wisata ) }}">
                    <img src="{{ $wisata->wisata_gambar }}"/>
                    </a>
                    <div class="caption">
                      <h5>{{ $wisata->wisata_nama }}</h5>
                      <p>
                        {{ $wisata->wisata_lokasi }}
                      </p>
                      
                    </div>
                  </div>
                </li>
                
                @endif                    
                @endforeach
                <!-- End Item Project -->
              </ul>
            </section>

          </div>
        </div>
      </div>
    </div>
  </section>
@endsection