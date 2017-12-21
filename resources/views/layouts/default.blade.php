<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title','Sample') - Yugenye 的Laravel 入门项目</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
      @include('layouts._header')
      <div class="container">
          <div class="col-md-offset-1 col-md-10">
              @yield('content')
              @include('layouts._footer')
          </div>
      </div>

  </body>
</html>
