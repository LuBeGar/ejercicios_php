<?php
$numero = $_POST['numero'];
$resultado = 0;
//Realizamos un bucle que vaya sumando los números desde 1 hasta el indicado
for($i = 1; $i <= $numero; $i++){
    $resultado = $resultado + $i;
}
echo "La suma de todos los números hasta $numero es $resultado";
?>