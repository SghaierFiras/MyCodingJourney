
@if($errors->any())
  <ul>
    @foreach($errors->all() as $error)
      <li class="card-panel red-text">{{$error}}</li>
    @endforeach
  </ul>
@endif