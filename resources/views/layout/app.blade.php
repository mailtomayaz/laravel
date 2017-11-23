<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="css/app.css">
        <script src="js/custom.js"></script>
        <title>Laravel</title>

    </head>
    <body>
        @include('inc.nav')
        
<div class="container">
    @if(Request::is('/'))
        @include('inc.showcase')
        @endif
    <div class="col-lg-8 col-sm-8  col-md-8">
    @yield('content')    
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4">
    @include('inc.sidebar')        
    </div>
    

</div>
        <footer>Copyright 2017 &COPY;</footer>
      
    </body>
</html>
