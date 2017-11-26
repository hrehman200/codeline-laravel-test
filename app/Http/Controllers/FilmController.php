<?php

namespace App\Http\Controllers;

use App\Films;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class FilmController extends Controller {

    protected $rules = [
        'name' => ['required', 'min:3'],
        'description' => ['required'],
        'release_date' => ['required'],
        'rating' => ['required', 'min:1', 'max:5'],
        'ticket_price' => ['required'],
        'country' => ['required'],
        'genre' => ['required'],
        'photo' => ['required', 'mimes:png']
    ];

    public function index() {
        return view('films.index');
    }

    public function getFilms() {
        return Films::all();
    }

    public function show(Films $film) {
        return view('films.show', compact('film'));
    }

    public function create() {
        return view('films.create');
    }

    public function store(Request $request) {

        $validator = Validator::make($request->all(), $this->rules);
        if ($validator->fails()) {
            //return Redirect::route('films.create')->withErrors($validator)->withInput();
        }

        $input = Input::all();

        $path = $request->file('photo')->store(
            'films', 'public'
        );

        $input['slug'] = str_slug($input['name']);
        $input['photo'] = basename($path);

        Films::create( $input );

        return Redirect::route('films.index')->with('message', 'Film created');
    }

}
