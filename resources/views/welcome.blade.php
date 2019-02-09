<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Laravel</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  <div class="content">
    <div class="title m-b-md">
      Laravel
    </div>

    <div class="links">
      <a href="https://laravel.com/docs">Documentation</a>
      <a href="https://laracasts.com">Laracasts</a>
      <a href="https://laravel-news.com">News</a>
      <a href="https://nova.laravel.com">Nova</a>
      <a href="https://forge.laravel.com">Forge</a>
      <a href="https://github.com/laravel/laravel">GitHub</a>
    </div>
  </div>
  <script async src="{{ asset('js/app.js') }}" crossorigin="anonymous"></script>
</body>
</html>
