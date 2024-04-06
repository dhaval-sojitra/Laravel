@extends('index')
@section('content')

<h2 align="center">Welcome....{{$hospital->name}}</h2>
<style>
    table{
        width: 50%;
        /* border : 2px sold black ; */
    }
    td{
        padding : 5px;
        border : 2px solid black ;

    }
</style>
<table>
    <tr>
        <td>Patient Name :</td>
        <td>{{$hospital->name}}</td>
    </tr>
    <tr>
        <td>Mobile :</td>
        <td>{{$hospital->number}}</td>
    </tr>
    <tr>
        <td>Diseases :</td>
        <td>{{$hospital->diseases}}</td>
    </tr>
    <tr>
        <td>Medicines :</td>
        <td>{{$hospital->medicines}}</td>
    </tr>
</table>


@endsection
