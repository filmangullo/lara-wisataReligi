@extends('layouts.view')

@section('inner-headline')
  <section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="inner-heading" style="text-align:center">
            <h2>Tempat Wisata Religi</h2>
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
                @foreach ($data as $wisata)
                <li class="item-thumbs span3 design" data-id="id-0" data-type="design">
                  
                  <div class="team-box thumbnail">
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