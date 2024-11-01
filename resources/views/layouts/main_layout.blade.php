<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Musics app</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
   @if (session('message'))
        <div class="alert alert-success position-fixed mx-auto" style="top: 0; left: 0; right: 0; z-index: 1050; width: 500px; text-align: center;">
            {{ session('message') }}
        </div>
    @endif

    <nav class="navbar navbar-expand-lg  border-bottom border-body" data-bs-theme="dark"
    style="background-color: rgb(29, 29, 29);">
    <div class="container-fluid">
        <a class="navbar-brand" href="/"><img src="{{ asset('img/logo.png') }}" alt="Music logo"
            class="music-logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        @if (Route::has('login'))
        <nav class="-mx-3 flex flex-1 justify-end">
            @auth
            <div class="row">
                <div class="col d-flex align-items-center justify-content-center">
                    Olá, {{ Auth::user()->name }}
                </div>
                <div class="col">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-outline-info">Logout</button>
                    </form>
                </div>
            </div>
            @else
            <a href="{{ route('login') }}" class=" btn btn-outline-light">Log in</a>
            <a href="{{ route('register') }}" class=" btn btn-outline-light">Register</a>
            @endauth
                </nav>
            @endif
        </div>
    </nav>


    <div class="content">
        @yield('content')
    </div>

    <section class="">
        <footer class="text-center text-white" style="background-color: #222222f1;">
            <div class="container p-4 pb-0">
                <section class="">
                    <p class="d-flex justify-content-center align-items-center">
                        <span class="me-3">Register for free</span>
                        <a href="{{ route('user.register')}}" class="btn btn-outline-light btn-rounded" >
                           Sign up!
                        </a>
                    </p>
                </section>
            </div>
            <div class="text-center p-3" style="background-color: rgb(29, 29, 29);">
                © 2024 Copyright:
                <a class="text-white" href="#">Ana Guerreiro</a>
            </div>
        </footer>
    </section>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>
