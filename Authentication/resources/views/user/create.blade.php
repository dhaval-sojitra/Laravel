@extends('template.layout')
@section('content')
<style>
    body {
        background-color: #f8f9fa;
    }
    .form-container {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 30px;
        margin-top: 50px;
    }
    .form-title {
        text-align: center;
        font-size: 24px;
        margin-bottom: 20px;
    }
    .form-group label {
        font-weight: bold;
        margin-top: 5px;
    }
</style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2 form-container">
            <h2 class="form-title">Add Your Post</h2>
            <form action="{{ route('mypost.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>

                <div class="form-group">
                    <label for="subtitle">Subtitle:</label>
                    <input type="text" class="form-control" id="subtitle" name="subtitle">
                </div>

                <div class="form-group">
                    <label for="content">Content:</label>
                    <textarea id="content" name="content" class="form-control ckeditor"></textarea>
                </div>
                <div style="display: flex; align-items: center; justify-content: center; margin-top: 10px">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    // Initialize CKEditor
    ClassicEditor
        .create(document.querySelector('.ckeditor'))
        .catch(error => {
            console.error(error);
        });
</script>
</form>



@endsection
