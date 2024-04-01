<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @yield('script')
</head>
<body background="#ADD8E6">
    <h1 align="center">My Blog</h1>
    @include('templates.navbar')
    @yield('content')
    @include('templates.footer')

</body>
</html>
