<!DOCTYPE html>
<html>
  <head>
       <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    @if(env('APP_ENV') == 'local')
      <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
      <script src="{{ mix('/js/app.js') }}" defer></script>
    @else
      <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
      <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
      <script src="{{ asset('/js/app.js') }}" defer></script>
    @endif

    @routes
  </head>
  <body>
    @inertia
  </body>
</html>
