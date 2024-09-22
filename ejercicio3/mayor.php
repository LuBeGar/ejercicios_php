<?php
$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$numero3 = $_POST['numero3'];
//Comprobamos cuál de los tres números es mayor
if ($numero1 > $numero2 && $numero1 > $numero3){
    echo "El número mayor entre $numero1, $numero2 y $numero3 es $numero1";
}else if ($numero1 <= $numero2 && $numero2 >= $numero3){
    echo "El número mayor entre $numero1, $numero2 y $numero3 es $numero2";
}else if($numero1 <= $numero3 && $numero2 <= $numero3){
    echo "El número mayor entre $numero1, $numero2 y $numero3 es $numero3";
//Por si se da la opción de que los tres números sean iguales
}else if($numero1 == $numero2 && $numero1 == $numero3){
    echo "Los números son iguales";
}
?>
