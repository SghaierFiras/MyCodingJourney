<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- stylesheets -->
    <!-- <link rel="stylesheet" href="{!! url('css/materialize.min.css') !!}"> -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css'/>
    <link href="{!! url('css/style.css') !!}" rel="stylesheet">
    <link rel="styelesheet" href="{!! url('fonts/fontawesome.scss') !!}">

    <!-- javascript  -->
   
    <!-- fonts & ions -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  </head>
  <body>
    @yield('main')
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js'></script>
    <!-- <script type="text/javascript" src="{!! url('js/materialize.min.js') !!}"></script> -->
  </body>
</html>