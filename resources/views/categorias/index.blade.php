<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!--contenedor-->
    <div class="panel-group" >
        <!--Panel-->
        <div clas="card">
            <!--Encabezado del panel-->
            <!--Las categorias-->
            <div class="card-body">
                <h3 class="card-title">CATEGORIAS</h3>
                <ul class="list list-group-flush">
                @foreach($categorias as $c)
                    <li class="list-group-item"> {{ $c->name }}</li>
                    <ul><a href="{{ url('categorias/edit/'.$c->category_id) }}">Actualizar</a></ul>
                    
                @endforeach
                
                </ul>
                
            </div>
            
            
        </div>

    </div>
    <!--Paginacion de categorias con el metodo links() -->
    {{ $categorias->links() }}
</body>
</html>