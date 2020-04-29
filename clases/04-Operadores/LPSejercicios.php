<?php
echo '<h1>Ejercicios Liliana Parada Sánchez</h1>';

/***********Ejercicio 1***********/
echo '<h2>Ejercicio 1. Calcular el valor IMC</h2>';
//Peso en kilogramos
$peso = 65;
//Altura en metros
$altura = 1.67;
//Cálculo
$IMC=($peso/($altura*$altura));
//Resultado
echo 'Peso: '.$peso.' kg<br>'.
     'Altura: '.$altura.' m<br>'.
     'El IMC= '.$IMC;

/***********Ejercicio 2***********/
echo '<h2>Ejercicio 2. Convertir grados °C a °F</h2>';
//Temperatura en Celcius
$c = 59;
//Cálculo
$F = ($c*(9/5))+32;
//Resultado
echo 'Grados Celsius: '.$c.'°C<br>'.
     'Grados Fahrenheit= '.$F.'°F';

/***********Ejercicio 3***********/
echo '<h2>Ejercicio 3. El área de un circulo implementando constantes</h2>';
//Constante PIlps con valor de 3.141592
define('PIlps', '3.141592');
//Radio en cm
$radio = 3;
//Cálculo
$areaC = (PIlps*($radio*$radio));
//Resultado
echo 'El radio del círculo es: '.$radio.' cm <br>'.
     'El área del círculo = '.$areaC .' cm^2';
?>

