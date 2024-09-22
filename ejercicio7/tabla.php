<?php
$numero = $_POST['numero'];
$resultado = 0;
//Hacemos un bucle que vaya multiplicando el número desde 1 hasta 10
for($i = 1; $i <= 10; $i++){
    $resultado = $numero*$i;
    //Metemos el resultado en una tabla
    echo "<table border = 1> <tr> <td> $numero x $i = $resultado </td> </tr> </table>"; 
}
?>