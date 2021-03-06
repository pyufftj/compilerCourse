<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{URL::to('css/main.css')}}">
</head>
<body>
@include('partials.header')
<div class="container">
    @yield('content')
</div>
@include('partials.footer')
<script src="{{asset('js/jquery-3.1.0.min.js')}}"></script>

</body>
</html>