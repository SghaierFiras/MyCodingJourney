<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Coding Journey</title>

        <!-- stylesheets -->
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css'/>
        <link href="{!! url('css/style.css') !!}" rel="stylesheet">
        <link rel="styelesheet" href="{!! url('fonts/fontawesome.scss') !!}">

        <!-- fonts & ions -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
    <div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            Laravel
        </div>

        <div class="links">
            <a href="#">Courses</a>
            <a href="#">Articles</a>
            <a href="#">Tutorials</a>
        </div>
    </div>
</div>
    </body>
    <!-- stylesheets -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css'/>
    <link href="{!! url('css/style.css') !!}" rel="stylesheet">
    <link rel="styelesheet" href="{!! url('fonts/fontawesome.scss') !!}">

    <!-- fonts & ions -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="text/javascript" src="cdnjs.cloudflare.com/ajax/libs/vue/2.5.13/vue.js">
    </script>
</html>
