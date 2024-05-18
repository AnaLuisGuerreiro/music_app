<?php

namespace App\Http\Controllers;
use App\Models\Band;
use App\Models\Album;


use Illuminate\Http\Request;

class BandController extends Controller
{
    public function showBands(){
        $bands = Band::all();

        return view('home', compact('bands'));
    }

     public function albumsView($id){
        $band = Band::find($id);
        $albums = $band->albums;

        return view('albums.albums_view', compact('band','albums'));
    }

}
