<?php

namespace App\Http\Controllers;

use App\Films;
use Illuminate\Http\Request;

class FilmController extends Controller {

    public function index() {
        //return Films::all();

        return view('films.index');
    }

    public function show(Films $film) {
        return view('films.show', compact('film'));
    }
}
