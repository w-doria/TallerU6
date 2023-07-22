<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/calculadora.css">
    <title>Punto 3</title>
</head>
<body>
    <div class="main-frame-cal">

    <h4> Este programa utiliza el método GET para mostrar los datos ingresados:</h4>

        <form action="" method="GET">
                <label for="exampleFormControlInput1">Nombre</label>
                <input type="text" name="nombre" placeholder="Digite su Nombre">
                <br>
                <br>
                <label for="exampleFormControlInput1">Apellido</label>
                <input type="text" name="apellido"  placeholder="Digite su Apellido">
                <br>
                <br>
                <label for="exampleFormControlInput1">Cédula</label>
                <input type="text" name="cc" placeholder="Digite su Cédula">
                <br>
                <br>
                <button type="submit" name="verificar" class="btn btn-outline-info">Enviar</button>
                <br>
                <br>
        </form>

    <?php

    $edad = 0;
    
    if (isset($_GET['verificar'])) {
        $nombre = $_GET['nombre'];
        $apellido = $_GET['apellido'];
        $cedula = $_GET['cc'];
    
        echo "Nombre : ".$nombre."<br>";
        echo "Apellido : ".$apellido."<br>";
        echo "Cédula : ".$cedula."<br>";

    }

    ?>
    </div>
</body>
</html>