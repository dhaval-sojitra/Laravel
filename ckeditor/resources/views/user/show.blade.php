@extends('templates.home')

@section('content')
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }
    .container {
        max-width: 600px;
        margin-top: 10px;
        margin-bottom: 20px;
        background-color: #fff;
        padding: 2px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: left; /* Align content to the left */
    }
    .comment-form {
        width: 100%;
    }
    .comment-form textarea {
        width: calc(100% - 22px); /* Adjusted width for the border */
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        resize: vertical;
    }
    .comment-form button {
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    .comment-form button:hover {
        background-color: #0056b3;
    }
h4{
    margin-bottom: 12px;
    margin-top: 5px;
}
    .card {
        width: 300px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        margin-bottom: 20px;
    }

    .card-content {
        padding: 20px;
    }
    .card-title {
        font-size: 20px;
        margin-bottom: 10px;
    }
    .card-description {
        color: #555;
        font-size: 16px;
        line-height: 1.5;
    }
    .card-action {
        padding: 10px 20px;
        background-color: #f4f4f4;
        text-align: right;
    }
    .card-action a {
        text-decoration: none;
        color: #007bff;
        font-weight: bold;
    }
    .card-action a:hover {
        color: #0056b3;
    }
</style>
<body>
<div style="margin-left: 20px;">
    <h1 style="margin-top: 20px;">Title:</h1>
    <h3>{{ $mypost->title }}</h3><br>
<h1>Subtitle:</h1>
<h3>{{ $mypost->subtitle }}</h3><br>
<h1>Content:</h1>
<h3>{{ $mypost->content }}</h3><br>


<div class="container">
    <h4>Add Comment</h4>
    <form class="comment-form" action="{{route('comment',$mypost->id)}}" method="post">
        @csrf
        <textarea name="content" id="comment" rows="5" placeholder="Write your comment here..." required></textarea>
        <input type="hidden" name="user_id" value="1">
        <input type="hidden" name="blog_id" value="{{$mypost->id}}">
        <button type="submit">Submit</button>
    </form>
</div>
@foreach ($comment as $comment)

<div class="card">
    <div class="card-content">
        <div class="card-title">{{$comment -> user_id}}</div>
        <div class="card-description">{{$comment -> content}}</div>
    </div>
</div>
@endforeach
</div>
</body>
@endsection
