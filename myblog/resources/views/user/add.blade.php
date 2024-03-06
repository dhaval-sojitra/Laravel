@extends('user.home')


@section('content')
<h2 align="center">Add Post</h2>
<form action="show" method="post">
    @csrf
<table  align="center">
    <tr>
            <td >Title</td>
            <td>
                <input type="text" name="title"  placeholder="Enter Title">
            </td>
    </tr>
    <tr>
            <td>Sub-Title</td>
            <td>
                <input type="text" name="subtitle" placeholder="Enter Sub-Title">
            </td>
    </tr>
    <tr>
        <td>Blog Content</td>
        <td>
                <textarea rows="3" name="content"></textarea>
        </td>
    </tr>
    <tr>
    <td colspan="2" align="center">
        <input type="submit" value="Add">
    </td>
    </tr>
</table>
</form>

@endsection
