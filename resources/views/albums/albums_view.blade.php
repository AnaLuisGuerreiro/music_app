@extends('layouts.main_layout')

@section('content')



<div class="bg-albums">
    <h2 class="mb-5"></h2>
</div>
<div class="container">
    <h1 class="mb-5">{{ $band->name }}</h1>

    <table class="table align-middle mb-0 table-dark mb-5">
        <thead class="bg-dark">
            <tr>
                <th>Albums 💽</th>
                <th>Date release 📅</th>
                @auth
                    @if (Auth::user()->type == 2 || Auth::user()->type == 1)
                        <th class="text-center">Actions 🖱</th>
                    @endif
                @endauth
            </tr>
        </thead>
        <tbody>
            @foreach ($band->albums as $album)

                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="{{$album->image}}" alt="{{$album->name}}" class="album-img">
                            <div class="ms-3">
                                <p class="fw-bold mb-1">{{ $album->name }}</p>
                            </div>
                        </div>
                    </td>
                    <td>
                    <p class="mb-0 text-light">{{ $album->release_date }}</p>
                    </td>
                    <td class="text-center">
                        @auth
                            @if (Auth::user()->type == 2 || Auth::user()->type == 1)
                                <a href="{{ route('albums.album_edit', ['band_id' => $album->band_id, 'album_id' => $album->id]) }}" class="btn btn-warning" mdbRipple>Edit</a>
                            @endif
                            @if (Auth::user()->type == 1)
                                <a href="{{ route('album.remove', ['id' => $album->id, 'band_id' => $album->band_id]) }}" class="btn btn-danger" mdbRipple>Delete</a>
                            @endif
                        @endauth
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
</div>



@endsection
