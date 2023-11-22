<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
      <meta name="csrf-token" content="{{ csrf_token() }}" />
      <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
      <title>@section('title') Home @show | {{{ config('app.name') }}}</title>
      <link rel="stylesheet" href="{{ asset('build/assets/app-deb5f0be.css') }}" />
      <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body  class="bg-website d-flex flex-column">
      @yield('content')
      <script src="{{ asset('build/assets/app-c0749a1a.js') }}"></script>
   </body>
</html>