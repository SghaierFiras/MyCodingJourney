<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- stylesheets -->
    <link rel="stylesheet" href="{!! url('css/materialize.min.css') !!}">
    <link href="{!! url('css/style.css') !!}" rel="stylesheet">
    <link rel="styelesheet" href="{!! url('fonts/fontawesome.scss') !!}">

    <!-- javascript  -->
    <script type="text/javascript" src="{!! url('js/materialize.min.js') !!}"></script>
   
    <!-- fonts & ions -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  </head>

  <body>
    @yield('main')
  </body>
</html>