@extends('layouts.view')

@section('style')

@endsection

@section('inner-headline')
  <section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="inner-heading" style="text-align:center">
            <h2>{{ __('kalender.title') }}</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('content')
<section id="content">
        <div class="container" style="margin-top:-30px;">
                <div class="row">
                  <div class="span12">
                    <a href="/agustus" class="btn btn-success btn-large animated fadeInUp"> < </a>
                    <a href="/oktober" class="btn btn-success btn-large animated fadeInUp" style="float:right;"> > </a>
                  </div>
                </div>
              </div>
  <div class="container">
      <div class="span8" style="margin-left:auto; margin-right:auto;">
      <h4>{{$bulanSep->nama_bulan}} 2019</h4>
            <div class="portfolio-detail">
                <div class="row">
                    <div class="span12" style="background-color:darkgreen; padding-top:20px ">
                        <div class="span1" style="width:127px; text-align:center; ">
                            <div class="item">
                                <div>
                                    <h2>S</h2>
                                </div>
                            </div>
                        </div>
                        <div class="span1" style="width:127px; text-align:center;">
                            <div class="item">
                                <div>
                                    <h2>M</h2>
                                </div>
                            </div>
                        </div>
                        <div class="span1" style="width:127px; text-align:center;">
                            <div class="item">
                                <div>
                                    <h2>T</h2>
                                </div>
                            </div>
                        </div>
                        <div class="span1" style="width:127px; text-align:center;">
                            <div class="item">
                                <div>
                                    <h2>W</h2>
                                </div>
                            </div>
                        </div>
                        <div class="span1" style="width:127px; text-align:center;">
                            <div class="item">
                                <div>
                                    <h2>T</h2>
                                </div>
                            </div>
                        </div>
                        <div class="span1" style="width:127px; text-align:center;">
                            <div class="item">
                                <div>
                                    <h2>F</h2>
                                </div>
                            </div>
                        </div>
                        <div class="span1" style="width:127px; text-align:center;">
                            <div class="item">
                                <div>
                                    <h2>S</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portfolio-detail">
                <div class="row">
                    <div class="span12" style="background-color:azure; margin-top:-30px;">
                        @foreach ($bulanSep->tanggals()->get() as $bulan)
                        <div class="span1" style="width:127px; text-align:center; padding-top:30px;">
                            <div class="item">
                                <div>
                                <h5>{{ $bulan->tanggal }}</h5>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

  </div>
</section>
<section id="content">
  <div class="container">
        <div class="row">
          <div class="span12">
            <h4>Peristiwa</h4>
            
            <ul class="portfolio-categ filter">
                @foreach ($bulanSep->kalenders()->get() as $peristiwa)
                <li class="all active"><a href="#" disable>{{ $peristiwa->tanggal_id }} {{$bulanSep->nama_bulan}} {{ $peristiwa->nama_peristiwa }}</a></li><br>
                @endforeach
              </ul>
          </div>
          
          
        </div>

      </div>

    </div>
  </div>
</section>
@endsection

@section('script')
    
@endsection