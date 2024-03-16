@extends('index')

@section('content')
    <style>
        /* Basic CSS Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Form Styles */
        form {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        form h2 {
            margin-bottom: 20px;
        }

        form label {
            display: block;
            margin-bottom: 5px;
        }

        form input[type="text"],
        form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        form button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .page-title {
            text-align: center;
            color: #333;
            margin-top: 20px;
        }

        form button:hover {
            background-color: #45a049;
        }
    </style>

    </head>

    <body>

        <h1 class="page-title">Add New Student</h1>
        <!-- Form -->
        <form action="{{route('addstudent')}}" method="post" style="margin-top: 20px;">
            @csrf
            <label for="title">Student ID:</label>
            <input type="text" id="title" name="id" required><br><br>
            <label for="subtitle">Student Name:</label>
            <input type="text" id="name" name="name" required><br><br>


            <label for="subtitle">Enrollment NO:</label>
            <input type="text" id="name" name="enrollment" required><br><br>
            <label for="subtitle">Program ID:</label>
            <input type="text" id="name" name="program" required><br><br>

            <label for="subtitle">Department ID:</label>
            <input type="text" id="name" name="department" required><br><br>


            <div style="text-align: center;">
                <button type="submit">Submit</button>
            </div>
        </form>
    </body>
@endsection
\
