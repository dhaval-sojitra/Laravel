@extends('template.layout')
@section('content')
    <h1 align="center">Welcome to Mypost</h1>
    <div class="container">
        <table class="table thead-dark table-striped table-bordered table-hover table-sm">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Subtitle</th>
                    <th scope="col">Content</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Show</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mypost as $d)
                    <tr>
                        <th scope="row">{{ $d->id }}</th>
                        <td>{{ $d->title }}</td>
                        <td>{{ $d->subtitle }}</td>
                        <td>{!! $d->content !!}</td>
                        <td>
                            <a class="btn btn-warning" href="{{route('mypost.edit',$d->id)}}">Edit</a>
                        </td>
                        <td>
                            <form action="{{route('mypost.destroy',$d->id)}}" method="post">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                        <td>
                            <a class="btn btn-primary" href="{{route('mypost.show',$d->id)}}">Show</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
@endsection
