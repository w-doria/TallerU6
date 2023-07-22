<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/calculadora.css">
    <title>Punto 4</title>
</head>
<body>
    <div class="main-frame-cal">
        <h4> Este programa determina su edad exacta en años meses y días, ingresando su fecha de nacimiento:</h4><br>
        <form action="" method="POST">
                <label for="exampleFormControlInput1">Seleecione su fecha de nacimiento:</label>
                <input type="date" name="f_n">
            <br>
            <br>
            <button type="submit" name="verificar">Verificad edad</button>
        </form>
        <br>
        <br>

        <?php
            if (isset($_POST['verificar'])) {
                $f_n = new DateTime($_POST['f_n']);
            
                $date2 = new DateTime(date("y-m-d"));
            
                $diff = $f_n->diff($date2);
            
                $edad_actual = $diff->y;
                $edad_meses = $diff->m;
                $edad_dias = $diff->d;
                echo "años: ".$edad_actual." meses: ".$edad_meses." dias: ".$edad_dias;
            }
        ?>
    </div>
</body>
</html>
</body>
</html>