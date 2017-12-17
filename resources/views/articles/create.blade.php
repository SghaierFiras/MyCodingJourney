@extends('layouts.app')
 
 
@section('title', 'Add an Article')
@section('description', 'this is a description')
@section('main') 
 
<div class="container"> 

  {{ Form::model($article, array('url'=>'articles/store')) }} 
  @include('articles/partials/_form', ['submit_text' => 'Add a Article']) 
{{ Form::close() }} 

</div> 

@endsection
