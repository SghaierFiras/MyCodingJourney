@extends('layouts.app')
 
@section('title', 'Edit Article')
@section('description', 'this is a description')
@section('main') 
 
<div class="container"> 

  {{ Form::model($article, array('url'=>'articles/update', 'method'=>'PUT')) }} 
    @include('articles/partials/_form', ['submit_text' => 'Edit the Article']) 
  {{ Form::close() }} 

</div> 

@endsection
