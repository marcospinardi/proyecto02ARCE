<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
        <main class="container">
            <h1>Listado de categorias</h1>

            <ul class="list-group">
        @foreach( $categorias as $categoria )
                <li class="list-group-item">
                    {{$categoria->idCategoria}}
                    {{$categoria->catNombre}}
                </li>
        @endforeach
            </ul>

        </main>
</body>
</html>
