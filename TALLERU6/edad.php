<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/calculadora.css">
    <title>PUNTO 2</title>
</head>
<body>
    <div class="main-frame-cal">
    <h1>Taller de back end </h1>

    <h4> Este programa te ayuda a determinar si eres o no mayor de edad, por favor ingresa tu edad por favor:</h4>
    <form action="" method="post">
        <input type="number" name="edad" placeholder="escribe tu edad">
        <br>
        <input type="submit" value="Calcular" name="proceso">
        <br>
    </form>
    
    <?php 
        if (isset($_POST['proceso'])) {
            $edad = $_POST['edad'];
            if($edad>=18){
                echo 'SI, en colombia con '.$edad.  ' años ya eres mayor de edad.';
            }
            if($edad<18){
                echo 'NO, en colombia con '.$edad. ' años aún no eres mayor de edad.';
            }
        }
    ?>
    </div>
    

</body>
</html>