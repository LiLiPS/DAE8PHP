<?php
//Condicionales IF, SWITCH, GOTO
//Operadores ==, !=, <, >, <>(distinto), === (identico)
goto Condiciongoto;

Condicionif:
    echo "Estás en las condicionales papi";
$pais = "Mexico";
if($pais=="Mexico"){
    echo "<h1>Hermano ya eres Mexicano</h1>";    
}else{
    echo "Aún así te queremos";
}
echo "<hr>";

$dia = 2;
if ($dia==1){
    echo "LUNES";
}elseif($dia==2){
    echo "MARTES";
}
echo "<hr>";

Condicionswitch:
    echo "Estás en el switch baby";
//SWITCH
$opcion = 4;
switch ($opcion){
    case 1:
        //Instrucciones
        echo "LUNES";
        break;
    case 2:
        //Instrucciones
        echo "MARTES";
        break;
    case 3:
        //Instrucciones
        echo "MIERCOLES";
        break;
    case 4:
        //Instrucciones
        echo "JUEVES";
        break;
    default:
        //Instrucciones
        echo "Revisa nuevamente la opción que has seleccionado";
        break;
}
echo "<hr>";

//GOTO: método que trabaja por medio de marcas
//Marca = un segmento de códgio que quiero ejecutar sin tener que ejecutar el 
//script completo
Condiciongoto:
    echo "Condición goto, primera vez que están todos en clase";

?>

