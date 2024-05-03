@extends('template.layout')
@section('content')
<form action="{{route('mypost.store')}}" method="post">
    @csrf
    <div class="form-group">
      <label>Title</label>
      <input type="text" name="title" class="form-control" placeholder="Enter title">
    </div>
    <div class="form-group">
      <label>Subtitle</label>
      <input type="text" name="subtitle" class="form-control" id="exampleInputPassword1" placeholder="Enter Subtitle">
    </div>
    <div class="form-group">
      <label>Content</label>
      <textarea class="form-control" id="editor" name="content" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>


@endsection

