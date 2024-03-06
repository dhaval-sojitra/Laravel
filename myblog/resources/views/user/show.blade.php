@extends('user.home')

@section('content')

<h2 align="center">My Posts</h2>
<div class="container">
<table class="table table-sm table-hover">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Title</th>
        <th scope="col">Sub-title</th>
        <th scope="col">Bolg Content</th>
        <th scope="col">Delete</th>
        <th scope="col">Show Data</th>
      </tr>
    </thead>
    @foreach ($myposts as $mypost)
        <tbody>
            <tr>
            <th scope="row">{{$mypost->id}}</th>
            <td>{{$mypost->title}}</td>
            <td>{{$mypost->subtitle}}</td>
            <td>{{$mypost->content}}</td>
            <td>
                <form action="{{route('delete',$mypost->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete" class="btn btn-danger btn-outline-dark">
                </form>
            </td>
            <td>
                <a href="{{route('edit',$mypost->id)}}" class="btn btn-warning btn-outline-dark">Edit</a>
            </td>

            </tr>

        </tbody>
    @endforeach

  </table>
</div>
@endsection
