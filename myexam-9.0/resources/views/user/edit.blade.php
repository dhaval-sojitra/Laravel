@extends('template.sample-layout')
@section('content')
    <h2 align="center">Edit Data</h2>
    <div class="container">

        <form method="POST" action="{{ route('Mypro.update',$data->id) }}">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" class="form-control" value="{{$data->name}}"
                    placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">City</label>
                <input type="text" name="city" class="form-control" id="exampleInputPassword1"value="{{$data->city}}"
                    placeholder="Enter Your city">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Phone</label>
                <input type="text" name="phone" class="form-control" id="exampleInputPassword1"value="{{$data->phone}}"
                    placeholder="Enter Your Phone Number">
            </div>
            <label for="exampleInputPassword1">Address</label>
            <textarea class="form-control" id="editor" name="address" rows="3">{!!$data->address!!}</textarea>

            <script>
                ClassicEditor
                    .create(document.querySelector('#editor'))
                    .catch(error => {
                        console.error(error);
                    });
            </script>
            <div style="display: flex; justify-content: center; margin-top: 10px;">

                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
