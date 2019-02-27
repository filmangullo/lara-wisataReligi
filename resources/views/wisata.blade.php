@extends('layouts.view')

@section('style')
<style> 
.topnav {
  overflow: hidden;
  background-color: white;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>    
@endsection

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
      <div class="topnav">
          <div class="search-container">
            <form action="{{ route('wisata.cari')}}" method="GET">
              <input type="text" placeholder="Search.." name="cari">
              <button type="submit">Submit</button>
            </form>
          </div>
        </div>
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
                @if($data->count())
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
              @else
            <div class="alert alert-warning">
                <i class="fa fa-exclamation-triangle"></i> Wisata tidak tersedia
            </div>
          @endif
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