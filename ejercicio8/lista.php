<?php
//Usamos explode para especificar por dónde queremos crear el array 
//(separador (en este caso usaremos los saltos de línea), String (lo que queremos que se añada))
//trim para quitar los espacios y no se añadan productos vacíos
$array = explode("\n", trim ($_POST['lista']));

//Creamos la lista
echo "<ul>";
//hacemos un bucle para recorrer el array hasta el número de elementos que haya (count)
for ($i = 0; $i < count($array); $i++) {
    $linea = $array[$i];
    echo "<li>" . $linea . "</li>";
}
echo "</ul>";
?>
