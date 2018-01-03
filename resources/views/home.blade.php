@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <div class="links">
                        <a href="{{route('courseIndex')}}">Courses</a>
                        <a href="{{route('articleIndex')}}">Articles</a>
                        <a href="{{route('tutorialIndex')}}">Tutorials</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
