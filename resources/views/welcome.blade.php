
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Cover Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
  </head>

  <body class="text-center">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
      </header>

      <main role="main" class="inner cover">
        <h1 class="cover-heading">Citra Kain Tradisional</h1>
        <p class="lead">Tekan tombol 'Choose File' dibawah untuk memilih gambar, kemudian tekan tombol 'Submit' untuk melanjutkan</p>
        <p class="lead">

                {!! Form::open(['action'=>'ImageController@store','method'=>'POST','enctype' => 'multipart/form-data']) !!}                    
                <center>
                    <div class="form-group">
                    
                        <div class="col-6">
                            {{Form::file('image' , ['class' => 'form-control-file btn btn-outline-light'])}}
                        </div>
                    </div>
                </center>
                
                    {{Form::submit('Submit' , ['class' => 'btn btn-lg btn-outline-light'])}}
                      
                
                {!! Form::close() !!}
        </p>

        
      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>Final Project <a href="https://getbootstrap.com/">Visi Komputer</a>, by <a href="https://twitter.com/mdo">Kelompok 4</a>.</p>
        </div>
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
  </body>
</html>
