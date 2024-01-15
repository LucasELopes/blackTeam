<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="shortcut icon" href="{{asset('assets/img/logo/logoCurta.png')}}" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>
</head>
<body>
    <header>
        @yield('content-header')
    </header>
    <main>
        @yield('content-main')
    </main>
</body>
</html>