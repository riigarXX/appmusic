<?php
echo "Inicio index"."<br>";
// Llamada al fichero que inicia la conexión a la Base de Datos
require_once("db/conexion.php");
?>

<?php
// Llamada al controlador

require_once("controllers/login.php");

?>