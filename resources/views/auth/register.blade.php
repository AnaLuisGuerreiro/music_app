@extends('layouts.main_login')

@section('content')
 <h1 class="text-center mb-5 text-dark">Register</h1>
<form method="POST" action="{{ route('user.register') }}">
    @csrf
    <div class="mb-4">
        <label for="name" class="form-label text-black">Name</label>
        <input name="name" type="text" class="form-control" id="name" required autofocus>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label text-dark">Email address</label>
        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
        <div id="emailHelp" class="form-text text-muted mb-3 mt-2">We'll never share your email with anyone else.</div>
        @error('email')
          <div class="alert alert-danger mt-2 mb-2">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-4">
        <label for="password" class="form-label text-black">Password</label>
        <input name="password" type="password" class="form-control" id="exampleInputPassword1" required>
    </div>
    <div class="mb-4">
        <label for="password_confirmation" class="form-label text-black">Confirm Password</label>
        <input name="password_confirmation" type="password" class="form-control" id="password_confirmation" required>
    </div>
    <div class="mb-2 mt-5 text-center">
        <button type="submit" class="btn btn-dark">Register</button>
    </div>
</form>
@endsection
