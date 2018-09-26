<?php 

include_once('conexion.php');
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$categoria = $_POST['categoria'];
$fecha = $_POST['date'];
$img = $_POST['img'];

$nombre_imagen = $_FILES['img']['name'];
$tipo_imagen = $_FILE['img']['type'];
$tamano_imagen = $_FILE['img']['size'];

$carpeta = '../img/blog/';
$fichero_subido = $carpeta . basename($_FILES['img']['name']);
move_uploaded_file($_FILES['img']['tmp_name'], $fichero_subido); //subimos el nuevo archivo al directorio




$sql = "INSERT INTO entradas(titulo_entrada, descripcion_entrada, categoria_entrada, img_entrada, fecha_entrada) VALUES('$titulo','$descripcion','$categoria','$nombre_imagen', '$fecha')";

$respuesta = $conexion->query($sql);



		



if($respuesta){
	echo '<script type="text/javascript" >
     		alert("Entrada publicada con exito."); 
     		window.location="../panel.php";      
          </script>';	
}
else{
	echo '<script type="text/javascript" >
     		alert("Entrada no publicada."); 
     		window.location="../nueva_entrada.php";      
          </script>';
}

 ?>