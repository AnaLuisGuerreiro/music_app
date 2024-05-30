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

     public function editAlbum($id){

        $album = Album::find($id);
        return view('albums.album_edit', compact('album'));
    }

       public function updateAlbum(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'release_date' => 'required|date',
        ]);

        $album = Album::find($id);
        $band->name = $request->name;
        $band->release_date = $request->release_date;
        $band->save();

        return redirect()->route('/')->with('message', 'Album updated successfully!');
    }

     public function removeAlbum($id){
        Album::find($id)->delete();

        return redirect()->route('/');
    }
}
