@extends('layouts.app')


@section('title', 'Edit a Course')
@section('description', 'this is a description')
@section('main')

<div class="container">

{{ Form::model($course, array('url'=>'courses/update', 'method'=>'PUT')) }}
  @include('partials/_addCourseForm', ['submit_text' => 'Edit a Course'])
{{ Form::close() }}

</div>


@endsection