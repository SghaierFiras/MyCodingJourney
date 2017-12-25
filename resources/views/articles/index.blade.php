@extends('layouts.app')

@section('title', 'My Articles')
@section('description', 'this is a description')
@section('main')

<div class="container"> 
 
  <h1 class="center">THIS IS ARTICLES PAGE</h1> 
  <div class="row"> 
    @if( !$articles->count() ) 
      <p> You haven't add any Articles yet !</p> 
    @else  
    
    @if(Session::has('message'))
      <div class="card-panel green-text">{{Session::get('message')}}</div>
    @endif 
    
      @foreach($articles as $article) 
        <div class="col s3"> 
          <div class="card blue-grey darken-1"> 
            <div class="card-content white-text"> 
              <span class="card-title">{{$article->title}}</span> 
              <p>{{$article->description}}</p> 
            </div> 
            <div class="card-action"> 
              <a href="{{$article->url}}">View Article</a><br>
              <a href="{{url('/articles/edit', $article->id)}}">Edit Article</a> 
              <a href="{{url('/articles/delete', $article->id)}}">
              {{ Form::model($article, array('url'=>['articles', $article->id], 'method'=>'DELETE')) }}
                {{Form::submit('Delete Article')}}
              {{ Form::close() }}
              </a> 
            </div> 
          </div> 
        </div> 
      @endforeach 
    @endif   
  </div> 
 
  <div class="article-add"> 
    <a href="{{ url('/articles/create') }}"> 
      <button class="btn waves-effect waves-light" type="button" value="article add" name="addArticle">Add a article 
        <i class="material-icons">add</i> 
    </button></a> 
  </div> 
 
 
 
</div>