<html>
    <head>
        <title>Creación de usuarios</title>
    </head>
    
    <body>
        <h1>Administración de Usuarios</h1>
        <form action="index.php" method="post">
            <input type="submit" value="Crear Usuario" name="crear" />
            <input type="submit" value="Consultar usuario" name="consulta" />
        </form>
    </body>
</html>

<?php
require_once 'controllers/usuario.php';

$controlador = new UsuarioController();
$crear = $consulta = '';

if( isset($_POST['crear']) ) {
        $crear = $_POST['crear'];
     }
if( isset($_POST['consulta']) ) {
        $consulta = $_POST['consulta'];
     }

if($consulta){
    $controlador->mostrarTodo();
}else if($crear){
    $controlador->crear();
}
//$controlador->mostrarTodo();

//$controlador->crear();

?>