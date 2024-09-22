<?php
$distancia = $_POST['distancia'];
$velocidad = $_POST['velocidad'];
$tiempo = $distancia / $velocidad;
echo "El tiempo que tarda en recorrer la distancia de $distancia km a una velocidad de $velocidad km/h es de $tiempo h";
?>