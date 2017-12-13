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
                    <a href="{{route('courses')}}">Courses</a>
                    <a href="{{route('articles')}}">Articles</a>
                    <a href="{{route('tutorials')}}">Tutorials</a>
                    <a href="{{route('blogs')}}">Blogs</a>
                    <a href="{{route('bugs')}}">Bugs</a>
                </div>
            </div>
        </div>
    </body>
</html>
