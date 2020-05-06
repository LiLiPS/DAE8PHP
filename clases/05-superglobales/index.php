<?php
/*Variable superglobal es una variable del sistema. Dan info del 
sistema del servidor, sirven también para dar o recibir datos. */

//variables del servidor
//Sirve para saber ip
echo "<h1>". $_SERVER['SERVER_ADDR']. "</h1>";

//Nombre del servidor
echo "<h1>". $_SERVER['SERVER_NAME']. "</h1>";

//Software en el servidor
echo "<h1>". $_SERVER['SERVER_SOFTWARE']. "</h1>";

//En que navegador se puede ejecutar
echo "<h1>". $_SERVER['HTTP_USER_AGENT']. "</h1>";

//Dirección para acceder de manera remota
echo "<h1>". $_SERVER['REMOTE_ADDR']. "</h1>";
?>

