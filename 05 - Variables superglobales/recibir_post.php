<?php
/*
ESTA PAGINA RECIBIO UN ARREGLO DE VALORES ALMACENADOS EN LA VARIABLE GLOBAL '$_POST' 
DONDE CADA ELEMENTO SE IDENTIFICA CON UN NOMBRE, MISMO QUE SE USA PARA LLAMARLOS
ES MÁS RECEOMENDABLEE USAR EL METODO POST YA QUE NO EEXPONE LOS VALORES QUE SE NVIAN
 */

echo '<h1>'. $_POST['nombre'].'</h1>';
echo '<h1>'. $_POST['apellidos']. '</h1>';

var_dump($_POST);
?>