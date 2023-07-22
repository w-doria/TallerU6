<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULADORA</title>
    <link rel="stylesheet" href="css/calculadora.css">

</head>
<body>
<div class="main-frame-cal">
    <h1>Taller de back end </h1>

    <h4> Este programa te ayuda a hacer cuentas, dale dos números y elige la operación:</h4>
    <form action="" method="post">
        <input type="number" name="num1" placeholder="escribe el primer numero">
        <input type="number" name="num2" placeholder="escribe el segundo numero">
        <select name="oper" id="">
            <option value="1">suma</option>
            <option value="2">resta</option>
            <option value="3">multiplicación</option>
            <option value="4">división</option>
        </select>
        <input type="submit" value="Operar" name="proceso">
        <br>
        <br>
    </form>
    
    <?php 
        if (isset($_POST['proceso'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $oper = $_POST['oper'];

            switch ($oper) {
                case '1':
                    $resultado = $num1+$num2;
                    $name = 'suma';
                    break;
                case '2':
                    $resultado = $num1-$num2;
                    $name = 'resta';
                    break;
                case '3':
                    $resultado = $num1*$num2;
                    $name = 'multiplicación';
                    break;
                case '4':
                    $resultado = $num1/$num2;
                    $name = 'división';
                    break;
            }
            echo 'el resultado de la '.$name.' es: '.$resultado;
        }
    ?>
    </div>

</body>
</html>