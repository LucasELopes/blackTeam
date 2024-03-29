<!DOCTYPE html>
<html lang="pt-br">
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
        <img src="{{asset('assets/img/logo/logoLonga.png')}}" alt="logo">
    </header>
    <main>
        <div class="container-login">
            @yield('content-main')
        </div>
    </main>
    @yield('script')
</body>
</html>