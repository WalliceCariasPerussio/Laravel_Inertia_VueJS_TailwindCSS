<!DOCTYPE html>
<html>
  <head>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> --}}
    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
    <script src="{{ mix('/js/app.js') }}" defer></script>

    @inertiaHead
    @routes
  </head>
  <body>
    @inertia
  </body>
</html>
