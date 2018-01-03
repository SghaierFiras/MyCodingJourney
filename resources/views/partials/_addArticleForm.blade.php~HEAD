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
      {{Form::select('plateform',  [$article->plateform,'placeholder' => 'Choose a plateform...'])}}
      {{Form::label('plateform', 'Plateform')}} 
    </div> 
  </div> 
 
  <div class="row"> 
    <div class="input-field col s4"> 
      {{Form::date('readDate', date($article->readDate), ['class'=>'datepicker'])}} 
      {{Form::label('readDate', 'Read Date')}} 
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
      {{Form::submit($submit_text, ['class'=>'btn waves-effect waves-light'])}} 
    </div> 
  </div> 