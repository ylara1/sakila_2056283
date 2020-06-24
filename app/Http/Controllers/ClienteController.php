<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Customer;
use App\Address;

class ClienteController extends Controller
{
    //Accion GET
    public function create()
    {
        //Traer los paises
        $paises = Country::all();

        return view('clientes.new')->with("paises", $paises);
    }

    public function store(Request $r)
    {
        $d = new Address();

        $d->address = $r->input("direccion_cliente");
        $d->city_id = $r->input("ciudad_cliente");
        $d->save();

        //Crear el cliente

        $c = new Customer();
        $c->first_name = $r->input("nombre_cliente");
        $c->last_name = $r->input("apellido_cliente");
        $c->email = $r->input("email_cliente");
        // Clave foranea
        $c->store_id = 1;
        //Vinculacion cliente a direccion creada
        $c->address_id = $d->address_id;
        //verificar si llega activo
        if ($r->input("activo_cliente"==null)) {
            # code...
            $c->active = 0;
        } else {
            $c->active = 1;
        }
        $c->save();
        echo "exito :v";
    }
}
