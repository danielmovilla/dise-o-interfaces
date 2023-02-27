<?php
if(count($_POST)<>4) die("Error al procesar datos");
else{
$nombre = $_POST["nom"];
$correo = $_POST["cor"];
$opcion = $_POST["opc"];
$peticion = $_POST["pet"];
}
$correcto = true;
if(strlen(trim($nombre))<3){
   $correcto = false;
}
if(strlen(trim($correo))<5){
   $correcto = false;
}
if($correcto) echo "$peticion";
else echo "no ok";
?>

