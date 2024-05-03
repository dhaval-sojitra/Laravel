@extends('template.layout')
@section('content')

<h2>Title :</h2>
<p>{{$mypost->title}}</p>
<hr>
<h2>Subtitle :</h2>
<p>{{$mypost->subtitle}}</p>
<hr>
<h2>Content :</h2>
<p>{{$mypost->content}}</p>
<hr>

@endsection

