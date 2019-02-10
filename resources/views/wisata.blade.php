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
              <div id="thumbs" class="team">

                <!-- Item Project and Filter Name -->
                @foreach ($data as $wisata)
                <div class="item-thumbs span3 design" data-id="id-0" data-type="design">
                  
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
                  
                </div>
                                    
                @endforeach
                <!-- End Item Project -->
                
              </div>
              
            </section>

          </div>
          
        </div>
      </div>
      
    </div>
    
  </section>
  <section id="content">
    <div class="container">
      <div class="row">
        <div class="span12" style="text-align:center;">
          <div class="row">
            <section id="team">
              <div id="thumbs" class="team">
                  <div id="pagination" style="text-align:center;">
                      {{ $data->render() }}
                    </div>
              </div>
              
            </section>

          </div>
          
        </div>
      </div>
      
    </div>
    
  </section>
@endsection