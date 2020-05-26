<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


class CategoriaController extends Controller
{
    //Los controladores se componen de acciones
    //Acciones = metodos
    //Pueden tener cualquier nombre sin mayuscula
    public function index(){
        //Van las instrucciones a realizar
        echo "<h1>Listado de categorias</h1>";
        $categorias = Categoria::paginate(5);
        //Invocar vista e ingresar el listado de categorias
        return view("categorias.index")->with("categorias", $categorias);
    
    }
    
    public function create(){
        return view("categorias.new");
    }

    public function store(){
        //validar datos
        //reglas de validacion en el formulario
        $reglas=[
            "nombre"=>["required","alpha","min:4","unique:category,name"]
        ];

        //Mensajes en español
        $mensajes=[
            "required" => "Campo obligatorio",
            "alpha"=> "Solo letras",
            "min"=>"Solo categorias de :min caracteres",
            "unique" => "Categoria repetida"
        ];

        //Aplicar validacion
        //Crear un objeto validador
        $validador = Validator::make($_POST, $reglas, $mensajes);

        //hacer compracion de reglas
        if($validador -> fails()){
            //Fallo la validacion
            //Con los datos del formulario
            return redirect("categorias/create")
                ->withErrors($validador)->withInput();
        }else{
            //La validacion no falla
        

            //$_POST: es un arreglo de php
            // donde quedan almacenados los datos de un formulario
            $categoria = new Categoria;
            $categoria->name=$_POST["nombre"];
            $categoria->save();
            return redirect('categorias/create')->with("Exito","Categoria registrada");
        };
    }

    public function edit($category_id)
    {
        $categoria = Categoria::find($category_id);
        return view('categorias.edit')->with("categoria", $categoria);
    }

    public function update()
    {
        $categoria = Categoria::find($_POST["id"]);
        //Actualizar
        $categoria->name = $_POST["nombre"];
        //guardar
        $categoria->save();
        echo"Cambios guardados";
    }
}
