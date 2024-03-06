@extends('Templates.Index')

@section('content')
<div class="container">
<form method="post" action="{{route('Store')}}">
    @csrf
  <div class="form-group mt-2" >
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" name="title" placeholder="Enter Title">
  </div>
  <div class="form-group mt-2">
    <label for="exampleInputPassword1">Subtitle</label>
    <input type="text" class="form-control" name="subtitle" placeholder="Subtitle">
  </div>
  <div class="form-group mt-2">
        <label for="exampleFormControlTextarea1">Your Content</label>
        <textarea class="form-control" name="content" rows="3"></textarea>
      </div>
  <div>
  <button type="submit" class="btn btn-primary mt-2">Submit</button>
  </div>
</form>
</div>
@endsection
