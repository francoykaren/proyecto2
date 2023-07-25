<?php

$numero1 = $_POST['numero_1'];
$numero2 = $_POST['numero_2'];
$operacion = $_POST['operacion'];


if($operacion == 'sumar'){
    print($numero1 + $numero2);
}
if($operacion == 'restar'){
    print($numero1 - $numero2);
}
if($operacion == 'dividir'){
    print($numero1 / $numero2);
}
if($operacion == 'multiplicar'){
    print($numero1 * $numero2);
}



?>

