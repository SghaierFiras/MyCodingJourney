@extends('layouts.app')

@section('title', 'My Tutorials')
@section('description', 'this is a description')
@section('main')


<div class="container">

  <h1 class="center">THIS IS TUTORIALS PAGE</h1>
  <div class="row">
    @if( !$tutorials->count() )
      <p> You haven't add any Tutorials yet !</p>
    @else  
      @if(Session::has('message'))
        <div class="card-panel green-text">{{Session::get('message')}}</div>
      
      @endif
      @foreach($tutorials as $tutorial)
        <div class="col s3">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">{{$tutorial->title}}</span>
              <p>{{$tutorial->description}}</p>
            </div>
            <div class="card-action">
              <a href="{{$tutorial->url}}">View Tutorial</a><br>
              <a href="{{url('/tutorials/edit', $tutorial->id)}}">Edit Tutorial</a><br>
              <a href="{{url('/tutorials/delete', $tutorial->id)}}">
              {{ Form::model($tutorial, array('url'=>['tutorials', $tutorial->id], 'method'=>'DELETE')) }}
                {{Form::submit('Delete Tutorial')}}
              {{ Form::close() }} </a>

            </div>
          </div>
        </div>
      @endforeach
    @endif  
  </div>

  <div class="tutorial-add">
    <a href="{{ url('/tutorials/create') }}">
      <button class="btn waves-effect waves-light" type="button" value="tutorial add" name="addtutorial">Add a Tutorial
        <i class="material-icons">add</i>
    </button></a>
  </div>



</div>