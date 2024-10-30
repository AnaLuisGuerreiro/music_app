<?php

namespace App\Http\Controllers;
use App\Models\Band;
use App\Models\Album;


use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function getAlbumsView($id){
            $band = Band::find($id);
            $albums = $band->albums;

            return view('albums.albums_view', compact('band','albums'));
        }

    public function editAlbum($band_id, $album_id){
        $album = Album::where('id', $album_id)->where('band_id', $band_id)->firstOrFail();
        return view('albums.album_edit', compact('album'));
    }

    public function updateAlbum(Request $request, $band_id, $album_id){
        $request->validate([
            'name' => 'required|string|max:50',
            'release_date' => 'required|date',
        ]);

        $album = Album::where('id', $album_id)->where('band_id', $band_id)->firstOrFail();

        $album->name = $request->name;
        $album->release_date = $request->release_date;
        $album->save();

        return redirect()->route('albums.albums_view', $band_id)->with('message', 'Album updated successfully!');
    }


    public function removeAlbum($id, $band_id) {
        $album = Album::find($id);

        if (!$album) {
            return redirect()->route('albums.albums_view', $band_id)
                ->with('error', 'Album not found.');
        }

        // Deleta o álbum
        $album->delete();

        return redirect()->route('albums.albums_view', $album->band_id)
            ->with('message', 'Album deleted successfully!');
    }


}
