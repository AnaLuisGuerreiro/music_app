@extends('layouts.main_layout')

@section('content')
<div class="container mt-5">
    <h1 class="mb-5">Edit Album</h1>
  <form action="{{ route('album.update', ['band_id' => $album->band_id, 'album_id' => $album->id]) }}" method="POST" class="mb-5">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Album Name</label>
        <input type="text" name="name" class="form-control" value="{{ $album->name }}" required>
    </div>
    <div class="mb-3">
        <label for="release_date" class="form-label">Release Date</label>
        <input type="text" name="release_date" class="form-control" value="{{ $album->release_date }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Save Changes</button>
    <a href="{{ route('albums.albums_view', $album->band_id) }}" class="btn btn-secondary">Cancel</a>
</form>

</div>
@endsection
