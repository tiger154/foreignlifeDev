<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ForeignLife</title>
    <!-- Bootstrap -->
    <link href="/css/app.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        body {
          padding-top: 50px;
        }
        .starter-template {
          padding: 40px 15px;
          text-align: center;
        }


        /* Main image slider */
        .carousel,
        .item,
        .active {
            height: 100%;
        }

        .carousel-inner {
            height: 100%;
        }

        .fill {
            width: 100%;
            height: 120px;
            background-position: contain;
            -webkit-background-size: contain;
            -moz-background-size: contain;
            background-size: contain;
            -o-background-size: contain;
        }

        footer {
            margin: 50px 0;
        }
    </style>
  </head>
  <body>
    <div id="app">
        @include('layouts.header')
        <Slider></Slider>
        @yield('content')
    </div>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js/app.js"></script>
    <script>

    </script>
  </body>
</html>