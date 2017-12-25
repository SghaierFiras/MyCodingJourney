@extends('layouts.app')
 
@section('title', 'Add an Article')
@section('description', 'this is a description')
@section('main') 

<div class="container"> 

  {{ Form::model($article, array('url'=>['articles/store', $article->id], 'method'=>'POST')) }} 
    @include('partials/_addArticleForm', ['submit_text' => 'Add an Article']) 
  {{ Form::close() }} 

</div> 

@endsection
