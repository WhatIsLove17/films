<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>mySite</title>
</head>
<body>
<div class="container">
    <div class="row">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{route('main.index')}}">Main Page</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('film.index')}}">Films</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('about.index')}}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('contacts.index')}}">Contacts</a>
            </li>
        </ul>
    </div>
    @yield('content')
</div>
</body>
</html>
