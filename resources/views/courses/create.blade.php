@extends('layouts.app')


@section('title', 'Add a Course')
@section('description', 'this is a description')
@section('main')

<div class="container">

{{ Form::model($course, array('url'=>'courses/store')) }}
  @include('courses/partials/_form', ['submit_text' => 'Add a Course'])
{{ Form::close() }}

</div>


@endsection