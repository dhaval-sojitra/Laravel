@extends('index')
@section('content')
    <style>
        form input[type="text"] {
            width: 200px;
            padding: 10px;
            margin-bottom: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        /* Style the table */
        .styled-table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #ddd;
            font-family: Arial, sans-serif;
            margin: 30px;
        }

        /* Header row */
        .styled-table th {
            background-color: #d5cece;
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        /* Data rows */
        .styled-table td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        tr {
            transition: background-color 0.3s ease;
        }

        /* Define hover effect for table rows */
        tr:hover {
            background-color: #e7dddd;
            /* Change to desired hover color */
        }


        /* Alternate row background color */
        .div {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            margin-top: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        h1 {
            margin: 0;
            /* Remove default margin */
            text-align: center;
            /* Center the text horizontally */
            flex: 1;
            /* Allow the h1 to grow to fill the available space */
        }

        .delete-btn {
            background-color: #f44336;
            color: white;
            border: none;
            padding: 4px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 2px 2px;
            cursor: pointer;
            border-radius: 3px;
        }

        .delete-btn:hover {
            background-color: #d32f2f;
        }

        .edit-btn {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 4px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 2px 2px;
            cursor: pointer;
            border-radius: 3px;
        }

        .edit-btn:hover {
            background-color: #45a049;
        }

        .btn {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 13px 10px;
            text-align: center;
            margin-right: 5px text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 10px;
        }

        h1 {
            margin-top: 10px;
        }
    </style>
    <h1 align="center">Users Information</h1>
    <div style="display: flex; justify-content: space-between">
        <form action="{{ route('multiuser') }}" method="post">
            @csrf
            <label for="title">Create Users</label>
            <input type="text" id="user" name="number" placeholder="Enter numbers of create user" required>
            <button type="submit" class="btn">Submit</button>

        </form>
        <a href="{{ route('user') }}" class="btn">+Add Single User</a>
    </div>
    <div class="div">
        <table class="styled-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Email Verified At</th>
                    <th>Password</th>
                    <th>Remember Token</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->password }}</td>
                        <td>{{ $user->remember_token }}</td>
                        <td>
                            <a href="#" class="edit-btn">Edit</a>
                        </td>
                        <td>
                            <form action="" method="">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete" class="delete-btn">
                            </form>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
@endsection
