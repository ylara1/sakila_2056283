<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
    protected $table = "film";
    protected $primaryKey = "film_id";
    public $timestamps = false;


    //Peliculas que pertenecen a un cierto idioma
    public function peliculas()
    {
        # code...
        return $this->  HasMany("App\Pelicula","language_id");
    }
}
