<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet/css" href="../sass/app.scss" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/css/bootstrap.css">
    <title>Paises</title>
</head>
<body>
    <h1 class="text-danger">Lista de Paises</h1>
        <table class="table table-hover;">
            <thead >
                <tr>
                    <th>Pais</th>
                    <th>Capital</th>
                    <th>Moneda</th>
                    <th>Población</th>
                    <th>Ciudades</th>
                </tr>
            </thead>
            <tbody>
                @foreach($paises as $pais => $infopaises)
                <tr>
                    <td rowspan="">
                        <br>
                        {{$pais}}
                    </td>
                    <td rowspan="">
                        {{$infopaises["Capital"]}}
                    </td>
                    <td rowspan="">
                        {{$infopaises["Moneda"]}}
                    </td>
                    <td colspan="">
                        {{$infopaises["Poblacion"]}}
                    </td>
                    <td colspan="">
                        @foreach($infopaises["Ciudades"] as $Ciudades)
                            
                                {{$Ciudades}}
                            <br>
                        @endforeach
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</body>
</html>