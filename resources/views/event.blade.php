@extends('layouts.view')

@section('inner-headline')
  <section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="inner-heading" style="text-align:center">
            <h2>Event yang di jadwalkan di {{ $wisata->wisata_nama }}</h2>
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

          <div class="clearfix"></div>
          <div class="row">
            <section id="projects">
              <ul id="thumbs" class="grid cs-style-4 portfolio">

                @foreach ($wisata->events()->get() as $event )
                <!-- Item Project and Filter Name -->
                @if($event->golongan == 'Nahdlatul Ulama')
                <li class="item-thumbs span6 web" data-id="id-0" data-type="web">
                @elseif ($event->golongan == 'Muhammad Diyah') 
                  <li class="item-thumbs span6 web" data-id="id-0" data-type="icon">
                @endif
                  <h3>Oke</h3>
                  <div class="item">
                    <figure>
                      <div><img src="{{ URL::asset($event->gambar_event) }}" alt="" /></div>
                      <figcaption>
                        <div>
                            <span>
                                <a href="#"><i class="icon-file icon-circled icon-bglight icon-2x"></i></a>
                            </span>
                        </div>
                      </figcaption>
                    </figure>
                  </div>
                </li>
                <!-- End Item Project -->
                @endforeach
              </ul>
            </section>

          </div>
        </div>
      </div>
    </div>
  </section>
@endsection