@extends('layouts.app')


@section('title', 'Edit a Tutorial')
@section('description', 'this is a description')
@section('main')

<div class="container">

{{ Form::model($tutorial, array('url'=>['tutorials/update', $tutorial->id], 'method'=>'PATCH')) }}
  @include('partials/_addTutorialForm', ['submit_text' => 'Edit Tutorial'])
{{ Form::close() }}

</div>


@endsection