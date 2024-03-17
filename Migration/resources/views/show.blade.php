@extends('index')

@section('content')
    <style>
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
    </style>
    <script>
        function openURL() {
            var routeUrl = "<?php echo route('student'); ?>";
            window.open(routeUrl, "_blank");
        }
    </script>
    <div class="container">
        <h1>Student Details</h1>
        <button onclick="openURL()"
            style="background-color: #4CAF50;
            border: none;
            color: white;
            padding: 13px 10px;
            text-align: center;
            margin-right: 5px
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 10px;">+
            Add Student</button>
    </div>
    <div class="div">
        <table class="styled-table">
            <thead>
                <tr>
                    <th>Student ID</th>
                    <th>Student Name</th>
                    <th>Enrollment No</th>
                    <th>Program ID</th>
                    <th>Department ID</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($student as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->enrollmentno }}</td>
                        <td>{{ $student->programid }}</td>
                        <td>{{ $student->departmentid }}</td>
                        <td>
                            <a href="{{route('update',$student->id)}}" class="edit-btn">Edit</a>
                        </td>
                        <td>
                            <form action="{{route('destroy',$student->id)}}" method="post">
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
