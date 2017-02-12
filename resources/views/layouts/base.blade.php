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

        .login-input{
           font-size: 12px !important;
           height: initial;
        }
        .footer {
            padding-top: 19px;
            color: #777;
            border-top: 1px solid #e5e5e5;
        }
        .top-search-form {
            padding: 0.6em !important;
        }
        .top-search-text {
            height: 2.6em !important;;
            font-size: 12px !important;;
            width: 20em !important;;
        }
        .top-search-submit {
            font-size: 12px !important;;
        }
        .xs-top-search {
            float: right;
            position: relative;
            margin-top: 8px;
            font-size: 1.5em;
            margin: 0.4em 0.6em 0 0;
        }
    </style>
    @yield('header')
  </head>
  <body>
    <div id="app">
        @include('layouts.header')
        @yield('content')
        @include('layouts.footer')
    </div>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js/app.js"></script>
    <script>

    </script>
  </body>
</html>