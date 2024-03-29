@extends('layout')

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
            max-width: 650px;
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
            margin-bottom: -15px;
        }

        form input,
        form select,
        form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: -7px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        form input:hover {
            border-color: black;
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

        form span {
            color: red;
            padding: 0;
            margin-bottom: 10px;

        }

        .error {
            width: 100%;
            padding: 10px;
            margin-bottom: -20px;
            border: 1px solid #ff0000;
            border-radius: 4px;
            box-sizing: border-box;
        }
    </style>

    </head>

    <body>

        <h1 class="page-title">Add New Student</h1>
        <!-- Form -->
        <form action="{{ route('store') }}" method="POST">
            @csrf
            <label for="studentid">Student ID:</label><br>
            <input value="{{ old('studentid') }}" type="text" id="studentid" name="studentid" placeholder="Required | Numeric"
                class=@error('studentid') error @enderror><br><br>
            @error('studentid')
                <span>{{ $message }}</span>
            @enderror

            <label for="firstname">First Name:</label><br>
            <input value="{{ old('firstname') }}" type="text" id="firstname" name="firstname"
                placeholder="Required | Alpha" class=@error('firstname') error @enderror><br><br>
            @error('firstname')
                <span>{{ $message }}</span>
            @enderror
            <label for="lastname">Last Name:</label><br>
            <input value="{{ old('lastname') }}" type="text" id="lastname" name="lastname"
                placeholder="Required | Alpha" class=@error('lastname') error @enderror><br><br>
            @error('lastname')
                <span>{{ $message }}</span>
            @enderror
            <label for="gender">Gender:</label><br>
            <select id="gender" name="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select><br><br>

            <label for="age">Age:</label><br>
            <input value="{{ old('age') }}" type="text" id="age" name="age" placeholder="Required | Numeric"
                class=@error('age') error @enderror><br><br>
            @error('age')
                <span>{{ $message }}</span>
            @enderror

            <label for="dob">Date of Birth:</label><br>
            <input value="{{ old('dob') }}" type="text" id="dob" name="dob" placeholder="Required | Date"
                class=@error('dob') error @enderror><br><br>
            @error('dob')
                <span>{{ $message }}</span>
            @enderror

            <label for="email">Email:</label><br>
            <input value="{{ old('email') }}" type="text" id="email" name="email" placeholder="Required | Email"
                class=@error('email') error @enderror><br><br>
            @error('email')
                <span>{{ $message }}</span>
            @enderror

            <label for="phonenumber">Phone Number:</label><br>
            <input value="{{ old('phonenumber') }}" type="text" id="phonenumber" name="phonenumber"
                placeholder="Required | Phonenumber" class=@error('phonenumber') error @enderror><br><br>
            @error('phonenumber')
                <span>{{ $message }}</span>
            @enderror

            <label for="address">Address:</label><br>
            <textarea id="address" name="address" placeholder="Required" class=@error('address') error @enderror>{{ old('address') }}</textarea><br><br>
            @error('address')
                <span>{{ $message }}</span>
            @enderror

            <label for="pincode">Pincode:</label><br>
            <input value="{{ old('pincode') }}" type="text" id="pincode" name="pincode"
                placeholder="Required | Numeric" class=@error('pincode') error @enderror><br><br>
            @error('pincode')
                <span>{{ $message }}</span>
            @enderror

            <div style="text-align: center;">
                <button type="submit">Submit</button>
            </div>

        </form>

    </body>
@endsection
