@extends('layouts.app')


@section('title', 'Edit a Course')
@section('description', 'this is a description')
@section('main')

<div class="container">

{{ Form::model($course, array('url'=>['courses/update', $course->id], 'method'=>'PATCH')) }}
  @include('partials/_addCourseForm', ['submit_text' => 'Course Edited Succefully!'])
{{ Form::close() }}

</div>


@endsection