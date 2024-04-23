@extends('template.layout')

@section('content')
    @auth
        <h2 align = "center" style="padding: 8px;">WelCome...{{ $user->name }}</h2>
    @endauth

    @guest
        <h2 align = "center" style="padding: 8px; padding-bottom: 0.0; margin-bottom: 0%">Welcome... </h2>
        <h5  align = "center" style="padding: 8px; padding-top: 0.0"><a href="http://localhost:8000">Click Here! to Login/Register</a></h5>
    @endguest
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
    <div class="container">
        <table>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>User Name</th>
                <th>User Email</th>
                @auth

                <th>Edit</th>
                <th>Delete</th>
                @endauth
            </tr>
            @forelse ($myposts as $mypost)
                <tr>
                    <td>{{ $mypost->id}}</td>
                    <td>{{ $mypost->title }}</td>
                    <td>{{ $mypost->getUser->name }}</td>
                    <td>{{ $mypost->getUser->email }}</td>
                    @auth
                    <td><button>Edit</button></td>
                    <td><button>Delete</button></td>
                    @endauth
                </tr>
            @empty
                <p>No data found!</p>
            @endforelse
        </table>
        <div style="display: flex; align-items: center; justify-content: center; margin-top: 12px;">
            {{$myposts->links()}}
        </div>
    </div>
@endsection
