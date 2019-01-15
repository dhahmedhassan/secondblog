<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Template for Bootstrap</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">

  </head>

  <body>

    @include('layouts.navbar')

    <div class="container">

      <div class="row">

        <div class="col-sm-8 blog-main">
          @yield('content')
          
        </div><!-- /.row -->
        @include('layouts.sidebar')

    </div><!-- /.container -->


    @include('layouts.footer')

    @include('layouts.scripts')

  </body>
</html>
