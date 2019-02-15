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
            <ul class="portfolio-categ filter">
                <li class="all active"><a href="#">All</a></li>
                <li class="web"><a href="#" title="">Nahdlatul Ulama</a></li>
                <li class="icon"><a href="#" title="">Muhammad Diyah</a></li>
              </ul>
        </div>
        <div class="span12">        
          <div class="row">
            <section id="team">
              <div id="thumbs" class="team">

                <!-- Item Project and Filter Name -->
                @foreach ($data as $wisata)
                @if($wisata->wisata_golongan == 'Nahdlatul Ulama')
                {{-- <li class="item-thumbs span6 web" data-id="id-0" data-type="web"> --}}
                    <div class="item-thumbs span3 web" data-id="id-0" data-type="web">
                @elseif ($wisata->wisata_golongan == 'Muhammad Diyah') 
                  {{-- <li class="item-thumbs span6 web" data-id="id-0" data-type="icon"> --}}
                      <div class="item-thumbs span3 web" data-id="id-0" data-type="icon">
                @endif
                {{-- <div class="item-thumbs span3 design" data-id="id-0" data-type="web"> --}}
                  
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