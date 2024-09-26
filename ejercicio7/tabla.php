<?php
$numero = $_POST['numero'];
$resultado = 0;

echo "<table border = 1>";
//Hacemos un bucle que vaya multiplicando el número desde 1 hasta 10
for($i = 1; $i <= 10; $i++){
    $resultado = $numero*$i;
    echo " <tr> <td> $numero x $i = $resultado </td> </tr>"; 
}
echo "</table>";
?>
