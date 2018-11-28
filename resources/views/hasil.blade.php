
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Album example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <link href="font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
  </head>

  <body>

    <header>
      
      <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">

            <strong>Hasil Pencarian</strong>
          </a>
          <a href="/" class="btn btn-lg btn-light d-flex align-items-center">
            <img src="{{asset('search.png')}}" style="max-height: 25px;max-width: 25px;">
           </a>
        </div>
      </div>
    </header>

    <main role="main">

      <div class="album py-5 bg-light">
        <div class="container">

          @if(count($images)>0)

          <div class="row">
            @foreach($images as $image)
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm" style="height: 300px">
                <img class="card-img-top" src="{{asset('/storage/'.$image->image)}}" alt="Card image cap" style="max-height: 200px;max-width: 200px;align-self: center;margin-top: 50px;">
              </div>
            </div>

          @endforeach
          </div>

          @endif
        </div>
      </div>

    </main>



  </body>
</html>
