@extends('layouts.app')


@section('title', 'Add a Tutorial')
@section('description', 'this is a description')
@section('main')

<div class="container">

{{ Form::model($tutorial, array('url'=>'tutorials/store')) }}
  @include('partials/_addTutorialForm', ['submit_text' => 'Add a Tutorial'])
{{ Form::close() }}

</div>


@endsection