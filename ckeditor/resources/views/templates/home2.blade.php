@extends('templates.home')
@section('content')

    <body>
        <style>
            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
            }

            th,
            td {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            th {
                background-color: #f2f2f2;
            }
        </style>

        <div style="padding: 20px;">
            <h2>Welcome...</h2>
            <table>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Subtitle</th>
                    <th>Content</th>
                    <th>Show</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>

                @foreach ($mypost as $mp)
                    <tr>
                        <th>{{ $mp->id }}</th>
                        <td>{{ $mp->title }}</td>
                        <td>{{ $mp->subtitle }}</td>
                        <td>{{ $mp->content }}</td>
                        <td><a href="{{ route('show' , $mp->id) }}">Show</a></td>
                        <td><a href="">Edit</a></td>
                        <td>
                            <form action="{{ route('delete', $mp->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete" />
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </body>
@endsection
