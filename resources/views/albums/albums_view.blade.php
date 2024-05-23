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
                <th class="text-center">Actions 🖱</th>
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
                                <p class="mb-0 text-light">{{ $album->release_date }}</p>
                            </div>
                        </div>
                    </td>
                    <td>

                    </td>
                    <td class="text-center">

                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
</div>



@endsection
