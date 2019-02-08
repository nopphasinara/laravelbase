<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Laravel</title>
  <meta name="csrf_token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{ asset('vendor/dashboard/css/app.css') }}">
</head>
<body>
  <div class="wrapper">
    <div class="container">
      <div class="row d-flex flex-row justify-content-center">
        <div class="col-4">
          <form>
            <h1 class="h3 text-center mb-3">Please sign in</h1>
            <div class="form-group">
              <label for="inputEmail" class="sr-only">Email address</label>
              <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            </div>
            <div class="form-group">
              <label for="inputPassword" class="sr-only">Password</label>
              <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            </div>
            <div class="form-checkbox">
              <label>
                <input type="checkbox" value="remember-me"> Remember me
              </label>
            </div>
            <div class="form-group">
              <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    {{-- @if (Route::has('login'))
      <div class="top-right links">
        @auth
          <a href="{{ url('/home') }}">Home</a>
        @else
          <a href="{{ route('login') }}">Login</a>

          @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
          @endif
        @endauth
      </div>
    @endif --}}

    {{-- <div class="content">
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

      <div class="row">
        @data([
          'php' => '^7.1.3',
          'appstract/laravel-blade-directives' => '^1.4',
          'corcel/acf' => '^1.1',
          'fideloper/proxy' => '^4.0',
          'jgrossi/corcel' => '^2.7',
          'laracasts/flash' => '^3.0',
          'laravel/framework' => '5.7.*',
          'laravel/tinker' => '^1.0',
          'laravelcollective/html' => '^5.7',
        ], ', ')
      </div>

      <div class="row">
        {!! Form::open(['url' => '/login']) !!}
        {{ csrf_field() }}
        {!! Form::label('email', 'E-Mail Address', ['class' => 'awesome']) !!}
        {!! Form::text('email', '', ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'example@email.com']) !!}
        {!! Form::close() !!}
      </div>
    </div> --}}
  </div>
  <script src="{{ asset('vendor/dashboard/js/app.js') }}" crossorigin="anonymous"></script>
</body>
</html>
