<?php

namespace App\Http\Controllers;
use App\Models\Band;

use Illuminate\Http\Request;

class BandController extends Controller
{
    public function showBands(){
        $bands = Band::all();

        return view('home', compact('bands'));
    }
}
