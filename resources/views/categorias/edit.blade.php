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
    <form class="form-horizontal" method="POST" action="{{ url('categorias/update') }}">
        @csrf
        <input name="id" type="hidden" value="{{ $categoria->category_id }}">
        <fieldset>
            <!--Detectar si la variable tiene valor-->
            @if(session("Exito"))
                <div class="alert-success">{{ session("Exito") }}</div>
            @endif     
        <!-- Form Name -->
    <legend>Editar Categoria</legend>

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-4 control-label" for="nombre">Nombre Categoria</label>  
    <div class="col-md-4">
    <input id="nombre" name="nombre" value="{{ $categoria->name }}" type="text" placeholder="Ingrese categoria" class="form-control input-md">
        <strong class="text-danger">{{ $errors->first('nombre') }}</strong>
    </div>
    </div>

    <!-- Button -->
    <div class="form-group">
    <label class="col-md-4 control-label" for=""></label>
    <div class="col-md-4">
        <button id="" name="" type="submit" class="btn btn-primary">Enviar</button>
    </div>
    </div>

    </fieldset>
    </form>

</body>
</html>