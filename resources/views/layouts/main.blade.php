<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Hello, world!</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="msapplication-tap-highlight" content="no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" crossorigin="anonymous">

  </head>
  <body>
    <h1>Hello, world!</h1>

    <script src="{{ asset('vendor/dashboard/js/app.js') }}" crossorigin="anonymous"></script>
  </body>
</html>
