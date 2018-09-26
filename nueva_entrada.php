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
	<script src="ckeditor/ckeditor.js"></script>
	<script src="ckfinder/ckfinder.js"></script>
</head>
<body>


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
		<h2>Agregar Nueva Entrada</h2>
	</div>

<section id="inicio">

	<div id="containerNuevaentrada">
		<form action="procesos/insertar.php" method="post" enctype="multipart/form-data">
			
			<input type="text" name="titulo" placeholder="Introduce el título aquí..." required>
			<textarea  id="editor1" name="descripcion" placeholder="Descripción entrada..."></textarea> 
			<br>  
			<select name="categoria" required>
			  <option  disabled selected>Selecciona una categoría</option>
			  <option value="Agricultura">Agricultura</option>
			  <option value="Botanica">Botanica</option>
			  <option value="Geología">Geologia</option>
			  <option value="Riego">Riego</option>
			</select>
			<input id="date" type="date" name="date" placeholder="fecha" required>
			<input id="file" type="file" name="img" placeholder="Imagen de la entrada" required="">
			<br>
			<input id="buttonNuevaentrada" type="submit" value="Publicar"> </input>
		</form>		


	</div>
		
</section>

<script type="text/javascript">
	window.onload = function(){
		editor = CKEDITOR.replace("editor1")
		CKFinder.setupCKEditor(editor,'http://localhost/elsurco/ckfinder')
	}
	
</script>
	

</body>
</html>
