<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            overflow: hidden;
        }
        .login-container {
            height: 100vh;
        }
        .login-column {
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: url('{{asset('img/login_img.avif')}}');
            background-size: cover;
            background-position: center;
            margin-right: 0; /* Removendo a margem direita */
        }
        .login-box {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="row g-0 login-container">
        <div class="col-md-6 login-column">
        </div>
        <div class="col-md-6 d-flex align-items-center justify-content-center">
            <div class="login-box p-5">
                @yield('content')
            </div>
        </div>
    </div>

</body>
</html>
