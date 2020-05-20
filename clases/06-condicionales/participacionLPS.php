<!DOCTYPE HTML>
<html lang ="esp">
    <head>
        <meta charset= "utf-8"/>
        <title> Formulario</title>
    </head>
    <body>
        <h1>Formulario y condicionales</h1>
        <h4>Liliana Parada Sánchez</h4>
        <form method="post" action="participacionLPS.php">
            <p>
                <label for="numero">Elija un número</label>
                <select type="number" name="numero">
                    <option value="0">Seleccione una opción</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </p>
            <input type="submit" value="Enviar datos" />
        </form>
    </body>
</html>


<?php
$numero = $_POST['numero'];
switch ($numero){
    case 1:
        //Switch
        echo "<h2>SWITCH</h2><br><hr>";
        echo "<br>Entraste a un switch para saber los meses del año <br>";
        echo "El código es el siguiente: <br>";
        echo "\$mes = 2; <br>
        switch(\$mes){<br>
            case 1:<br>
                echo \"El resultado es: El mes 1 es Enero\";<br>
                break;<br>
            case 2:<br>
                echo \"El resultado es: El mes 2 es Febrero\";<br>
                break;<br>
            case 3:<br>
                echo \"El resultado es: El mes 3 es Marzo\";<br>
                break;<br>
            case 4:<br>
                echo \"El resultado es: El mes 4 es Abril\";<br>
                break;<br>
            case 5:<br>
                echo \"El resultado es: El mes 5 es Mayo\";<br>
                break;<br>
            case 6:<br>
                echo \"El resultado es: El mes 6 es Junio\";<br>
                break;<br>
            case 7:<br>
                echo \"El resultado es: El mes 7 es Julio\";<br>
                break;<br>
            case 8:<br>
                echo \"El resultado es: El mes 8 es Agosto\";<br>
                break;<br>
            case 9:<br>
                echo \"El resultado es: El mes 9 es Septiembre\";<br>
                break;<br>
            case 10:<br>
                echo \"El resultado es: El mes 10 es Octubre\";<br>
                break;<br>
            case 11:<br>
                echo \"El resultado es: El mes 11 es Noviembre\";<br>
                break;<br>
            case 12:<br>
                echo \"El resultado es: El mes 12 es Diciembre\";<br>
                break;<br>
            default:<br>
                echo \"El resultado es: No es un mes válido\";<br>
                break;<br>
        }<br><hr>";
        
        $mes = 2;
        switch($mes){
            case 1:
                echo "El resultado es: El mes 1 es Enero";
                break;
            case 2:
                echo "El resultado es: El mes 2 es Febrero";
                break;
            case 3:
                echo "El resultado es: El mes 3 es Marzo";
                break;
            case 4:
                echo "El resultado es: El mes 4 es Abril";
                break;
            case 5:
                echo "El resultado es: El mes 5 es Mayo";
                break;
            case 6:
                echo "El resultado es: El mes 6 es Junio";
                break;
            case 7:
                echo "El resultado es: El mes 7 es Julio";
                break;
            case 8:
                echo "El resultado es: El mes 8 es Agosto";
                break;
            case 9:
                echo "El resultado es: El mes 9 es Septiembre";
                break;
            case 10:
                echo "El resultado es: El mes 10 es Octubre";
                break;
            case 11:
                echo "El resultado es: El mes 11 es Noviembre";
                break;
            case 12:
                echo "El resultado es: El mes 12 es Diciembre";
                break;
            default:
                echo "El resultado es: No es un mes válido";
                break;
        }
        goto end;
        
        break;
    case 2:
        echo "<h2>IF</h2><br><hr>";
        echo "<br>Entraste a un if para saber el género <br>";
        echo "El código es el siguiente: <br>";
        echo "\$genero = \"M\";<br>
        if(\$genero == \"M\"){<br>
            echo \"El resultado es: El género es masculino\";<br>         
        } else{<br>
            echo \"El resultado es: El género es femenino\";<br>
        }<br><hr>";
        $genero = "M";
        if($genero == "M"){
            echo "El resultado es: El género es masculino";            
        } else{
            echo "El resultado es: El género es femenino";
        }
        goto end;
        break;
    case 3:
        echo "<h2>GOTO</h2><br><hr>";
        echo "<br>Entraste a un goto para ir a un segmento del código <br>";
        goto suma;
        
        
        break;
    default:
        echo "Esperando una opción";
        goto end;
        break;
}

suma:
$num1 = 5;
$num2 = 5;
$resultado = $num1+$num2;
echo "El código es el siguiente: <br>";
        echo "suma:<br>
                \$num1 = 5;<br>
                \$num2 = 5;<br>
                \$resultado = \$num1+\$num2;<br><hr>";
echo "<br>Estás en el goto y el resultado de la suma es: ".$resultado."<br><br>";
goto end;

end:
?>

