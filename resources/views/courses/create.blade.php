@extends('layouts.app')


@section('title', 'Add a Course')
@section('description', 'this is a description')
@section('main')

<div class="container">
  <div class="row">
    <div class="input-field col s4">
      <input id="title" placeholder="Title" type="text" class="validate">
      <label for="title">Title</label>
    </div>
  </div>

  <div class="row">
    <div class="input-field col s4">
      <input id="url" type="url" lass="validate">
      <label for="url" data-error="wrong" data-success="right">URL</label>
    </div>
  </div>

  <div class="row">
    <div class="input-field col s4">
      <input type="date" class="datepicker">
      <label for="startDate">Start Date</label>
    </div>
  </div>

  <div class="row">
    <div class="input-field col s4">    
      <label for="finishDate">Finish Date</label>
      <input type="date" class="datepicker">
    </div>
  </div>

  <div class="row">
    <div class="input-field col s4">   
    <textarea id="textarea1" class="materialize-textarea"></textarea>
    <label for="textarea1">Description</label>
    </div>
  </div>

  <div class="row">
    <div class="input-field col s4">
      <button class="btn waves-effect waves-light" type="submit" name="action">Submit
      <i class="material-icons right">send</i>
      </button>
    </div>
  </div>


</div>