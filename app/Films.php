<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Films extends Model {

    protected $fillable = ['name', 'description', 'release_date', 'rating', 'ticket_price', 'country', 'genre', 'photo', 'slug'];

    public function getRouteKeyName() {
        return 'slug';
    }

    public function comments() {
        return $this->hasMany('App\Comments');
    }

    public function getPhoto() {
        return asset('storage/films/'.$this->photo);
    }

}
