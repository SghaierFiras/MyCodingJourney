
   {!! Form::token() !!}

  <div class="row">
    <div class="input-field col s4"> 
       {{ Form::text('title', null, ['class'=>'validate']) }}
       {{ Form::label('title', 'Title') }}
    </div>
  </div>

  <div class="row">
    <div class="input-field col s4">
       {{ Form::url('url', null, ['class'=>'validate']) }}
       {{ Form::label('url', 'URL', ['data-error'=>'wrong',  'data-success'=>'right']) }}
    </div>
  </div>

  <div class="row">
    <div class="input-field col s4">
      {{Form::date('startDate', date($course->startDate), ['class'=>'datepicker'])}}
      {{Form::label('startDate', 'Start Date')}}
    </div>
  </div>

  <div class="row">
    <div class="input-field col s4">
      {{Form::date('finishDate', date($course->startDate), ['class'=>'datepicker'])}}
      {{Form::label('finishDate', 'Finish Date')}}
    </div>
  </div>

  <div class="row">
    <div class="input-field col s4">
      {{Form::textarea('textarea1', null, ['class'=>'materialize-textarea'])}}
      {{Form::label('textarea1', 'Description')}}
    </div>
  </div>

  <div class="row">
    <div class="input-field col s4">
      {{Form::select('plateform',  [$course->plateform,'placeholder' => 'Choose a plateform...'])}}
      {{Form::label('plateform', 'Plateform')}}
    </div>
  </div>

  <div class="row">
    <div class="input-field col s4">
      {{Form::select('category', ['Tuto'=>'Tutorial', 'C'=>'Course'])}}
      {{Form::label('category', 'Category')}}
    </div>
  </div>

  <div class="row">
    <div class="input-field col s4">
      {{Form::submit($submit_text, ['class'=>'btn waves-effect waves-light'])}}
    </div>
  </div>
