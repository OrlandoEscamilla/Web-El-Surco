<?php 

include_once('conexion.php');

$id = $_POST['id'];
$titulo_entrada = $_POST['titulo'];
$descripcion_entrada = $_POST['descripcion'];
$categoria_entrada = $_POST['categoria'];
$fecha_entrada = $_POST['fecha'];
$img_entrada = $_POST['img'];


$nombre_imagen = $_FILES['img']['name'];
$tipo_imagen = $_FILE['img']['type'];
$tamano_imagen = $_FILE['img']['size'];

$carpeta = '../img/blog/';
$fichero_subido = $carpeta . basename($_FILES['img']['name']);
move_uploaded_file($_FILES['img']['tmp_name'], $fichero_subido); //subimos el nuevo archivo al directorio


$sql = "UPDATE entradas SET titulo_entrada = '$titulo_entrada', 
						  descripcion_entrada = '$descripcion_entrada', 
						  categoria_entrada = '$categoria_entrada', 
						  fecha_entrada = '$fecha_entrada', 
						  img_entrada = '$nombre_imagen' 
						  WHERE id_entrada = '$id'";

$respuesta = $conexion->query($sql);



if($respuesta){
	
	echo '<script type="text/javascript" >
     		alert("Entrada actualizada con exito."); 
     		window.location="../panel.php";      
          </script>';

	
	
}
else{
	echo '<script type="text/javascript" >
     		alert("La entrada no pudo ser actualizada."); 
     		window.location="../panel.php";      
          </script>';
}


 ?>