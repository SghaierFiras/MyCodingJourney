   {!! Form::token() !!}

  @include('partials.alerts.errors');

  <div class="row">
    <div class="input-field col s4"> 
       {{ Form::text('title', null, ['class'=>'validate']) }}
       {{ Form::label('title', 'Title') }}
       @if($errors->has('title'))
        <p class="red-text">{{$errors->first('title')}}</p> 
       @endif
    </div>
  </div>

  <div class="row">
    <div class="input-field col s4">
       {{ Form::url('url', null, ['class'=>'validate']) }}
       {{ Form::label('url', 'URL', ['data-error'=>'wrong',  'data-success'=>'right']) }}
       @if($errors->has('url'))
        <p class="red-text">{{$errors->first('url')}}</p> 
       @endif
    </div>
  </div>

  <div class="row">
    <div class="input-field col s4">
      {{Form::date('startDate', \Carbon\Carbon::now(), ['class'=>'datepicker'])}}
      {{Form::label('startDate', 'Start Date')}}
      @if($errors->has('startDate'))
        <p class="red-text">{{$errors->first('startDate')}}</p> 
       @endif
    </div>
  </div>

  <div class="row">
    <div class="input-field col s4">
      {{Form::date('finishDate', \Carbon\Carbon::now(), ['class'=>'datepicker'])}}
      {{Form::label('finishDate', 'Finish Date')}}
      @if($errors->has('finishDate'))
        <p class="red-text">{{$errors->first('finishDate')}}</p> 
       @endif
    </div>
  </div>

  <div class="row">
    <div class="input-field col s4">
      {{Form::textarea('description', null, ['class'=>'materialize-textarea'])}}
      {{Form::label('description', 'Description')}}
      @if($errors->has('description'))
        <p class="red-text">{{$errors->first('description')}}</p> 
       @endif
    </div>
  </div>



  <div class="row">
    <div class="input-field col s4">
      {{Form::submit($submit_text, ['class'=>'btn waves-effect waves-light'])}}
    </div>
  </div>
