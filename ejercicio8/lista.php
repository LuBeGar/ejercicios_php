<?php
//Usamos explode para especificar por dónde queremos separar los elementos insertados
//(separador (en este caso usaremos los saltos de línea), String (lo que queremos que se añada))
$array = explode("\r\n", ($_POST['lista']));

//Creamos la lista
echo "<ul>";
//hacemos un bucle para recorrer el array hasta el número de elementos que haya (count)
for ($i = 0; $i < count($array); $i++) {
    $linea = $array[$i];
    //Para que no queden productos vacíos
    if ($linea != null) {
    echo "<li>" . $linea . "</li>";
    }
}
echo "</ul>";
?>
