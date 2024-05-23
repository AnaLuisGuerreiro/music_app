 @extends('layouts.main_login')

@section('content')
 <h1 class="text-center mb-5 text-dark">Login</h1>
                    <form method="POST" action="{{ route('login') }}">
                    @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-dark">Email address</label>
                            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required autofocus>
                        <div id="emailHelp" class="form-text text-muted mb-3 mt-2">We'll never share your email with anyone else.</div>

                        <div class="mb-4">
                            <label for="exampleInputPassword1" class="form-label text-black" >Password</label>
                            <input name="password" type="password" class="form-control" id="exampleInputPassword1" required>
                        </div>
                         @if ($errors->has('login_error'))
                        <div class="alert alert-danger">
                            {{ $errors->first('login_error') }}
                        </div>
                    @endif
                        <div class="mb-2 mt-5 text-center">
                            <button type="submit" class="btn btn-dark">Submit</button>
                        </div>
                        <div class="text-center">
                            <a href="{{ route('password.request') }}" class="text-center text-black"><small> Forgot password? </small></a>
                        </div>
                    </form>

@endsection
