<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Coding Journey</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="../../assets/sass/app.scss">
        <link rel="stylesheet" href="../assets/sass/app.scss">
        <link rel="stylesheet" href="{!! url('css/materialize.min.css') !!}">
        <link rel="stylesheet" href="{!! url('css/style.css') !!}">
        <link rel="stylesheet" href="../assets/sass/app.scss">
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
    <script type="text/javascript" src="cdnjs.cloudflare.com/ajax/libs/vue/2.5.13/vue.js">
    </script>
</html>
