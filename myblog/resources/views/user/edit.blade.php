@extends('user.home')


@section('content')
<h2 align="center">Edit Your Post</h2>
<form action="{{route('update',$mypost->id)}}" method="post">
    @method('put')
    @csrf
<table  align="center">
    <tr>
            <td >Title</td>
            <td>
                <input type="text" name="title"  value="{{$mypost->title}}" placeholder="Enter Title">
            </td>
    </tr>
    <tr>
            <td>Sub-Title</td>
            <td>
                <input type="text" name="subtitle" value="{{$mypost->subtitle}}" placeholder="Enter Sub-Title">
            </td>
    </tr>
    <tr>
        <td>Blog Content</td>
        <td>
                <textarea rows="3" name="content">{{$mypost->content}}</textarea>
        </td>
    </tr>
    <tr>
    <td colspan="2" align="center">
        <input type="submit" value="Edit Bolg">
    </td>
    </tr>
</table>
</form>

@endsection
