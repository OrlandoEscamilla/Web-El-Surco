<?php 


@session_start();
if(isset($_SESSION['email_user']) and  isset($_SESSION['pass_user'])){
	$email = $_SESSION['correo_user'];
	$contrasena = $_SESSION['pass_user'];

}
else{
header("Location: admin.html");	
}
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CMS El Surco</title>
	<link rel="icon" type="image/png" href="img/icono.gif"/>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="fonts/fonts.css">
</head>
<body>
<script type="text/javascript">
	function Eliminar(){
	var ventana = confirm("Seguro quiere eliminar esta entrada?", "");
	return ventana;
}
</script>


	<header id="header" style="background-color:#007c57; height: 59px;">
		<div class="headerCenter">
			<a href="index.html">
			<div class="containerLogo">
				<img src="img/logo.png">
			</div>
			</a>
			<nav>
				<ul>
					<a href="panel.php"><li>Entradas</li></a>
					<a href="nueva_entrada.php"><li>Nueva Entrada</li></a>
					<a href="cerrar_sesion.php"><li>Cerrar Sesión</li></a>
				</ul>
			</nav>
		</div>
	</header>
	<div class="containerTittlepanel">
		<h2>Administrador De Entradas</h2>
	</div>

<section id="inicio">
	<table>
	<thead>
		<tr>
			<td colspan="2"><a href="nueva_entrada.php" style="background-color:#01A9DB;">+ Nueva Entrada</a></td>
			<td colspan="4">Entradas Del Blog</td>
			<td colspan="2"><form action="buscar.php" method="POST">
				<input required type="text" name="q" placeholder="Buscar...">
				<input type="submit" name="" value="Buscar">
			</form></td>

		</tr>
		<tr>
			<td>Id</td>
			<td>Titulo</td>
			<td>Descripción</td>
			<td>Categoria</td>
			<td>Imagen</td>
			<td>Fecha Publicacion</td>			
			<td colspan="2">Operaciones</td>
		</tr>
	</thead>
	<tbody>
	<?php 
		include("procesos/conexion.php");
		$sql = "SELECT * FROM entradas order by id_entrada DESC";
		$respuesta = $conexion->query($sql);
		$fila = 0;
		while ($contacto = $respuesta->fetch_assoc()) {
			$fila++;
			if($fila%2==0){ ?> 
			<tr bgcolor="#d8d8d8"> 
			<?php }
			else{ ?> <tr bgcolor="#fff"> <?php } ?>
		

			<td><?php echo $contacto['id_entrada']; ?></td>
			<td><?php echo $contacto['titulo_entrada']; ?></td>
			<td>Modificar para ver...</td>
			<td><?php echo $contacto['categoria_entrada']; ?></td>
			<td><?php echo $contacto['img_entrada']; ?></td>
			<td><?php echo $contacto['fecha_entrada']; ?></td>
			
			<td><a href="procesos/modificar_entrada.php?id=<?php echo $contacto['id_entrada'];?>" style="background-color:#01A9DB;">Modificar</a></td>
			<td><a href="procesos/eliminar.php?id=<?php echo $contacto['id_entrada'];?>"" style="background-color:#01A9DB;"  onclick="return Eliminar();">Eliminar</a></td>
		</tr>
		<?php
		}
	 ?>

	</tbody>
</table>
</section>
	

</body>
</html>