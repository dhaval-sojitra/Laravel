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
            margin-bottom: 10px;
        }

        form input,
        form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
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

        <h1 class="page-title">Add New Patient</h1>
        <!-- Form -->
        <form action="{{route('Hospital.store')}}" method="post" style="margin-top: 20px;">
            @csrf
            <label for="name">Patient Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="number">Moblie Number:</label>
            <input type="number" id="number" name="number" required><br><br>
            <label for="deseases"> Diseases:</label>
            <div>
                <textarea name="deseases" id="editor" cols="30" rows="15"></textarea>
            </div>
            <script>
                ClassicEditor
                    .create( document.querySelector( '#editor' ) )
                    .catch( error => {
                        console.error( error );
                    } );
            </script><br><br>
             <label for="medicines">Medicines:</label>
             <input type="text" id="medicines" name="medicines" required><br><br>
            <div style="text-align: center;">
                <button type="submit">Submit</button>
            </div>
        </form>
    </body>
@endsection
@section('script')
<script src="https://cdn.ckeditor.com/ckeditor5/41.2.0/classic/ckeditor.js"></script>
@endsection
