<?php
// Notificar solamente errores de ejecución
error_reporting(E_ERROR | E_PARSE);
try{
$conexion=mysqli_connect("", "","", "");
if (!$conexion) {
    //die("Error de conexion: " . mysqli_connect_error());
 }
}catch(Exception $e){


}

?>