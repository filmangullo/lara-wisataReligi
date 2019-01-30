@extends('layouts.view')

@section('inner-headline')
<section id="inner-headline">
    <div class="container">
        <div class="row">
        <div class="span12">
            <div class="inner-heading" style="text-align:center">
            <h2>Golongan Ajaran Islam di Indonesia
        </div>
    </div>
</section>
@endsection

@section('content')
    <section id="content">
        <div class="container">
            
            <article>
                <div class="row" style="margin-top:-5%;">
                    <div class="span12">
                    <div class="post-entry">
                        <p>
                        @foreach ($artikelagama as $item)
                        @if($item->id == 1)
                        {{$item->isi_artikel}}
                        @endif
                        @endforeach
                        </p>
                    </div>
                    </div>
                </div>
            </article>
            
            @foreach ($artikelgolongan as $artikel)
            @if ($artikel->id != 1)
            <article>
                    <div class="row" style="margin-top:-5%;">
                      <div class="span12">
                        <div class="post-heading">
                            <h3><a>{{$artikel->judul_artikel}}</a></h3>
                        </div>
                        <div class="post-entry">
                          <p>
                            {{ str_limit( $artikel->isi_artikel, 500,'...') }}
                          </p>
                        <a href="{{ route('artikelDetail', $artikel ) }}" class="readmore">Read more <i class="icon-angle-right"></i></a>
                        </div>
                      </div>
                    </div>
                  </article>
            @else()
                
            @endif
            
              @endforeach

        
        </div>
    </section>
@endsection