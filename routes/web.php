<?php

use App\Categoria;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Ruta de prueba
Route::get('prueba', function () {
    
    //Arreglo
    $estudiantes = [
        "Ana",
        "Jorge",
        "Maria"
    ];

    echo "<pre>";
    var_dump ($estudiantes);
    echo "</pre>";

});

Route::get('paises', function () {
    
    $paises = [
        "Colombia" => [
            "Capital" => "Bogota",
            "Moneda" =>"Peso",
            "Poblacion" => 55,
            "Ciudades" => [
                "Cali",
                "Medellin",
                "Barranquilla"
            ]
        ],
        "Ecuador"=> [
            "Capital" => "Quito",
            "Moneda" =>"Dolar",
            "Poblacion" => 10,
            "Ciudades" => [
                    "Guayaquil",
                    "Cuenca",
                    "Ambato"
            ]
        ],
        "Brasil"=> [
            "Capital" => "Brasilia",
            "Moneda" =>"Real",
            "Poblacion" => 220,
            "Ciudades" => [
                "Santos",
                "San Pulo",
                "Baia"
            ]
        ]
    ];
    //Arreglo a una vista
    return view("paises")->with("paises", $paises);
});

Route::get('categorias', function () {
    //Seleccionar datos a traves del modelo
});

Route::get('categorias', "CategoriaController@index");

Route::get('categorias/create', "CategoriaController@create");

Route::post('categorias/store', "CategoriaController@store");

Route::get('categorias/edit/{category_id}', "CategoriaController@edit");

Route::post('categorias/update', "CategoriaController@update");