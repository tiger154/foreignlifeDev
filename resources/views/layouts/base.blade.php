<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sinbie</title>
    <!-- Bootstrap -->
    <link href="/css/app.css" rel="stylesheet">
    <!-- Addrinal-->
    <link href="/css/sinbie.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('header')
  </head>
  <body>
    <div id="app">
        @include('layouts.header')
        @yield('content')
        @include('layouts.footer')
        <div class="modal fade modal-container" tabindex="-1" role="dialog"></div>
    </div>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js/app.js"></script>
    @yield('js')
    <script>

        $(document).ready(function(){

        /**
         *
         * # When user click it trigger modal
         *
         *  1) href : path
         *  2) data-size : default | small | wide, default value is default
         */
        $('.modal-link').click(function(){
            var href = $(this).attr('href');
            var size = $(this).data('size');
            size = (size == null || typeof size === 'undefined') ? 'default' : size;
            $('.modal-container').load(href, function(result){
                $('.modal-container').modal({show:true});
            });
            return false;
        })
        });
    </script>
  </body>
</html>