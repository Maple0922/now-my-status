<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Stateboard') }}</title>

  <!-- Styles -->
  <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

  <link rel="apple-touch-icon" href="favicon.ico">
  <link rel="icon" href="favicon.ico">
</head>

<body>
  <div id="app">
    <v-app>
      <header-component></header-component>
      <space-component></space-component>
      <router-view></router-view>
    </v-app>
  </div>
  <!-- Scripts -->
  <script src="{{ mix('/js/app.js') }}" defer></script>
</body>

</html>
