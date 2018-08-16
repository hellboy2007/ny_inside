<!doctype html>
<html lang="zh-hans">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{ HTML::style('bootstrap-dist/css/bootstrap.min.css') }}
        <title>台帐-售后</title>
    </head>
    <body>
      <div class="container">
        <div class="pages">
          @yield('content')
        </div>
      </div>

      {{HTML::script('js/jquery.min.js')}}
      {{HTML::script('bootstrap-dist/js/bootstrap.min.js')}}
    </body>
</html>
