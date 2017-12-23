@extends('layouts.app')

@section('title', 'My Courses')
@section('description', 'this is a description')
@section('main')


<div class="container">

  <h1 class="center">THIS IS COURSES PAGE</h1>
  <div class="row">
    @if( !$courses->count() )
      <p> You haven't add any Courses yet !</p>
    @else  
      @if(Session::has('message'))
        <div class="card-panel green-text">{{Session::get('message')}}</div>
      
      @endif
      @foreach($courses as $course)
        <div class="col s3">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">{{$course->title}}</span>
              <p>{{$course->description}}</p>
            </div>
            <div class="card-action">
              <a href="{{$course->url}}">View Course</a><br>
              <a href="{{url('/courses/edit', $course->id)}}">Edit Course</a><br>
              <a href="{{url('/courses/delete', $course->id)}}">Delete Article</a> 

            </div>
          </div>
        </div>
      @endforeach
    @endif  
  </div>

  <div class="course-add">
    <a href="{{ url('/courses/create') }}">
      <button class="btn waves-effect waves-light" type="button" value="course add" name="addCourse">Add a Course
        <i class="material-icons">add</i>
    </button></a>
  </div>



</div>