@extends('layouts.main_layout')

@section('content')
<div class="bands-img">
    <h1 class="mb-5 title-bands">Explore some bands</h1>
</div>

<div class="container mt-5">
    <table class="table align-middle mb-0 table-dark mb-5">
        <thead class="bg-dark">
            <tr>
                <th>Band 🎸</th>
                <th>Albums 💽</th>
                <th class="text-center">Actions 🖱</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bands as $band)
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            @if ($band->image)
                                <img src="{{ $band->image }}" alt="{{ $band->name }}"
                                    style="width: 45px; height: 45px" class="rounded-circle" />
                            @else
                                <!-- Se não houver imagem, exibir um ícone padrão -->
                                <i class="fas fa-music"></i>
                            @endif
                            <div class="ms-3">
                                <p class="fw-bold mb-1">{{ $band->name }}</p>
                                <p class="mb-0 text-light">{{ $band->genre }}</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <!-- Número de álbuns da banda -->
                        <p class="fw-normal mb-1">{{ $band->album_count }}
                        @for($i = 0; $i < $band->album_count;$i++)
                        💿
                        @endfor
                        </p>
                    </td>
                    <td class="text-center">
                        <a href="{{ route('albums.albums_view', $band->id) }}" class="btn btn-info" mdbRipple >View</a>
                        <a href="{{ route('band.edit', $band->id) }}" class="btn btn-warning" mdbRipple>Edit</a>
                        <a href="{{ route('band.remove', $band->id) }}"class="btn btn-danger" mdbRipple>Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
