@extends('index')

@section('content')
<h1 align="center">Patient Details</h1>
<style>
    /* Styles for the table */
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    th {
        background-color: #f2f2f2;
    }
    /* Add some hover effect */
    tr:hover {
        background-color: #f5f5f5;
    }
</style>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Phone</th>
           <th>Show</th>
           <th>Edit</th>
           <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($patient as $patients)

        <tr>
            <td>{{$patients->id}}</td>
            <td>{{$patients->name}}</td>
            <td>{{$patients->number}}</td>
            <td>
                <a href="{{route('Hospital.show',$patients->id)}}">Show</a>
            </td>
            <td>
                <a href="{{route('Hospital.edit',$patients->id)}}">Edit</a>
            </td>
            <td>
               <form action="{{route('Hospital.destroy',$patients->id)}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="Delete">
            </form>

            </td>
        </tr>

        @endforeach
    </tbody>
</table>


@endsection
