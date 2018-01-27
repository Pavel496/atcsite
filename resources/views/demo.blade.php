<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Laravel Filemanager</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset('vendor/laravel-filemanager/img/folder.png') }}">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body>
  <div class="container">

    <div class="row">

      <div class="col-md-6">

        <h2>Standalone File Button</h2>

            <a id="lfm2" data-input="thumbnail2" data-preview="holder2" class="btn btn-primary">
              <i class="fa fa-picture-o"></i> Choose
            </a>

      </div>
    </div>

  </div>

  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script>
   var route_prefix = "{{ url(config('lfm.url_prefix', config('lfm.prefix'))) }}";
  </script>


  <script>
    {!! \File::get(base_path('vendor/unisharp/laravel-filemanager/public/js/lfm.js')) !!}
  </script>
    
  <script>
    
    $('#lfm2').filemanager('file', {prefix: route_prefix});
  </script>


  
</body>
</html>
