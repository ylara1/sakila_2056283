<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Pelicula extends Model
{
    protected $table = "film";
    protected $primaryKey = "film_id";
    public $timestamps = false;

    //Metodo para encontrar las categorias
    public function categorias()
    {
       return $this-> belongsToMany('App\Categoria','film_category','film_id','category_id');
    }

    public function idioma(){
        //Retornamos el inverso de la relacion
        return $this->belongsTo("App\Idioma","language_id");
    }

}
