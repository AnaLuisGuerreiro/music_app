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
                    <h1 class="text-center mb-5">Login</h1>
                    <form method="POST" action="{{ route('login') }}">
                    @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-black">Email address</label>
                            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text text-muted mb-3 mt-2">We'll never share your email with anyone else.</div>

                        <div class="mb-4">
                            <label for="exampleInputPassword1" class="form-label text-black">Password</label>
                            <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-2 mt-5 text-center">
                            <button type="submit" class="btn btn-dark">Submit</button>
                        </div>
                        <div class="text-center">
                            <a href="{{ route('password.request') }}" class="text-center text-black"><small> Forgot password? </small></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>
