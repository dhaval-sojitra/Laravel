@extends('template.layout')
@section('content')
<form action="{{route('mypost.update',$mypost->slug)}}" method="post">
    @csrf
    @method('put')
    <div class="form-group">
      <label>Title</label>
      <input type="text" name="title" value="{{$mypost->title}}" class="form-control" placeholder="Enter title">
    </div>
    <div class="form-group">
      <label>Subtitle</label>
      <input type="text" name="subtitle" class="form-control"  value="{{$mypost->subtitle}}" id="exampleInputPassword1" placeholder="Enter Subtitle">
    </div>
    <div class="form-group">
      <label>Content</label>
      <textarea id="editor" class="form-control" name="content" rows="3">{{$mypost->content}}</textarea>
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

