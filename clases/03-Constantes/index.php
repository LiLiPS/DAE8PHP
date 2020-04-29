<?php
//Constante -> Un valor estático que no cambia en el tiempo
$var1 = 10.23;
define('pimine', '3.1416');


$area = 0.0;
$radio = 10;
$area = (pimine*($radio*$radio));

echo '<h1>'.$area.'</h1>';

echo '<h1>'.(pimine*($radio*$radio)).'</h1>';

define('cadena', 'archivo_');

//Constantes predefinidas (Sistema)
echo __LINE__;
echo __FILE__;

?>

