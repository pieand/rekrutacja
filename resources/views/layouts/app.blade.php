<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="shortcut Icon" href="{{asset('assets/img/logotitle.png')}}"/>
    <title>Strefa Klienta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    @if (Session::has('loginId'))
        <div class="top-bar">
            <p class="top-bar-text">user@gmail.com</p>
            <a class="top-bar-link" href={{url('logout')}}>Wyloguj się</a>
        </div>

    @else
        <div class="top-bar">
            <a class="top-bar-link" href="{{url('login')}}">Zaloguj się</a>
        </div>
    @endif
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <div class="navbar-logo">
            <img src="{{asset('assets/img/logo.jpg')}}" alt="koba logo" class="d-inline-block align-text-top logo">
        </div>
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item pad">
                        <a class="nav-link active" aria-current="page" href="{{url ('/')}}">Start</a>
                    </li>
                    @if (Session::has('loginId'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('contracts')}}">Moje umowy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('settlements')}}">Rozliczenia</a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @yield('content')
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>
