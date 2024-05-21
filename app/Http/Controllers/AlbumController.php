<?php

namespace App\Http\Controllers;
use App\Models\Band;


use Illuminate\Http\Request;

class AlbumController extends Controller
{
 public function getAlbumsView($id){
        $band = Band::find($id);
        $albums = $band->albums;

        return view('albums.albums_view', compact('band','albums'));
    }
}
