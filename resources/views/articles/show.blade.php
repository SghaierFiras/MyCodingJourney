@extends('layouts.app')

@section('title', 'Article: {{article->title}}')
@section('description', 'this is a description')
@section('main')

<div class="container">
  <div class="row">
    <div class="col s3"> 
      <div class="card blue-grey darken-1"> 
        <div class="card-content white-text"> 
          <span class="card-title">{{$article->title}}</span> 
          <p>{{$article->description}}</p> 
        </div> 
        <div class="card-action"> 
          <a href="{{$article->url}}">View Article</a><br>
          <a href="{{url('/articles/update')}}">Edit Article</a> 
          <a href="{{url('/articles/delete')}}">Delete Article</a> 
        </div> 
      </div> 
    </div> 
  </div>
</div>