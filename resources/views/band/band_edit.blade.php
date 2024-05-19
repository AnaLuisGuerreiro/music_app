@extends('layouts.main_layout')

@section('content')
<div class="container mt-5">
    <h1>Edit Band</h1>
    <form action="{{ route('band.update', $band->id) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Band Name</label>
            <input type="text" name="name" class="form-control" value="{{ $band->name }}" required>
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <input type="text" name="genre" class="form-control" value="{{ $band->genre }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Save Changes</button>
        <a href="{{ route('home') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
