<?php

namespace App\Http\Controllers;
use App\Models\Band;
use App\Models\Album;


use Illuminate\Http\Request;

class BandController extends Controller
{
    /**
     * Home page view with all bands
     */
    public function showBands(){
        $bands = Band::all();

        return view('home', compact('bands'));
    }


    public function editBand($id){

        $band = Band::find($id);
        return view('band.band_edit', compact('band'));
    }

   public function updateBand(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'genre' => 'required|string|max:50',
        ]);

        $band = Band::find($id);
        $band->name = $request->name;
        $band->genre = $request->genre;
        $band->save();

        return redirect()->route('home')->with('message', 'Band updated successfully!');
    }


    public function removeBand($id){
        Band::find($id)->delete();

        return redirect()->route('home');
    }

}
