@extends('template.sample-layout')
@section('content')

<h1 align="center">My Data</h1>

<table class="table table-striped table-hover">
    <thead>
        <th>Id</th>
        <th>Name</th>
        <th>City</th>
        <th>Edit</th>
        <th>Delete</th>
        <th>Show</th>
    </thead>
    <tbody>
        @foreach ($mydata as $data)
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->city}}</td>
                <td><a href="{{route('Mypro.edit' , $data->id)}}" class="btn btn-warning">Edit</a></td>
                <td>
                    <form action="{{route('Mypro.destroy',$data->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete" class="btn btn-danger">
                    </form>
                </td>
                <td><a href="{{route('Mypro.show',$data->id)}}" class="btn btn-primary">Show</a></td>
            </tr>
        
            
        @endforeach
    </tbody>
</table>

@endsection