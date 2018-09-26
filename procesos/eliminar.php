<?php 

include_once('conexion.php');

$id = $_REQUEST['id'];


$sql = "DELETE FROM entradas WHERE id_entrada = '$id'";
$respuesta = $conexion->query($sql);

if($respuesta){
	echo '<script type="text/javascript" >
     		alert("Entrada eliminada con exito"); 
     		window.location="../panel.php";      
          </script>';
}
else{
	echo '<script type="text/javascript" >
     		alert("La entrada no se pudo eliminar"); 
     		window.location="../panel.php";      
          </script>';
}

?>