<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <script src="{{ asset('js/app.js') }}" defer></script>
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  @auth
  <meta name="api-token" content="{{ auth()->user()->api_token }}">
  @endauth

</head>

<body>
  <form action="{{ route('logout') }}" method="POST">
    @csrf
    <button class="btn btn-sm btn-primary">Выход</button>
  </form>
  <main id="app">
    @yield('content')
  </main>
</body>

</html>