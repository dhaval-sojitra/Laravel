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
        </tr>
    </thead>
    <tbody>
        @foreach ($patient as $patient)

        <tr>
            <td>{{$patient->id}}</td>
            <td>{{$patient->name}}</td>
            <td>{{$patient->number}}</td>
            <td>
                <a href="{{route('Hospital.show',$patient->id)}}">Show</a>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>


@endsection
