<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        .btn:focus, .btn:active, button:focus, button:active {
  outline: none !important;
  box-shadow: none !important;
}

#image-gallery .modal-footer{
  display: block;
}

.thumb{
  margin-top: 15px;
  margin-bottom: 15px;
}
    </style>
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <div class="top" style="height:50px; background-color:#656565;"></div>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<div class="container">
    <div class="row nomargin">
        <div class="span4">
          <div class="logo" >
            <h1 ><a href="{{ url('/') }}" style="float:left; color:#333; font-size:30px; font-weight:bold;font-weight: 900; font-family: 'Open Sans', sans-serif;"><img src={{ URL::asset('img/logo.jpg') }} alt="" />
              {{ config('app.name', 'Wisata Islam') }}
            </a></h1>
          </div>
        </div>
    </div>
</div>

<div class="container">
  <a href="{{ URL::previous() }}" style="margin-left:90%;">Go Back</a>
  <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-heading" style="text-align:center">
              <h2 style="   color: #333;
              margin: 0 0 0 0;
              font-size: 32px;
              font-weight: 700;
              letter-spacing: -2px;">Upload Gambar Tempat Lokasi Wisata Religi</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <form action="{{ route('galleryStore', $wisata) }}" method="POST" enctype="multipart/form-data">
      <div class="container" style="text-align:center; margin-top:2%">
          <img id="blah" src="http://placehold.it/180" alt="your image" />
          <div class="col-md-12" style="margin-top:2%">
            <input type='file' onchange="readURL(this);" name="select_file" />
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
          </div>
      </div>
      <div class="container">
        <div class="row" style="margin-left:35.8%; margin-top:2%">
          <input type="submit" name="upload" class="pull-right btn btn-sm btn-primary" value="Upload">
        </div>
      </div>
    </form>
</div>


<script type="text/javascript">
function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

</script>
</body>
</html>