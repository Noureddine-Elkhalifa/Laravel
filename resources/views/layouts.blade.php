<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    @include('includes.header')
    <div class="container">
        @yield('content')
    </div>

    @include('includes.footer')
    @yield('script')
</body>
</html>